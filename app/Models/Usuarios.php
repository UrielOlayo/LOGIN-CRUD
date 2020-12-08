<?php namespace App\Models;
use CodeIgniter\Model;


class Usuarios extends Model
{
	public function obtenerUsuario($data){
		$Usuario = $this->db->table('t_login');
		$Usuario->where($data);
		return $Usuario->get()->getResultArray();
	}
	public function listarGastos(){
		$Nombres = $this->db->query("SELECT * FROM t_gastos");
		return $Nombres->getResult();
	}
	public function insertar($datos){
		$Nombres = $this->db->table('t_gastos');
		$Nombres->insert($datos);

		return $this->db->insertID();
	}
	public function insertarReg($datos){
		$Nombres = $this->db->table('t_login');
		$Nombres->insert($datos);

		return $this->db->insertID();
	}
	public function eliminar($data){
		$Nombres = $this->db->table('t_gastos');
		$Nombres->where($data);
		return $Nombres->delete();
	}
}