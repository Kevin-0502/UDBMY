<?php
require_once 'model/estudiante.php';

class EstudianteController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new estudiante();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new estudiante();

        if(isset($_REQUEST['idEstudiante'])){
            $prod = $this->model->Obtener($_REQUEST['idEstudiante']);
        }

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new estudiante();

        require_once 'view/header.php';
        require_once 'view/estudiante/estudiante-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $estud = new estudiante();

        $estud->idEstudiante = $_REQUEST['idEstudiante'];
        $estud->dui = $_REQUEST['dui'];
        $estud->nombre = $_REQUEST['nombre'];
        $estud->dir = $_REQUEST['dir'];
        $estud->tel = $_REQUEST['tel'];
        $estud->fec_nac = $_REQUEST['fec_nac'];
        $estud->correo = $_REQUEST['correo'];

        $this->model->Registrar($estud);

        header('Location: index.php?c=estudiante');
    }

    public function Editar(){
        $estud = new estudiante();

        $estud->idEstudiante = $_REQUEST['idEstudiante'];
        $estud->dui = $_REQUEST['dui'];
        $estud->nombre = $_REQUEST['nombre'];
        $estud->dir = $_REQUEST['dir'];
        $estud->tel = $_REQUEST['tel'];
        $estud->fec_nac = $_REQUEST['fec_nac'];
        $estud->correo = $_REQUEST['correo'];

        $this->model->Actualizar($estud);

        header('Location: index.php?c=estudiante');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idEstudiante']);
        header('Location: index.php');
    }
}
