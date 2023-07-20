<?php 
SESSION_START();
echo $_SESSION['sesion1']['nombre'];
echo $_SESSION['sesion1']['correo'];
// echo '<pre>';
// print_r($_SESSION['sesion1']);
// echo '</pre>';
 
if (   isset($txtCorreo) &&!empty($txtCorreo))
 
?>