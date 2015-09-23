<!DOCTYPE html>
<html>
<head>
<title>IMPRESORA</title>
<!--    ESTILO GENERAL   -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link type="text/css" href="css/style.css" rel="stylesheet" />
<?php include('../header.php'); ?>
<!--    ESTILO GENERAL    -->
<!--    JQUERY   -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" language="javascript" src="funcion/impresora.js"></script>
<!--    JQUERY    -->
<!--    FORMATO DE TABLAS -->  
<link type="text/css" href="css/demo_table.css" rel="stylesheet" /> 
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<!--    FORMATO DE TABLAS    -->

</head>
<body>
<div class="container">
<div class="row clearfix">
<div class="col-md-12 column">
<br>
<div class="form-group">
<a id="modal-322074" href="#modal-impresora"
role="button" class="btn btn-primary" 
data-toggle="modal">
<i class="glyphicon glyphicon-plus-sign"></i>
CREAR IMPRESORA</a>
</div>
<!-- MODAL FORMULARIO -->
<?php include('formulario/impresora.php'); ?>
</div>
</div>

<div class="row clearfix">
<div class="col-md-12 column">
<article id="contenido"></article>
</div>
</div>
</div>
</body>
</html>