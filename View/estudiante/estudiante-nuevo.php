<img src="assets/img/logo.png">
<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=estudiante">Estudiante</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-estudiante" action="?c=estudiante&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label>Código Estudiante (numerico)</label>
      <input type="text" name="idEstudiante" value="<?php echo $prod->idEstudiante; ?>" class="form-control" placeholder="Ingrese Código Estudiante" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>DUI</label>
        <input type="text" name="dui" value="<?php echo $prod->dui; ?>" class="form-control" placeholder="Ingrese DUI Estudiante" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre Estudiante</label>
        <input type="text" name="nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="Ingrese nombre estudiante" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="dir" value="<?php echo $prod->dir; ?>" class="form-control" placeholder="Ingrese direccion estudiante" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="tel" value="<?php echo $prod->tel; ?>" class="form-control" placeholder="Ingrese telefono estudiante" data-validacion-tipo="requerido|min:240" />
    </div>

    <div class="form-group">
        <label>Fecha de Nacimiento (yyyy-mm-dd)</label>
        <input type="text" name="fec_nac" value="<?php echo $prod->fec_nac; ?>" class="form-control" placeholder="Ingrese fecha nacimiento" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $prod->correo; ?>" class="form-control" placeholder="Ingrese correo estudiante" data-validacion-tipo="requerido|min:240" />
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-estudiante").submit(function(){
            return $(this).validate();
        });
    })
</script>
