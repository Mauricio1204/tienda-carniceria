<?php  

SESSION_START();
session_destroy();

error_reporting(E_ALL ^E_DEPRECATED);
header("content-Type: text/html; Charset=UTF-8");
$txtCorreo = isset($_POST['txtCorreo'])? $_POST['txtCorreo'] : '';
$txtPws = isset($_POST['txtPws'])? $_POST['txtPws'] : '';

     //inicio de secion star
     $_SESSION['sesion1']=array();
     $_SESSION['sesion1']['nombre']=$nombre;
     $_SESSION['sesion1']['correo']=$correo ;
     //fin de session star

$con = new SQLite3("carniseria1.db") or die("Problemas para conectar");

  $cs = $con -> query("SELECT * FROM usuarios WHERE correo='$txtCorreo' AND clave='$txtPws' ");  
                        $idUsuario = '' ;
                        $nombre = '' ;
                        $correo ='';
                        $clave = '' ;
                  while ($resul = $cs -> fetchArray()) {
                      $idUsuario = $resul ['idUsuario'];
                      $nombre = $resul ['nombre'];
                      $correo = $resul ['correo'];
                      $clave = $resul ['clave'];
                    }
if (isset($txtCorreo) &&!empty($txtCorreo) && isset($txtPws) &&!empty($txtPws)) {       
     if ($txtCorreo==$correo && $txtPws == $clave ){
echo '<script>
        window.alert("Bienvenido a nuestro sitio web");
        window.location ="index.php"
        </script>';   
      } 
      else{
    echo '
    <script>
        window.location ="inicio_de_secion.php"
            alert("verifique su correo y/o clave");
        </script>';
      }
      }
    
    $con -> close();
// }else
// echo'
// <script>
//     window.location ="buscador.php"
// </script>';
// }
?>

