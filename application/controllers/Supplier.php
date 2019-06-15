<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Msupplier');
	}

	function hapus($id) {
		$this->db->where(array('kode_supplier' => $id));
		$this->db->delete('supplier');
		redirect('../index.php/supplier/listsupplier');
	}

	function simpan($id="") {
		$data=array(
			"kode_supplier"=>$this->input->post('kode_supplier'),
			"nama"=>$this->input->post('nama'),
			"email"=>$this->input->post('email'),
			"notelp"=>$this->input->post('notelp')
		);
		$where = array('kode_supplier' => $this->input->post('kode_supplier'));
		$cek=$this->Msupplier->getsupplier($where)->num_rows();
		if(!$cek){
			$this->db->insert('supplier',$data);
		}else{
			$this->db->where($where);
			$this->db->update('supplier',$data);
		}
		redirect('../index.php/supplier/listsupplier');
	}

	function to_form($id = '') {
		$data['judul'] = "Form Supplier";
		$data['content'] = "form_supplier";
		$data['judul'] = 'Form Supplier';		
		if($id == '') {
			$data['row'] = '';
		} else {
			$data['row'] = $this->Msupplier->getsupplier(['kode_supplier' => $id])->row();
			//$where = array('kode_supplier' => $id);			
			//$data['row'] = $this->Msupplier->getsupplier($where)->row();
		}
		$this->load->view('template', $data);
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	function listsupplier() {
		$data['judul'] = "List Supplier";
		$data['content'] = "v_listsupplier";
		$data['listsupplier'] = $this->Msupplier->getsupplier();
		$this->load->view('template', $data);		
	}
	
}
