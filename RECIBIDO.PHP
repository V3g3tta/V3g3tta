
<html>
<head>
	<title>EJERCICIO JESUATH</title>
</head>
<H1>BANCO</H1>
<body>
<form action="FORMULARIO.PHP" method="POST" >
<br></br> 
        <input type="submit" value="volver">
    </form>
<?php
$codigo=$_POST['CODIGO'];
$K=$_POST['CAPITAL'];
$M=$_POST['DIA'];
$I=$_POST['TASA'];
$F=$K*$I/100*(360-$M)/360;
echo "EL INTERES ES :" . $F;
echo "<br>";
echo "EL TOTAL DEL CAPITAL ES: " . $K;
echo "<br>";
echo "TOTAL DE USUARIO 1";

?>
</body>
</html>