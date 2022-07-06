<?php
defined('BASEPATH') OR exit('Tidak Boleh Diakses Langsung');

class master_klinik extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('m_master_klinik');
	}

	function view(){
		$data['daftar_master_klinik']=$this->m_master_klinik->view_data();
		$data['page']='master_klinik/view';
		$this->load->view('Home',$data);
	}

	function add(){

		//$dariDB = $this->m_master_klinik->cek_kode_klinik();
        // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
        //$nourut = substr($dariDB, 3, 4);
        //$kode_klinik_sekarang = $nourut + 1;
        //$data = array('kode_klinik' => $kode_klinik_sekarang);

		$data['kode_klinik'] = $this->m_master_klinik->kode_klinik();
		$data['page']='master_klinik/add';
		$this->load->view('Home',$data);
	}
	
	function save(){
		if($this->m_master_klinik->CekRecord($this->input->post('id_master_klinik'))){
			$this->session->set_flashdata('pesan_crud','<script>alert(\'Data sudah ada\')</script>');
		} else {
			$this->m_master_klinik->save_data();
		}
	redirect('master_klinik/view');	
	}

	function delete(){
		$id_master_klinik=$this->uri->segment(3);
		$this->m_master_klinik->delete_data($id_master_klinik);
		redirect('master_klinik/view');
	}

	function edit($id_master_klinik){

		$data['detail_master_klinik']=$this->m_master_klinik->detail_data($id_master_klinik);	
		$data['page']='master_klinik/edit';
		$this->load->view('Home',$data);	
	}

	function update(){
		$this->m_master_klinik->update_data($this->input->post('id_klinik'));
		redirect('master_klinik/view');
	}

}
?>