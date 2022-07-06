<?php
defined('BASEPATH') OR exit ('Tidak Boleh Mengakses Langsung');

class Privacy extends CI_controller{

	public function index(){

		$data['page']='privacy';
		$this->load->view('Home',$data);
	}
}
?>