<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Repository extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['title'] = "Repository | Repository TE Unjani";
		$data['content'] = "main/repository";
		$this->load->view('main/template', $data);	
	}

	public function detail($filename) {

		$data['title'] = "Repository | Repository TE Unjani";		
		$data['filename'] = $filename;
		$data['content'] = "main/detail";
		$this->load->view('main/template', $data);	
	}
	
}
