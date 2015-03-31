<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('jobs_model');
    }

	public function get_jobs(){

		$response = $this->jobs_model->get_jobs();
		echo json_encode($response);
	}
	public function save_job(){

		/*$data['job_name'] = $this->input->post('job_name');
		$data['description'] = $this->input->post('description');
		$data['category'] = $this->input->post('category');
		$data['offer'] = $this->input->post('offer');
		$data['city'] = $this->input->post('city');
		$data['state'] = $this->input->post('state');
		$data['country'] = $this->input->post('country');*/
		$data['job_name'] = "Plomeria en departamentos";
		$data['description'] = "Trabajo de plomeria para edificio con departamentos";
		$data['category'] = "Plomeria";
		$data['offer'] = "$100 por día";
		$data['city'] = "Monterrey";
		$data['state'] = "Nuevo Leon";
		$data['country'] = "Mexico";
		$this->jobs_model->insert_job($data);
	}
}
