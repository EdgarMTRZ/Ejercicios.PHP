<html>
<head>
    <title> Ejercicio 5 </title>
    <meta charset="utf-8"/>
</head>
<body>
<h1>PROGRAMACIÓN DE APLICACIONES WEB</h1>
<h4>Mostrar en pantalla cual es el mayor de TRES números</h4>
<?php
$n1=54;
$n2=10;
$n3=36;

    if ($n1>$n2){
        echo "primer numero (".$n1.") es mayor que el segundo (".$n2.") y el primer numero es mayor que el tercero(".$n3.")";
    }
    else if ($n1==$n2){
        echo "El segundo numero (".$n2.") es igual que el tercero (".$n2.") por lo tanto el primer numero como el segundo son iguales al tercer numero (".$n3.")";
    }
    else{
        echo "El primero (".$n1.") es menor que el segundo (".$n2.") y el tercero es menor que el segundo numero (".$n3.")";
    }
?>
<p>EDGAR ANTONIO MARTINEZ IBARRA</p>
<a href="">Regresar al menu</a>
</body>
</html>