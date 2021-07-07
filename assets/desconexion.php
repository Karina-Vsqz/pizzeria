<?php
    session_start();

    session_destroy();
    require 'conexion.php';
?>
<html lang="es">
    <head>
        <title>LoginUser</title>
		<link rel="shortcut icon" href="favicon.ico">

		<link rel="stylesheet" href="../css/animate.css">
		<link rel="stylesheet" href="../css/icomoon.css">
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/flexslider.css">
		<link rel="stylesheet" href="../css/style.css">

		<script src="../js/modernizr-2.6.2.min.js"></script>
	</head>
    <body>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
		<script src="../js/mensajecerraru.js"></script>
	</body>
</html>