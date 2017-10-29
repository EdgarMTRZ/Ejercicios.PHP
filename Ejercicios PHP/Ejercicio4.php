<html>
<head>
    <title> Ejercicio 4 </title>
    <meta charset="utf-8"/>
</head>
<body>
<h1>PROGRAMACIÓN DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla cual es el mayor de dos números</h4>
<?php
$n1=54;
$n2=10;

if ($n1>$n2){
    echo "El primer número (".$n1.") es mayor que el segundo (".$n2.")";
}
elseif ($n1==$n2){
    echo "El primer número (".$n1.") es igual al segundo (".$n2.")";
}
else{
    echo "El primer número (".$n1.") es menor que el segundo (".$n2.")";
}
?>
<p>EDGAR ANTONIO MARTINEZ IBARRA<p>
<a href="index.php"> Regresar al menu</a>
</body>
</html>