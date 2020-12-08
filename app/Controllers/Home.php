<?php namespace App\Controllers;
use App\Models\Usuarios;

class Home extends BaseController
{
	public function index(){
		$mensaje = session('mensaje');
		$datos = ['mensaje' => $mensaje];
		return view('index', $datos);
	}
	public function inicioGeneral(){
		return view('Plantillas/Usuario');
	}
	public function inicioAdministrador(){
		$Gastos = new Usuarios();
		$datos = $Gastos->listarGastos();
		$data = [
			"datos" => $datos
		];
		return view('Plantillas/Admin', $data);
	}
	public function login(){
		$Usuarios = new Usuarios();
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
		$datos = $Usuarios->obtenerUsuario(['usuario' => $usuario]);
		if (count($datos) > 0) {
			$usuariodb = $datos[0]['usuario'];
			$validapassword = password_verify($password, $datos[0]['password']);
			$tipo = $datos[0]['tipo'];
			if ($usuariodb == $usuario && $validapassword) {
				if ($tipo == 'adm') {
					$datos = [
						"id_usuario" => $datos[0]['id_usuario'],
						"nombre" => $datos[0]['nombre'],
						"ap_paterno" => $datos[0]['ap_paterno'],
						"email" => $datos[0]['email'],
						"usuario" => $datos[0]['usuario'],
						"tipo" => $datos[0]['tipo']
					];
					$session = session();
					$session->set($datos);

					return redirect()->to(base_url('/inicioa'))->with('mensaje','1');
				}else if($tipo == 'gnrl') {
					return redirect()->to(base_url('/iniciog'))->with('mensaje','1');
				}
				
			}else{
				return redirect()->to(base_url('/'))->with('mensaje','0');
			}
		}else{
			return redirect()->to(base_url('/'))->with('mensaje','0');
		}
	}
	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
	public function registro(){

		$Usuarios = new Usuarios();
		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
		$pass = password_hash($password, PASSWORD_DEFAULT);
		$datos = $Usuarios->obtenerUsuario(['usuario' => $usuario]);
		
		if (count($datos) > 0) {
			$usuariodb = $datos[0]['usuario'];
			if ($usuario == $usuariodb) {
				return redirect()->to(base_url('/'))->with('mensaje','2');
			}
		}else{
			$data = [
				"nombre" => $_POST['nombre'],
				"ap_paterno" => $_POST['appaterno'],
				"email" => $_POST['correo'],
				"usuario" => $_POST['usuario'],
				"password" => $pass,
				"tipo" => $_POST['tipo']
			];
			$respuesta = $Usuarios->insertarReg($data);
			if ($respuesta) {
				return redirect()->to(base_url('/'))->with('mensaje','3');
			}
		}	
	}
	public function crear(){
		$datos = [
			"concepto" => $_POST['concepto'],
			"monto" => $_POST['monto'],
			"fecha" => $_POST['fecha']
		];
		$Crud = new Usuarios();
		$respuesta = $Crud->insertar($datos);
		if ($respuesta) {
			return redirect()->to(base_url().'/inicioa');
		}else{
			return redirect()->to(base_url().'/inicioa');
		}
	}
	public function eliminar($idNombre){
		$Crud = new Usuarios();
		$data = [
			"id_gasto" => $idNombre
		];

		$respuesta = $Crud->eliminar($data);
		if ($respuesta) {
			return redirect()->to(base_url().'/inicioa');
		}else{
			return redirect()->to(base_url().'/inicioa');
		}
	}

	//--------------------------------------------------------------------

}
