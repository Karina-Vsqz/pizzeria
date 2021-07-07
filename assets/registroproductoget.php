<?php
    session_start();
    //require conexion.php;
    $dbhost="us-cdbr-east-02.cleardb.com";
    $dbuser="bd14eb2f543610";
    $dbpass="231fc2aa";
    $dbname="heroku_2b5ce0a236f4ba4";
    $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if(!$conn)
    {
        die("No hay conexion: ".mysqli_connect_error());
    }
    if(isset($_GET["p"]) && isset($_GET["c"]))
    {
        $condicion=$_GET["p"];
        
        //echo "console.log('$condicion')";
        //$micantidad=$_GET["c"];
        if($condicion==1)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
			//$total_producto=($cantidad*$precio);
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
			//$sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        if($condicion==2)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=150;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        if($condicion==3)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=170;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        if($condicion==4)
        {
            
            $producto="Asuncion";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=190;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            //echo "console.log ('INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$precio,'$nombreuser','$estatus','$tamanio')')";
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                //echo "console.log('Se registro')";
            }
            else
            {
                //echo "console.log('No se registro')";
            }
        }
        //AQUI-----------------------------------------------------------------------------------
        if($condicion==5)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {

            }
        }

        if($condicion==6)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=150;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==7)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=170;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==8)
        {
            $producto="Hawaina";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=190;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==9)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==10)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=150;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==11)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=170;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli))
            {
                
            }
        }
        if($condicion==12)
        {
            $producto="Mexicana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=190;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==13)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==14)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=150.00;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==15)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=170;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==16)
        {
            $producto="Italiana";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=190;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==17)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==18)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=150.00;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==19)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=170;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==20)
        {
            $producto="Azteca";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=190;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==21)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=130;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chica";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==22)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=150;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Mediana";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==23)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=170.00;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==24)
        {
            $producto="Pepperoni";
            $categoria="Pizza";
            $cantidad=$_GET["c"];
            $precio=190;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==25)
        {
            $producto="HamburguesaHawaina";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=60;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==26)
        {
            $producto="HamburguesaClasica";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=45;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==27)
        {
            $producto="HamburguesaDoble";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=80;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="ExtraGrande";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==28)
        {
            $producto="Hotdog";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=15;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==29)
        {
            $producto="Hotdog";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){
                
            }
        }
        if($condicion==30)
        {
            $producto="Hotdog";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=40;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){

            }
        }
        if($condicion==31)
        {
            $producto="AlitasBarbiquiu";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=70;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==32)
        {
            $producto="AlitasChipotle";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=70;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==33)
        {
            $producto="AlitasHabanero";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=80;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==34)
        {
            $producto="TortaHawaina";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=60;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==35)
        {
            $producto="TortaCubana";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=60;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==36)
        {
            $producto="TortaJamon";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==37)
        {
            $producto="TortaChirizo";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Normal";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==38)
        {
            $producto="Papas";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Chicas";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==39)
        {
            $producto="Papas";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=45;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Medianas";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==40)
        {
            $producto="Papas";
            $categoria="Adicionales";
            $cantidad=$_GET["c"];
            $precio=60;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="Grandes";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==41)
        {
            $producto="CocaCola";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=35;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==42)
        {
            $producto="Fanta";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=35;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==43)
        {
            $producto="Sprite";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=35;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==44)
        {
            $producto="Fresca";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=35;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="3Litro";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==45)
        {
            $producto="CocaCola";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="2Litros";
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==46)
        {
            $producto="Fanta";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="2Litros";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==47)
        {
            $producto="Sprite";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="2Litros";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==48)
        {
            $producto="Fresca";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=30;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="2Litros";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==49)
        {
            $producto="CocaCola";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=15;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==50)
        {
            $producto="Fanta";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=15;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==51)
        {
            $producto="Sprite";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=15;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==52)
        {
            $producto="Fresca";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=15;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==53)
        {
            $producto="Agua";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=8;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="600ml";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
        if($condicion==54)
        {
            $producto="Agua";
            $categoria="Bebidas";
            $cantidad=$_GET["c"];
            $precio=15;
            $estatus="Pendiente";$total_producto=($cantidad*$precio);
            $tamanio="1L";
            $iduser=$_SESSION["id"];
            $nombreuser=$_SESSION["user"];
            $sqli="INSERT INTO pedidos (producto, categoria, cantidad, precio, nombre_usuario, estatus,tamanio) VALUES ('$producto','$categoria','$cantidad',$total_producto ,'$nombreuser','$estatus','$tamanio')";
            if(mysqli_query($conn,$sqli)){}
        }
    }
    else
    {
       echo "console.log('Error')";
    }
?>
<!DOCTYPE html>
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
		<script src="../js/productocomprado.js"></script>
	</body>
</html>