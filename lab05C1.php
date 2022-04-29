<html>
    <head>
        <title>
            Caso 1
        </title>
</head>
<body>
    <form method="get" action="">
        Importe total vendido del mes <br><input type="text" name="valor1"><br>
        Cantidad de hijos en edad escolar <br><input type="text" name="valor2"><br>
        <br><input type="submit" value="Calcular"><br>
</form>
<?php
if(isset($_GET['valor1']))
$importe=$_GET['valor1'];
if(isset($_GET['valor2']))
$hijos =$_GET['valor2'];
if(isset($importe) && isset($hijos)){
$comision = 0.075 * $importe;
$bonificacion = 50 * $hijos;
$sueldo_bruto = 600 + $comision + $bonificacion;
$descuento = 0.11 * $sueldo_bruto;
$sueldo_neto = $sueldo_bruto - $descuento;
echo "La comision es : " .$comision ."<br>";
echo "La bonificacion es : " .$bonificacion."<br>";
echo "El sueldo bruto es : " .$sueldo_bruto."<br>";
echo "El descuento es : " .$descuento."<br>";
echo "El sueldo neto de un vendedor es : " .$sueldo_neto."<br>";
}
?>
</body>
    </html>