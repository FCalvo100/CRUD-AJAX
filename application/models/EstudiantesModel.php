<?php
class EstudiantesModel extends CI_Model {
	public function obtener () {
		return $this->db->get('estudiantes')->result();
	}

	public function ingresar ($a) {
		$s = "INSERT INTO estudiantes (Nombre, Apellido) VALUES (?, ?)";
		$this->db->query($s, $a);
	}

	public function eliminar ($id) {
		$this->db->query("DELETE FROM estudiantes WHERE Id = $id");
	}

	public function obtenerPorId ($id) {
		return $this->db->query("SELECT * FROM estudiantes WHERE Id = $id")->row();
	}

	public function editar ($a) {
		$s = "UPDATE estudiantes SET Nombre = ?, Apellido = ? WHERE Id = ?";
		$this->db->query($s, $a);
	}
}
