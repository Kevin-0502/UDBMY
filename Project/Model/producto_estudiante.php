<?php
class producto_estudiante
{
	private $pdo;

    public $id_Producto_estudiante;
    public $idProducto;
    public $idEstudiante;
    public $fecha_suscripcion;

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

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto_estudiante");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_Producto_estudiante )
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM producto_estudiante WHERE id_Producto_estudiante = ?");
			$stm->execute(array($id_Producto_estudiante));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_Producto_estudiante)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM producto_estudiante WHERE id_Producto_estudiante = ?");

			$stm->execute(array($id_Producto_estudiante));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE producto_estudiante SET
						idProducto          = ?,
						idEstudiante        = ?,
            			fecha_suscripcion        = ?
				    WHERE id_Producto_estudiante = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idProducto,
                        $data->idEstudiante,
                        $data->fecha_suscripcion
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto_estudiante $data)
	{
		try
		{
		$sql = "INSERT INTO producto_estudiante (id_Producto_estudiante ,idProducto,idEstudiante,fecha_suscripcion)
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_Producto_estudiante ,
                    $data->idProducto,
                    $data->idEstudiante,
                    $data->fecha_suscripcion
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
