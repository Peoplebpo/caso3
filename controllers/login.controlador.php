<?php

class ControladorLogin {
    public function clogin(){
        if(isset($_POST["user"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["user"])&&
              preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])
            ){
                

                $tabla="users";
                $item="usuario";
                $value=$_POST["user"];
                $response=ModeloLogin::mdlogin($tabla,$item,$value);

                

                // variables de sesion
                if(is_array($response)){

                  if($_POST["user"] == $response["usuario"] && $_POST["password"] == $response["password"]) 
                  
                  {
                      $_SESSION["validar_session"]="ok";
                      $_SESSION["user"]=$response["usuario"]; 
                      $_SESSION["password"]=$response["password"]; 
                      $_SESSION["nombre"]=$response["nombre"]; 
                      $_SESSION["correo"]=$response["correo"]; 
                      $_SESSION["rut_usuario"]=$response["rut_usuario"]; 
                      $_SESSION["servicio"]=$response["servicio"]; 
                      $_SESSION["perfil"]=$response["perfil"]; 
                      $_SESSION["rol"]=$response["rol"];
                      
  
  
                      echo "<script>
                              window.location='inicio';
                            </script>";
  
                  }else{
                      echo "<script>
                      const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        Toast.fire({
                          icon: 'error',
                          title: 'Datos incorrectos'
                        })
                   </script>";
                  
                  }
                }else{
                  echo "<script>
                      const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        
                        Toast.fire({
                          icon: 'error',
                          title: 'usuario no existe'
                        })
                   </script>";
                }
            }
        }
    }
}