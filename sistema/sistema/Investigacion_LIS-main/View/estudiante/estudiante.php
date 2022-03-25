<img src="assets/img/logo.png">
<h1 class="page-header">Estudiante </h1>

<div class="well well-sm text-right">
<a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Curso</a>
    <a class="btn btn-primary" href="?c=estudiante&a=Nuevo">Nuevo Estudiante</a>
    <a class="btn btn-primary" href="?c=producto_estudiante&a=Nuevo">Asociar Estudiante con Cursos</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">DUI</th>
            <th style="width:120px;">Nombre Completo</th>
            <th style="width:120px;">Direccion</th>
            <th style="width:120px;">Telefono</th>
            <th style="width:120px;">Fecha de Nacimiento</th>
            <th style="width:120px;">Correo</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idEstudiante; ?></td>
            <td><?php echo $r->dui; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->dir; ?></td>
            <td><?php echo $r->tel; ?></td>
            <td><?php echo $r->fec_nac; ?></td>
            <td><?php echo $r->correo; ?></td> 
            <td>
                <a href="?c=estudiante&a=Crud&idEstudiante=<?php echo $r->idEstudiante; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=estudiante&a=Eliminar&idEstudiante=<?php echo $r->idEstudiante; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
