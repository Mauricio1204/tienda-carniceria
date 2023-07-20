<?php  
error_reporting(E_ALL ^E_DEPRECATED);
header("content-Type: text/html; Charset=UTF-8");

$txtNombre = isset($_POST['txtNombre'])? $_POST['txtNombre'] : '';
$txtAlias = isset($_POST['txtAlias'])? $_POST['txtAlias'] : '';
$txtCorreo = isset($_POST['txtCorreo'])? $_POST['txtCorreo'] : '';
$txtPws = isset($_POST['txtPws'])? $_POST['txtPws'] : '';

 
                        
                        
                            
                              
      if(   isset($txtCorreo) &&!empty($txtCorreo)
            && isset($txtPws) &&!empty($txtPws)
            && isset($txtNombre) &&!empty($txtNombre)
            && isset($txtAlias) &&!empty($txtAlias)
            
      
             ) {   
               
              $con = new SQLite3("carniseria1.db") or die("Problemas para conectar");
  $cs = $con -> query("INSERT INTO usuarios (nombre,correo,clave,alias)
                        VALUES  ('$txtNombre','$txtCorreo','$txtPws','$txtAlias');"); 

                echo '<script>
              window.alert("registro insertado");
              
              </script>';   
            } else{
                echo '
                <script>
                    window.location ="index.php"
                        alert("registro no insertado");
                    </script>';
                  }
               
    $con -> close();
// }else
// echo'
// <script>
//     window.location ="buscador.php"
// </script>';

// }
?>
