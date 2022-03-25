<img src="assets/img/logo.png">
<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto_estudiante">Asociacion Curso y Estudiante</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-producto_estudiante" action="?c=producto_estudiante&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Código Producto (numerico)</label>
      <input type="text" name="idProducto" value="<?php echo $prod->idProducto; ?>" class="form-control" placeholder="Ingrese Código Producto" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
      <label>Código Estudiante (numerico)</label>
      <input type="text" name="idEstudiante" value="<?php echo $prod->idEstudiante; ?>" class="form-control" placeholder="Ingrese Código Estudiante" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
      <label>Fecha de suscripcion (yyyy-mm-dd)</label>
      <input type="text" name="fecha_suscripcion" value="<?php echo $prod->fecha_suscripcion; ?>" class="form-control" placeholder="Ingrese Fecha de suscripcion" data-validacion-tipo="requerido|min:20" />
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto_estudiante").submit(function(){
            return $(this).validate();
        });
    })
</script>
