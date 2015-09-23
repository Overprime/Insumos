<?php 
include('../bd/conexion.php');
$DESCRIPCION=$_REQUEST['descripcion'];
$MARCA=$_REQUEST['marca'];
$MODELO=$_REQUEST['modelo'];
$SERIE=$_REQUEST['serie'];
$TIPO=$_REQUEST['tipo'];


/*ACTULIZAMOS EL VALOR DEL STOCK*/

$link=Conectarse();

$Sql="INSERT INTO [020BDCOMUN].DBO.PRINTER (DESCPPRINTER,MARCAPRINTER,MODELOPRINTER,
	SERIEPRINTER,TIPOPRINTER)VALUES('$DESCRIPCION','$MARCA','$MODELO','$SERIE',
	'$TIPO')";


$result=mssql_query($Sql);	

if (!$result){echo "Error al guardar";}
else{
?>

<script>
window.location = "/insumos/consulta/impresora";

</script>";


<?php
}



 ?>