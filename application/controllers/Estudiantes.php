<?php
class Estudiantes extends CI_Controller {
	public function index () {
		$this->load->view('estudiantes/index');
	}

    public function recargar () {
		$a = ['estudiantes' => $this->EstudiantesModel->obtener()];
		$this->load->view('estudiantes/tabla', $a);
	}
	public function ingresar () {
		$a = [$_POST['nombre'], $_POST['apellido']];
		$this->EstudiantesModel->ingresar($a);
	}

	public function eliminar ($id) {
		$this->EstudiantesModel->eliminar($id);
	}

	public function actualizar ($id) {
		$a = ['estudiantes' => $this->EstudiantesModel->obtenerPorId($id)];
		$this->load->view('estudiantes/forma', $a);
	}

	public function editar () {
		$a = [$_POST['nombre'], $_POST['apellido'], $_POST['id']];
		$this->EstudiantesModel->editar($a);
	}
}