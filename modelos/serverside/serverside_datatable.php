<?php
include '../conexion/conexion.php';

class TableData {
    private $_db;
    public function __construct() {
        try {            

            $host        = "157.230.57.48";
            $database    = "cobranza_cliente";
            $user        = "root";
            $passwd      = "413471*IIO"; 

            
            $this->_db = new PDO('mysql:host='.$host.';dbname='.$database, $user, $passwd, array(
                PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        } catch (PDOException $e) {
            error_log("Failed to connect to database: ".$e->getMessage());
        }                
    }    
    public function get($table, $index_column, $columns) {
        // Paging
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ) {
            $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".intval( $_GET['iDisplayLength'] );
        }
        
        // Ordering
        $sOrder = "";
        if ( isset( $_GET['iSortCol_0'] ) ) {
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ) {
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ) {
                    $sortDir = (strcasecmp($_GET['sSortDir_'.$i], 'ASC') == 0) ? 'ASC' : 'DESC';
                    $sOrder .= "`".$columns[ intval( $_GET['iSortCol_'.$i] ) ]."` ". $sortDir .", ";
                }
            }
            
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ) {
                $sOrder = "";
            }
        }
        
        /*
         * Filtering
         * NOTE this does not match the built-in DataTables filtering which does it
         * word by word on any field. It's possible to do here, but concerned about efficiency
         * on very large tables, and MySQL's regex functionality is very limited
         */
        $sWhere = "";
        if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
            $sWhere = "WHERE (";
            for ( $i=0 ; $i<count($columns) ; $i++ ) {
                if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" ) {
                    $sWhere .= "`".$columns[$i]."` LIKE :search OR ";
                }
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        // Individual column filtering
        for ( $i=0 ; $i<count($columns) ; $i++ ) {
            if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ) {
                if ( $sWhere == "" ) {
                    $sWhere = "WHERE ";
                }
                else {
                    $sWhere .= " AND ";
                }
                $sWhere .= "`".$columns[$i]."` LIKE :search".$i." ";
            }
        }
        
        // SQL queries get data to display
        $sQuery = "SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $columns))."` FROM `".$table."` ".$sWhere." ".$sOrder." ".$sLimit;
        $statement = $this->_db->prepare($sQuery);
        
        // Bind parameters
        if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
            $statement->bindValue(':search', '%'.$_GET['sSearch'].'%', PDO::PARAM_STR);
        }
        for ( $i=0 ; $i<count($columns) ; $i++ ) {
            if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ) {
                $statement->bindValue(':search'.$i, '%'.$_GET['sSearch_'.$i].'%', PDO::PARAM_STR);
            }
        }

        $statement->execute();
        $rResult = $statement->fetchAll();
        
        $iFilteredTotal = current($this->_db->query('SELECT FOUND_ROWS()')->fetch());
        
        // Get total number of rows in table
        $sQuery = "SELECT COUNT(`".$index_column."`) FROM `".$table."`";
        $iTotal = current($this->_db->query($sQuery)->fetch());
        
        // Output
        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
        
        // Return array of values
        foreach($rResult as $aRow) {
            $row = array();            
            for ( $i = 0; $i < count($columns); $i++ ) {
                if ( $columns[$i] == "version" ) {
                    // Special output formatting for 'version' column
                    $row[] = ($aRow[ $columns[$i] ]=="0") ? '-' : $aRow[ $columns[$i] ];
                }
                else if ( $columns[$i] != ' ' ) {
                    $row[] = $aRow[ $columns[$i] ];
                }
            }
            $output['aaData'][] = $row;
        }
        
        echo json_encode( $output );
    }

    //////////////// creacion de funcion para la relacion de usuario y resgistros
    public function get2($table, $index_column, $columns) {
        session_start();
        if (isset($_SESSION["user"])) {
            $idU     = $_SESSION["id"];
            $rol     = $_SESSION["rol"];
        }
        $sLimit = "";
        if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' ) {
            $sLimit = "LIMIT ".intval( $_GET['iDisplayStart'] ).", ".intval( $_GET['iDisplayLength'] );
        }
        
        // Ordering
        $sOrder = "";
        if ( isset( $_GET['iSortCol_0'] ) ) {
            $sOrder = "ORDER BY  ";
            for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ ) {
                if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" ) {
                    $sortDir = (strcasecmp($_GET['sSortDir_'.$i], 'ASC') == 0) ? 'ASC' : 'DESC';
                    $sOrder .= "`".$columns[ intval( $_GET['iSortCol_'.$i] ) ]."` ". $sortDir .", ";
                }
            }
            
            $sOrder = substr_replace( $sOrder, "", -2 );
            if ( $sOrder == "ORDER BY" ) {
                $sOrder = "";
            }
        }
        if($rol=='Admin'){$sWhere = "";}else{$sWhere = "WHERE id_userC=$idU";}
        if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
            if ( $sWhere == "" ) {
                $sWhere .= "WHERE (";
            }else{
                $sWhere .= " and (";
            }
            for ( $i=0 ; $i<count($columns) ; $i++ ) {
                if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" ) {
                    $sWhere .= "`".$columns[$i]."` LIKE :search OR ";
                }
            }
            $sWhere = substr_replace( $sWhere, "", -3 );
            $sWhere .= ')';
        }
        
        // Individual column filtering
        for ( $i=0 ; $i<count($columns) ; $i++ ) {
            if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ) {
                if ( $sWhere == "" ) {
                    $sWhere .= "WHERE ";
                }
                else {
                    $sWhere .= " AND ";
                }
                $sWhere .= "`".$columns[$i]."` LIKE :search".$i." ";
            }
        }
        $sQuery = "SELECT SQL_CALC_FOUND_ROWS `".str_replace(" , ", " ", implode("`, `", $columns))."` FROM `".$table."` ".$sWhere." ".$sOrder." ".$sLimit;
        $statement = $this->_db->prepare($sQuery);
        
        // Bind parameters
        if ( isset($_GET['sSearch']) && $_GET['sSearch'] != "" ) {
            $statement->bindValue(':search', '%'.$_GET['sSearch'].'%', PDO::PARAM_STR);
        }
        for ( $i=0 ; $i<count($columns) ; $i++ ) {
            if ( isset($_GET['bSearchable_'.$i]) && $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' ) {
                $statement->bindValue(':search'.$i, '%'.$_GET['sSearch_'.$i].'%', PDO::PARAM_STR);
            }
        }

        $statement->execute();
        $rResult = $statement->fetchAll();
        
        $iFilteredTotal = current($this->_db->query('SELECT FOUND_ROWS()')->fetch());
        
        // Get total number of rows in table
        $sQuery = "SELECT COUNT(`".$index_column."`) FROM `".$table."` WHERE id_userC=$idU";
        $iTotal = current($this->_db->query($sQuery)->fetch());
        
        // Output
        $output = array(
            "sEcho" => intval($_GET['sEcho']),
            "iTotalRecords" => $iTotal,
            "iTotalDisplayRecords" => $iFilteredTotal,
            "aaData" => array()
        );
        
        // Return array of values
        foreach($rResult as $aRow) {
            $row = array();            
            for ( $i = 0; $i < count($columns); $i++ ) {
                if ( $columns[$i] == "version" ) {
                    // Special output formatting for 'version' column
                    $row[] = ($aRow[ $columns[$i] ]=="0") ? '-' : $aRow[ $columns[$i] ];
                }
                else if ( $columns[$i] != ' ' ) {
                    $row[] = $aRow[ $columns[$i] ];
                }
            }
            $output['aaData'][] = $row;
        }
        
        echo json_encode( $output );
    }
}

header('Pragma: no-cache');
header('Cache-Control: no-store, no-cache, must-revalidate');
// Create instance of TableData class
$table_data = new TableData();
?>