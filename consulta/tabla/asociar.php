<script type="text/javascript" language="javascript"
src="listado/asociar.js"></script>

<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="asociar">
<?php require_once('../bd/conexion.php');
$link=  Conectarse();
$listado=  mssql_query("SELECT  
C.MARCAPRINTER,C.MODELOPRINTR,D.ACODIGO,
M.ADESCRI,SO.STSKDIS as STO,SC.STSKDIS AS STC,SR.STSKDIS AS STR
FROM  [020BDCOMUN].DBO.PRINTER_MAEART_CAB AS  C 
INNER  JOIN 
[020BDCOMUN].DBO.PRINTER_MAEART_DET AS  D  ON
C.COD_PRINTER_MAEART=D.COD_PRINTER_MAEART  INNER JOIN [011BDCOMUN].DBO.MAEART AS  M  ON
D.ACODIGO=M.ACODIGO  LEFT JOIN [011BDCOMUN].DBO.STKART AS  SO  ON
D.ACODIGO=SO.STCODIGO AND SO.STALMA='01' 
 LEFT JOIN [010BDCOMUN].DBO.STKART AS  SC  ON
D.ACODIGO=SC.STCODIGO AND SC.STALMA='01' LEFT JOIN [004BDCOMUN].DBO.STKART AS  SR  ON
D.ACODIGO=SR.STCODIGO AND SR.STALMA='01' 
",$link);
?>
<thead>
<tr class="success">
<th>MARCA</th>
<th>MODELO</th>
<th>CODIGO</th>
<th>DESCRIPCIÓN</th>
<th>S. OVER</th>
<th>S. COD</th>
<th>S. ROCK</th>
</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="">
<td><?php echo $reg[MARCAPRINTER]; ?></td>
<td><?php echo $reg[MODELOPRINTR]; ?></td>
<td><?php echo $reg[ACODIGO]; ?></td>
<td><?php echo $reg[ADESCRI]; ?></td>
<td><?php echo $reg[STO]; ?></td>
<td><?php echo $reg[STC]; ?></td>
<td><?php echo $reg[STR]; ?></td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>

<div class="modal fade" id="modal-asociar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="btn btn-info" id="myModalLabel">
<i class="glyphicon glyphicon-th"></i>
ASOCIAR  ARTICULO-IMPRESORA
</h4>
</div>
<div class="modal-body">
<form action="../registrar/impresora-articulo.php" method="POST">
<div class="form-group">
<select name="impresora" class="form-control"required>
<option value="">[SELECCIONAR LA IMPRESORA]</option>
<?php
$Sql="SELECT COD_PRINTER_MAEART,MARCAPRINTER,MODELOPRINTR
 FROM  [020BDCOMUN].DBO.PRINTER_MAEART_CAB;";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value ="<?php echo $row['COD_PRINTER_MAEART']?>">
<?php echo $row['MARCAPRINTER'].'-'.$row['MODELOPRINTR']?></option>
<?php }?>
</select>
</div>
<div class="form-group">
<input type="text" name="codigo"class="form-control" maxlength="20" 
placeholder="INGRESE EL CÓDIGO DEL INSUMO" required>
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
