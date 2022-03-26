<?php
require_once 'model/inscripciones.php';

class inscripcionesController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new inscripciones();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/inscripciones/inscripciones.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $prod = new inscripciones();

        if(isset($_REQUEST['id_inscripciones'])){
            $prod = $this->model->Obtener($_REQUEST['id_inscripciones']);
        }

        require_once 'view/header.php';
        require_once 'view/inscripciones/inscripciones-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $prod = new inscripciones();

        require_once 'view/header.php';
        require_once 'view/inscripciones/inscripciones-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $prod = new inscripciones();
        $prod->id_inscripciones = $_REQUEST['id_inscripciones'];
        $prod->Materias = $_REQUEST['Materias'];
        $prod->UV = $_REQUEST['UV'];
        $prod->Matricula = $_REQUEST['Matricula'];
        $prod->Grupos = $_REQUEST['Grupos'];
        $prod->Salones = $_REQUEST['Salones'];
        $prod->Docente = $_REQUEST['Docente'];

        $this->model->Registrar($prod);

        header('Location: index.php?c=inscripciones');
    }

    public function Editar(){
        $prod = new inscripciones();

        $prod->id_inscripciones = $_REQUEST['id_inscripciones'];
        $prod->Materias = $_REQUEST['Materias'];
        $prod->UV = $_REQUEST['UV'];
        $prod->Matricula = $_REQUEST['Matricula'];
        $prod->Grupos = $_REQUEST['Grupos'];
        $prod->Salones = $_REQUEST['Salones'];
        $prod->Docente = $_REQUEST['Docente'];

        $this->model->Actualizar($prod);

        header('Location: index.php?c=inscripciones');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_inscripciones']);
        header('Location: index.php');
    }
}
