<?
    session_start();
    require conexion.php;
    $producto=$_POST['sfproducto'];
    $categoria=$_POST['sfcategoria'];
    $cantidad=$_POST['sfcantidad'];
    $precio=$_POST['sfprecio'];
    $estatus=$_POST['sfestatus'];
    $tamanio=$_POST['sftam'];
    $iduser=$_SESSION['id'];
    $nombreuser=$_SESSION['user'];

    $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, id_usuario, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio, $iduser ,'$nombreuser','$estatus','$tamanio')";
?>
