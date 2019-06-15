<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ebook extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['title'] = "E-Book | Repository TE Unjani";
		$data['content'] = "main/ebook";
		$this->load->view('main/template', $data);	
	}	
	
}
