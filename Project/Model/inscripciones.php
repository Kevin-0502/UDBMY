<?php
class inscripciones
{
	//Atributo para conexión a SGBD
	private $pdo;

		//Atributos del objeto proveedor
	public $id_inscripciones ;
    public $Materias;
    public $UV;
    public $Matricula;
    public $Grupos;
	public $Salones;
    public $Docente;

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

	//Este método selecciona todas las tuplas de la tabla
	//proveedor en caso de error se muestra por pantalla.
	public function Listar()
	{
		try
		{
			$result = array();
			//Sentencia SQL para selección de datos.
			$stm = $this->pdo->prepare("SELECT * FROM inscripciones");
			//Ejecución de la sentencia SQL.
			$stm->execute();
			//fetchAll — Devuelve un array que contiene todas las filas del conjunto
			//de resultados
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			//Obtener mensaje de error.
			die($e->getMessage());
		}
	}

	//Este método obtiene los datos del proveedor a partir del nit
	//utilizando SQL.
	public function Obtener($id_inscripciones)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM inscripciones WHERE id_inscripciones = ?");
			$stm->execute(array($id_inscripciones));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}	
	}

	//Este método elimina la tupla proveedor dado un nit.
	public function Eliminar($id_inscripciones)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM inscripciones WHERE id_inscripciones = ?");

			$stm->execute(array($id_inscripciones));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que actualiza una tupla a partir de la clausula
	//Where y el nit del proveedor.
	public function Actualizar($data)
	{
		try
		{
			//Sentencia SQL para actualizar los datos.
			$sql = "UPDATE inscripciones SET
						Materias          = ?,
						UV            = ?,
						Matricula        = ?,
						Grupos	        = ?,
						Salones        = ?,
						Docente        = ?
				    WHERE id_inscripciones  = ?";
			//Ejecución de la sentencia a partir de un arreglo.
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Materias,
                        $data->UV,
                        $data->Matricula,
                        $data->Grupos,
						$data->Salones,
                        $data->Docente,
						$data->id_inscripciones
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	//Método que registra un nuevo proveedor a la tabla.
	public function Registrar(inscripciones $data)
	{
		try
		{
			//Sentencia SQL.
			$sql = "INSERT INTO inscripciones (Materias,UV,Matricula,Grupos,Salones,Docente)
		        VALUES (?, ?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Materias,
                    $data->UV,
                    $data->Matricula,
                    $data->Grupos,
					$data->Salones,
                    $data->Docente
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
