<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['title'] = "Beranda | Repository TE Unjani";
		$data['content'] = "main/home";
		
		$this->db->order_by("tgl_upload", "desc");
		$data['files'] = $this->db->get('files')->result();
		
		$this->load->view('main/template', $data);	
	}	
	
}
