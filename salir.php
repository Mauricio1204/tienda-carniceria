<?php 

	session_start();

	unset($_SESSION['user']);

	header("location:../TIENDA_EN_LINEA/index.html");

 ?>