<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['title'] = "Beranda | Repository TE Unjani";
		$data['content'] = "main/home";
		$this->load->view('main/template', $data);	
	}	
	
}
