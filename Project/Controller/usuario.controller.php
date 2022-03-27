<?php
//Se incluye el modelo donde conectará el controlador.
require_once 'model/usuario.php';

class UsuarioController{

    private $model;

    //Creación del modelo
    public function __CONSTRUCT(){
        $this->model = new usuario();
    }

    //Llamado a la vista proveedor-nuevo
    public function Nuevo(){
        $pvd = new usuario();

        //Llamado de las vistas.
        require_once 'view/form/signup.php';

    }

    //Método que registrar al modelo un nuevo proveedor.
    public function Guardar(){
        $pvd = new usuario();

        //Captura de los datos del formulario (vista).
        $pvd->Email = $_REQUEST['Email'];
        $pvd->Nombres = $_REQUEST['Nombres'];
        $pvd->Apellidos = $_REQUEST['Apellidos'];
        $pvd->Contraseña = $_REQUEST['Contraseña'];

        //Registro al modelo proveedor.
        $this->model->Registrar($pvd);

        //header() es usado para enviar encabezados HTTP sin formato.
        //"Location:" No solamente envía el encabezado al navegador, sino que
        //también devuelve el código de status (302) REDIRECT al
        //navegador
        header('Location: signup.php');
    }

}
