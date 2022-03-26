<?php
class usuario
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
    public $email;
    public $nombres;
    public $apellidos;
    public $contraseña;

	//Método de conexión a SGBD.
	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	
	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($email)
	{
		try
		{
			//Sentencia SQL para selección de datos utilizando
			//la clausula Where para especificar el nit del proveedor.
			$stm = $this->pdo->prepare("SELECT * FROM usuario WHERE Email = ?");
			//Ejecución de la sentencia SQL utilizando el parámetro nit.
			$stm->execute(array($email));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(usuario $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO usuario (Email, Nombres, Apellidos, Contraseña)
		        VALUES (?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->email,
                    $data->nombres,
                    $data->apellidos,
                    $data->contraseña,
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
