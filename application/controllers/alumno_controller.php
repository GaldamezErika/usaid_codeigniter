<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class alumno_controller extends CI_Controller {

	public function __construct(){

		parent:: __construct();
		$this->load->model('alumno_model');
	}

	public function index()
	{
		$data = array('title' => 'USAID || Home',
			'alumno' => $this->alumno_model->get_alumno(),
			'sexo' => $this->alumno_model->get_sexo(),
			'curso' => $this->alumno_model->get_curso());
		$this->load->view('template/header',$data);
		$this->load->view('alumno_view');
		$this->load->view('template/footer');
	}

	public function eliminar($id){

		$this->alumno_model->eliminar($id);
		echo "<script>alert('Se elimino exitosamente')</script>";
		redirect('/alumno_controller/index','refresh');
	}

	public function ingresar(){

		$datos['nombres'] = $this->input->post('nombres');
		$datos['apellidos'] = $this->input->post('apellidos');
		$datos['sexo'] = $this->input->post('sexo');
		$datos['curso'] = $this->input->post('curso');

		$this->alumno_model->set_alumno($datos);
		echo "<script>alert('Se guardo exitosamente')</script>";
		redirect('/alumno_controller/index','refresh');

	}

	public function get_datos($id){

		$data = array('title' => 'USAID || Home',
			'alumno' => $this->alumno_model->get_datos($id),
			'sexo' => $this->alumno_model->get_sexo(),
			'curso' => $this->alumno_model->get_curso());
		$this->load->view('template/header',$data);
		$this->load->view('alumno_viewAct');
		$this->load->view('template/footer');
	}

	public function actualizar(){

		$datos['id'] = $this->input->post('id');
		$datos['nombres'] = $this->input->post('nombres');
		$datos['apellidos'] = $this->input->post('apellidos');
		$datos['sexo'] = $this->input->post('sexo');
		$datos['curso'] = $this->input->post('curso');

		$this->alumno_model->actualizar($datos);
		echo "<script>alert('Se actualizo exitosamente')</script>";
		redirect('/alumno_controller/index','refresh');

	}
}