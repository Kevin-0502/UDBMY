<img src="assets/img/logo.png">
<h1 class="page-header">Cursos </h1>

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
            <th style="width:120px;">NIT Proveedor</th>
            <th style="width:120px;">Nombre Curso</th>
            <th style="width:120px;">Precio Unitario</th>
            <th style="width:120px;">Descripción</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->nit; ?></td>
            <td><?php echo $r->nomprod; ?></td>
            <td><?php echo $r->precioU; ?></td>
            <td><?php echo $r->descrip; ?></td>
            <td>
                <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
