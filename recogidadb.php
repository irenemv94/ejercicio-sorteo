<?php

//Recoger los datos del formulario.
    $nombre_apellidos=$_POST('nombre_apellidos');
    $localidad=$_POST('email');
    $email=$_POST('telefono');
    $fecha=$_POST('fecha');
    
    //Realizar una una inserción de datos
    $query = "INSERT INTO concursantes VALUES (NULL, '".$nombre_apellidos."', '".$localidad."', '".$email."', '".$telefono."', '".$fecha."')";
    $result = mysql_query($query);
    
    if($result){
    //Mostrar por pantalla el resultado correcto.
    echo '<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
 
<body>
<div>
<p>Te has inscrito correctamente en el sorteo, gracias por participar.<br/></p>
    <a href="index.html"><p>Volver</p></p></a>
    </div>
</body>
</html>';
}

else {
//Mostrar por pantalla el resultado fallido.
echo '<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859" />
    <title>Mensaje de confirmaci$oacute;n</title>
</head>
<body>
    <div>
        <p>Tu inscripción ha fallado, vuelve a intentarlo.<br/></p>
    <a href="index.html"></p>Volver</p></a>
    </div>
</body>
</html>';
};

//Cerrar la conexión
mysql_close($link);


?>