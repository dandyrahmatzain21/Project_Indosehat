<?php
defined('BASEPATH') OR exit ('Tidak Boleh Mengakses Langsung');

class Home extends CI_controller{

	public function __construct()
    {
		parent::__construct();
		//$this->load->model("m_login");
		//if($this->m_login->isNotLogin()) redirect(site_url('login'));
	}

	public function index(){

		$this->load->view('Home');
	}
}
?>