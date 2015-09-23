<?php 
include('../bd/conexion.php');
$IMPRESORA=$_REQUEST['impresora'];
$CODIGO=$_REQUEST['codigo'];



/*ACTULIZAMOS EL VALOR DEL STOCK*/

$link=Conectarse();

$Sql="INSERT INTO [020BDCOMUN].DBO.PRINTER_MAEART_DET
 (COD_PRINTER_MAEART,ACODIGO,FECHA)VALUES('$IMPRESORA','$CODIGO',GETDATE())";


$result=mssql_query($Sql);	

if (!$result){echo "Error al guardar";}
else{
?>

<script>
window.location = "/insumos/consulta/asociar";

</script>";


<?php
}



 ?>