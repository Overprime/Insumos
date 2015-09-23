<div class="modal fade" id="modal-asociar" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="modal-title" id="myModalLabel">
REGISTRAR IMPRESORA
</h4>
</div>
<div class="modal-body">
<select name="area" class="form-control"required>
<option value="">[SELECCIONAR]</option>
<?php

$Sql="SELECT CODPRINTER,MARCAPRINTER,MODELOPRINTER FROM 
[020BDCOMUN].dbo.PRINTER";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value ="<?php echo $row['CODPRINTER']?>"><?php echo $row['MARCAPRINTER']?></option>
<?php }?>
</select>
</div>
<div class="modal-footer">

<button type="button" class="btn btn-default" data-dismiss="modal">
Close
</button> 
<button type="button" class="btn btn-primary">
Save changes
</button>
</div>
</div>

</div>

</div>
