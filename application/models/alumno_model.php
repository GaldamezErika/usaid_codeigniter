<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumno_model extends CI_Model {

	public function get_alumno(){

		$this->db->select('a.id_alumno, a.nombres, a.apellidos, s.nombre_sexo, c.nombre_curso');
		$this->db->from('alumno a');
		$this->db->join('sexo s','s.id_sexo = a.id_sexo');
		$this->db->join('curso c','c.id_curso = a.id_curso');

		$exe = $this->db->get();

		return $exe->result();
	}

	public function eliminar($id){

		$this->db->where('id_alumno',$id);
		return ($this->db->delete('alumno'));
	}

	public function set_alumno($datos){

		$this->db->set('nombres',$datos['nombres']);
		$this->db->set('apellidos',$datos['apellidos']);
		$this->db->set('id_sexo',$datos['sexo']);
		$this->db->set('id_curso',$datos['curso']);
		$this->db->insert('alumno');
	}

	public function get_sexo(){

		$exe = $this->db->get('sexo');
		return $exe->result();
	}

	public function get_curso(){

		$exe = $this->db->get('curso');
		return $exe->result();
	}

	public function get_datos($id){

		$this->db->where('id_alumno',$id);
		$exe = $this->db->get('alumno');

		return $exe->result();
	}

	public function actualizar($datos){

		$this->db->set('nombres',$datos['nombres']);
		$this->db->set('apellidos',$datos['apellidos']);
		$this->db->set('id_sexo',$datos['sexo']);
		$this->db->set('id_curso',$datos['curso']);
		$this->db->where('id_alumno',$datos['id']);
		$this->db->update('alumno');
	}
}