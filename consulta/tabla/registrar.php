<script type="text/javascript" language="javascript"
src="listado/registrar.js"></script>

<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="registrar">
<?php require_once('../bd/conexion.php');
$link=  Conectarse();
$listado=  mssql_query("SELECT COD_PRINTER_MAEART,CODPRINTER,DESCPRINTER,
MARCAPRINTER,MODELOPRINTR FROM  [020BDCOMUN].DBO.PRINTER_MAEART_CAB",$link);
?>
<thead>
<tr class="success">
<th>ID CAB</th>
<th>ID IMP</th>
<th>MARCA</th>
<th>MODELO</th>
<th>DESCRIPCION</th>
</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="">
<td><?php echo $reg[COD_PRINTER_MAEART]; ?></td>
<td><?php echo $reg[CODPRINTER]; ?></td>
<td><?php echo $reg[MARCAPRINTER]; ?></td>
<td><?php echo $reg[MODELOPRINTR]; ?></td>
<td><?php echo $reg[DESCPRINTER]; ?></td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>

<div class="modal fade" id="modal-registrar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="btn btn-info" id="myModalLabel">
<i class="glyphicon glyphicon-th"></i>
REGISTRAR IMPRESORA
</h4>
</div>
<div class="modal-body">
<form action="../registrar/cabecera-impresora.php" method="POST">
<div class="form-group">
<select name="impresora" class="form-control"required>
<option value="">[SELECCIONAR]</option>
<?php
$Sql="SELECT CODPRINTER,MARCAPRINTER,MODELOPRINTER FROM 
[020BDCOMUN].dbo.PRINTER  WHERE 
CODPRINTER NOT IN (SELECT  CODPRINTER FROM  [020BDCOMUN].DBO.PRINTER_MAEART_CAB);";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value ="<?php echo $row['CODPRINTER']?>">
<?php echo $row['MARCAPRINTER'].'-'.$row['MODELOPRINTER']?></option>
<?php }?>
</select>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">
<i class="glyphicon glyphicon-floppy-disk"></i>
GRABAR  INFORMACIÓN</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
<i class="glyphicon glyphicon-remove-circle"></i>
CERRAR
</button> 
</div>

</form>
</div>
<div class="modal-footer">


</div>
</div>

</div>

</div>
