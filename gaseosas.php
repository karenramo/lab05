
<html>
    <head>
        <title>Venta y descuento de gaseosas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>

        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1" back>
                <tbody>
                    <tr>
                        <td>
                            <label for="cantidad_gas">Ingresa el numero de gaseosas que va a llevar:</label>
                        </td>
                        <td>
                            <input name="cantidad_gas" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="precio_gas">Ingresa el precio de la gaseosa:</label>
                        </td>
                        <td>
                            <input name="precio_gas" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $cantidad_gas = floatval ($_POST['cantidad_gas']);
    $precio_gas = floatval ($_POST['precio_gas']);
    $Nuevoprecio=$precio_gas-($precio_gas*0.05);
    $importe_compra = $Nuevoprecio*$cantidad_gas;
    $descuento=(0.07*$importe_compra);
    $total=$importe_compra-$descuento;
    $caramelos=2*$cantidad_gas;
   
    echo 'Nuevo precio: ' . $Nuevoprecio . "<br/>\n";
    echo 'importe de la compra: ' . $importe_compra . "<br/>\n";
    echo 'valor del descuento del 7%: ' . $descuento . "<br/>\n";
    echo 'importe a pagar: ' . $total . "<br/>\n";
    echo 'Obsequio: ' . $caramelos . "<br/>\n";
   
}
 
?>
    </body>
</html>