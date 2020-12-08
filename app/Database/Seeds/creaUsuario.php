<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreaUsuario extends Seeder
{
	public function run()
	{
		$pass = '123';
		$pass = password_hash($pass, PASSWORD_DEFAULT);

		$data =[
					"nombre" => 'Uriel',
					"ap_paterno" => 'Olayo',
					"email" => 'Uriel@gmail.com.mx',
					"usuario" => 'admin',
					"password" => $pass,
					"tipo" => 'adm'
				];

		$this->db->table('t_login')->insert($data);
	}
}
