<html>
    <head>
        <title>
            Caso 2
        </title>
</head>
<body>
    <form method="get" action="">
        Precio actual de la gaseosa <br><input type="text" name="valor1"><br>
        Cantidad de unidades adquiridas <br><input type="text" name="valor2"><br>
        <br><input type="submit" value="Calcular"><br>
</form>
<?php
if(isset($_GET['valor1']))
$precio=$_GET['valor1'];
if(isset($_GET['valor2']))
$unidades =$_GET['valor2'];
if(isset($precio) && isset($unidades)){
$importe_compra = $precio - (0.05 * $precio);
$importe_descuento = 0.07 * $importe_compra;
$importe_pagar = $importe_compra - $importe_descuento;
$nuevo_precio = $importe_compra - $importe_descuento;
$obsequio = 2 * $unidades;
echo "El importe de la compra es : " .$importe_compra ."<br>";
echo "El importe del descuento es : " .$importe_descuento."<br>";
echo "El importe a pagar es : " .$importe_pagar."<br>";
echo "El nuevo precio es : " .$nuevo_precio."<br>";
echo "Cantidad de caramelos como obsequio : " .$obsequio."<br>";
}
?>
</body>
    </html>