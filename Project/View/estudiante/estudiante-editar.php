<img src="assets/img/logo.png">
<h1 class="page-header">
    <?php echo $prod->idEstudiante  != null ? $prod->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=estudiante">Estudiantes</a></li>
  <li class="active"><?php echo $prod->idEstudiante != null ? $prod->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-estudiante" action="?c=estudiante&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idEstudiante" value="<?php echo $prod->idEstudiante; ?>" />

    <div class="form-group">
        <label>DUI Estudiante</label>
        <input type="text" name="dui" value="<?php echo $prod->dui; ?>" class="form-control" placeholder="Ingrese DUI Estudiante" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Nombre Estudiante</label>
        <input type="text" name="nombre" value="<?php echo $prod->nombre; ?>" class="form-control" placeholder="Ingrese nombre estudiante" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Direccion</label>
        <input type="text" name="dir" value="<?php echo $prod->dir; ?>" class="form-control" placeholder="Ingrese Direccion" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="tel" value="<?php echo $prod->tel; ?>" class="form-control" placeholder="Ingrese telefono" data-validacion-tipo="requerido|min:240" />
    </div>

    <div class="form-group">
        <label>Fecha de nacimiento</label>
        <input type="text" name="fec_nac" value="<?php echo $prod->fec_nac; ?>" class="form-control" placeholder="Ingrese fecha de nacimiento" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="correo" value="<?php echo $prod->correo; ?>" class="form-control" placeholder="Ingrese correo" data-validacion-tipo="requerido|min:240" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-estudiante").submit(function(){
            return $(this).validate();
        });
    })
</script>
