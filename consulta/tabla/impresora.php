<script type="text/javascript" language="javascript"
src="listado/impresora.js"></script>
<div class="table-responsive">
<table class="table table-bordered table-condensed" 
id="impresora">
<?php require_once('../bd/conexion.php');
$link=  Conectarse();
$listado=  mssql_query("SELECT * FROM  [020BDCOMUN].DBO.PRINTER 
	ORDER BY CODPRINTER",$link);
?>
<thead>
<tr>
<th>ID</th>
<th>MARCA</th>
<th>MODELO</th>
<th>DESCRIPCIÓN</th>
<th>SERIE</th>
<th>TIPO</th>
</tr>
</thead>
<tbody>
<?php


while($reg= mssql_fetch_array($listado))
{
?>
<tr class="active">
<td><?php echo $reg[CODPRINTER]; ?></td>
<td><?php echo $reg[MARCAPRINTER]; ?></td>
<td><?php echo $reg[MODELOPRINTER]; ?></td>
<td><?php echo $reg[DESCPPRINTER]; ?></td>
<td><?php echo $reg[SERIEPRINTER]; ?></td>
<td><?php echo $reg[TIPOPRINTER]; ?></td>
</tr>

<?php 
}
?>
<tbody>
</table>
</div>
