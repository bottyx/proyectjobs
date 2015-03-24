<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleo extends CI_Controller {

	public function index()
	{
		$this->buscar();
	}

	public function buscar()
	{
		$this->load->view('common/head');
		$this->load->view('find_view');
		$this->load->view('common/footer');
	}

	public function publicar()
	{
		$this->load->view('common/head');
		$this->load->view('publish_view');
		$this->load->view('common/footer');
	}
}
