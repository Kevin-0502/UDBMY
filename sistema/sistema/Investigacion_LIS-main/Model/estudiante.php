<?php
class estudiante
{
	private $pdo;

    public $idEstudiante;
    public $dui;
    public $nombre;
    public $dir;
    public $tel;
	public $fec_nac;
	public $correo;

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

			$stm = $this->pdo->prepare("SELECT * FROM estudiante");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($idEstudiante)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM estudiante WHERE idEstudiante = ?");
			$stm->execute(array($idEstudiante));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idEstudiante)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM estudiante WHERE idEstudiante = ?");

			$stm->execute(array($idEstudiante));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
			$sql = "UPDATE estudiante SET
						dui           = ?,
						nombre        = ?,
						dir        = ?,
						tel        = ?,
						fec_nac        = ?,
						correo         = ?
				    WHERE idEstudiante  = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->dui,
                        $data->nombre,
                        $data->dir,
                        $data->tel,
						$data->fec_nac,
						$data->correo,
						$data->idEstudiante
					)
				);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(estudiante $data)
	{
		try
		{
		$sql = "INSERT INTO estudiante (idEstudiante ,dui ,nombre,dir,tel, fec_nac, correo )
		        VALUES (?, ?, ?, ?,?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->idEstudiante,
                    $data->dui,
                    $data->nombre,
                    $data->dir,
                    $data->tel,
					$data->fec_nac,
					$data->correo
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
