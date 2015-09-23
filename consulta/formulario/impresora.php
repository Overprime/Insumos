<div class="modal fade" id="modal-impresora" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
×
</button>
<h4 class="btn btn-info" id="myModalLabel">
<i class="glyphicon glyphicon-th"></i>
CREAR IMPRESORA</h4></div>
<form action="../registrar/impresora.php" method="post">
<div class="modal-body">
<div class="form-group"><input type="text" onchange="conMayusculas(this);" name="marca" class="form-control" placeholder="INGRESE LA MARCA DE LA IMPRESORA" required></div>
<div class="form-group"><input type="text" onchange="conMayusculas(this);" name="modelo" class="form-control" placeholder="INGRESE EL MODELO DE LA IMPRESORA" required></div>
<div class="form-group"><input type="text" onchange="conMayusculas(this);" name="descripcion" class="form-control" placeholder="INGRESE LA DESCRIPCIÓN DE LA IMPRESORA" required></div>
<div class="form-group"><input type="text" onchange="conMayusculas(this);" name="serie" class="form-control" placeholder="INGRESE LA SERIE DE LA IMPRESORA" required></div>
<div class="form-group">
<select name="tipo" class="form-control" required>
<option value="">[SELECCIONAR EL TIPO DE ENTRADA]</option>
<option value="USB">USB</option>
<option value="RED">RED</option>
</select>
</div>
</div>
<div class="modal-footer">
<button type="submit"  class="btn btn-primary">
<i class="glyphicon glyphicon-floppy-disk"></i>
GUARDAR INFORMACIÓN
</button>
<button type="button" class="btn btn-default" data-dismiss="modal">
<i class="glyphicon glyphicon-remove-circle"></i>
CERRAR
</button> 
</form>
</div>
</div>

</div>

</div>
