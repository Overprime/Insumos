<?php 
include('../bd/conexion.php');
$IMPRESORA=$_REQUEST['impresora'];

/*ACTULIZAMOS EL VALOR DEL STOCK*/

$link=Conectarse();

$Sql="INSERT INTO [020BDCOMUN].DBO.PRINTER_MAEART_CAB 
(CODPRINTER,DESCPRINTER,MARCAPRINTER,MODELOPRINTR,FECHA)
SELECT CODPRINTER,DESCPPRINTER,MARCAPRINTER,MODELOPRINTER,GETDATE() 
FROM [020BDCOMUN].DBO.PRINTER
WHERE  CODPRINTER='$IMPRESORA'";


$result=mssql_query($Sql);	

if (!$result){echo "Error al guardar";}
else{
?>

<script>
window.location = "/insumos/consulta/registrar";

</script>";


<?php
}



 ?>