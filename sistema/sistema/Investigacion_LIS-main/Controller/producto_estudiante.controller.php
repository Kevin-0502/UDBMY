<?php
require_once 'model/producto_estudiante.php';

class Producto_estudianteController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new producto_estudiante();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto_estudiante/producto_estudiante.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new producto_estudiante();

        if(isset($_REQUEST['id_Producto_estudiante '])){
            $prod = $this->model->Obtener($_REQUEST['id_Producto_estudiante ']);
        }

        require_once 'view/header.php';
        require_once 'view/producto_estudiante/producto_estudiante-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new producto_estudiante();

        require_once 'view/header.php';
        require_once 'view/producto_estudiante/producto_estudiante-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new producto_estudiante();

        $prod->id_Producto_estudiante = $_REQUEST['id_Producto_estudiante'];
        $prod->idProducto = $_REQUEST['idProducto'];
        $prod->idEstudiante = $_REQUEST['idEstudiante'];
        $prod->fecha_suscripcion = $_REQUEST['fecha_suscripcion'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=producto_estudiante');
    }

    public function Editar(){
        $prod = new producto_estudiante();

        $prod->idProducto = $_REQUEST['id_Producto_estudiante '];
        $prod->nit = $_REQUEST['idProducto'];
        $prod->nomprod = $_REQUEST['idEstudiante'];
        $prod->precioU = $_REQUEST['fecha_suscripcion'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=producto_estudiante');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_Producto_estudiante']);
        header('Location: index.php');
    }
}
