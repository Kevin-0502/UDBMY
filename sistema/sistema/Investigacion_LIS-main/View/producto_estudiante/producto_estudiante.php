<img src="assets/img/logo.png">
<h1 class="page-header">Asociacion de Cursos con Estudiantes </h1>

<div class="well well-sm text-right">
<a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Curso</a>
    <a class="btn btn-primary" href="?c=estudiante&a=Nuevo">Nuevo Estudiante</a>
    <a class="btn btn-primary" href="?c=producto_estudiante&a=Nuevo">Asociar Estudiante con Cursos</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Código Curso</th>
            <th style="width:120px;">Código Estudiante</th>
            <th style="width:120px;">Fecha suscripcion</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->idEstudiante; ?></td>
            <td><?php echo $r->fecha_suscripcion; ?></td>
            <td>
                <a href="?c=producto_estudiante&a=Crud&id_Producto_estudiante =<?php echo $r->id_Producto_estudiante; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto_estudiante&a=Eliminar&id_Producto_estudiante=<?php echo $r->id_Producto_estudiante; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
