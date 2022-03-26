<img src="assets/img/logo.png">
<h1 class="page-header">Estudiante </h1>

<div class="well well-sm text-right">
<a class="btn btn-primary" href="?c=inscripciones&a=Nuevo">Nueva materia</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Codigo</th>
            <th style="width:180px;">Materias</th>
            <th style="width:120px;">Unidades Valorativas</th>
            <th style="width:120px;">Matricula</th>
            <th style="width:120px;">Grupos</th>
            <th style="width:120px;">Salones</th>
            <th style="width:120px;">Docente</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_inscripciones; ?></td>
            <td><?php echo $r->Materias; ?></td>
            <td><?php echo $r->UV; ?></td>
            <td><?php echo $r->Matricula; ?></td>
            <td><?php echo $r->Grupos; ?></td>
            <td><?php echo $r->Salones; ?></td>
            <td><?php echo $r->Docente; ?></td> 
            <td>
                <a href="?c=inscripciones&a=Crud&id_inscripciones=<?php echo $r->id_inscripciones; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=inscripciones&a=Eliminar&id_inscripciones=<?php echo $r->id_inscripciones; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
