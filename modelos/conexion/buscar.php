<?php

      $buscar = $_POST['b'];

      if(!empty($buscar)) {

            buscar($buscar);

      }

      function buscar($b) {

            $conexion= mysqli_connect("157.230.57.48","root","413471*IIO","ventas_cartera");

            $db = mysqli_select_db( $conexion,'ventas_cartera' ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

            $consulta = "SELECT * FROM clientes WHERE numero LIKE  '$b'";

            $sql = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

            $contar = mysqli_num_rows($sql);

            if($contar == 0){

                  echo "cliente no encontrado";

            }else{

                  while($row=mysqli_fetch_array($sql)){

                        $numero    = $row['numero'];
                        $nombre    = $row['nombre'];
                        $apellidos = $row['apellidos'];
                        $edad      = $row['edad'];
                        $email     = $row['email'];
                        $direccion = $row['direccion'];



                        $chartArray = array( 
                              "0" => array( 
                                  "numero" => $numero), 
                              "1" => array( 
                                  "nombre" => $nombre), 
                              "2" => array ( 
                                  "apellidos" => $apellidos),
                              "3" => array ( 
                                  "edad" => $edad),
                              "4" => array ( 
                                  "email" => $email),
                              "5" => array ( 
                                  "direccion" => $direccion)
                              );
                              
                              echo json_encode($chartArray);


                  }
            }
      }

?>