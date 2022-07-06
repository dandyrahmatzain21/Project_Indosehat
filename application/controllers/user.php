<?php
defined('BASEPATH') OR exit('Tidak boleh diakses langusng');

Class User extends CI_controller{
	

	public function __construct(){
	parent::__construct();
		// 1. load model m_user
		$this->load->model('m_user');		
	}	
	
	function index(){
	// menampilkan form login	
		$this->load->view('v_login');
	}
	
	function login(){
	// mengecek login	
	$data['HasilLogin']=$this->m_user->CekLogin($this->input->post('user'),$this->input->post('pass'));	
		if($data['HasilLogin']){  // jika suskes login
			// membuat sesion dari hasil login
			$this->session->set_userdata('user',$data['HasilLogin']['user']);
			$this->session->set_userdata('nama',$data['HasilLogin']['nama']);
			$this->session->set_userdata('level',$data['HasilLogin']['level']);
			$this->session->set_userdata('sudahkah_login',TRUE);
			redirect(site_url('home'));
			
		} else { // jika suskes login
		$this->session->set_flashdata('pesan_login','<script>alert(\'Anda gagal login !\')</script>');
		redirect(site_url('user'));
	
		}
	}
	
	function logout(){
	//untuk logout	
		$this->session->sess_destroy();	
		redirect(site_url('user'));
	}


}
