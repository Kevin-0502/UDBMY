<img src="assets/img/logo.png">
<h1 class="page-header">
    Nuevo Registro
</h1>

<ol class="breadcrumb">
  <li><a href="?c=inscripciones">Inscripciones</a></li>
  <li class="active">Nuevo Registro</li>
</ol>

<form id="frm-inscripciones" action="?c=inscripciones&a=Guardar" method="post" enctype="multipart/form-data">

    
    <div class="form-group">
        <label>Materias</label>
        <input type="text" name="Materias" value="<?php echo $prod->Materias; ?>" class="form-control" placeholder="Ingrese Materias" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Unidades Valorativas</label>
        <input type="text" name="UV" value="<?php echo $prod->UV; ?>" class="form-control" placeholder="Ingrese Unidades Valorativas" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Matricula</label>
        <input type="text" name="Matricula" value="<?php echo $prod->Matricula; ?>" class="form-control" placeholder="Ingrese Matricula" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Grupos</label>
        <input type="text" name="Grupos" value="<?php echo $prod->Grupos; ?>" class="form-control" placeholder="Ingrese Grupos" data-validacion-tipo="requerido|min:240" />
    </div>

    <div class="form-group">
        <label>Salones</label>
        <input type="text" name="Salones" value="<?php echo $prod->Salones; ?>" class="form-control" placeholder="Ingrese Salones" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Docente</label>
        <input type="text" name="Docente" value="<?php echo $prod->Docente; ?>" class="form-control" placeholder="Ingrese Docente" data-validacion-tipo="requerido|min:240" />
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-inscripciones").submit(function(){
            return $(this).validate();
        });
    })
</script>
