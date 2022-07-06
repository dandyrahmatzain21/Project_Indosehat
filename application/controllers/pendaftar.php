<?php
defined('BASEPATH') OR exit('Tidak Boleh Diakses Langsung');

class pendaftar extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model(['m_pendaftar','m_master_klinik']);
		$this->load->library('pdf'); 
	}

	function view(){
		$data['daftar_pendaftar']=$this->m_pendaftar->view_data();
		$data['page']='pendaftar/view';
		$this->load->view('Home',$data);
	}

	function add(){
		$data['id_pendaftar'] = $this->m_pendaftar->id_pendaftar();
		$data['daftar_master_klinik']=$this->m_master_klinik->view_data();
		$data['page']='pendaftar/add';
		$this->load->view('Home',$data);
	}

	
	function save(){
        $id_pendaftar=$this->input->post('id_pendaftar');
        $creator=$this->input->post('creator');
        $kode_klinik=$this->input->post('kode_klinik');
        $no_identitas=$this->input->post('no_identitas');
        $nama=$this->input->post('nama');
       	$file_dokumen = $this->_uploadImage();
        $sertifikat_lab = $this->_uploadImage2();
        $tanggal_berlaku_sertifikat=$this->input->post('tanggal_berlaku_sertifikat');
        
        $tanggal_sekarang = date('Y-m-d');
		if (!(strtotime($tanggal_sekarang) <= time() AND time() >= strtotime($tanggal_berlaku_sertifikat))) {
		$expired = 'Aktif';
		} else {
		$expired = 'Tidak Aktif';
		}
 
        $this->load->library('ciqrcode'); 
 
        $config['cacheable']    = true; 
        $config['cachedir']     = './assets/';
        $config['errorlog']     = './assets/';
        $config['imagedir']     = './assets/file_dokumen/';
        $config['quality']      = true;
        $config['size']         = '1024'; 
        $config['black']        = array(224,255,255); 
        $config['white']        = array(70,130,180); 
        $this->ciqrcode->initialize($config);
 		
 		$waktu = time();
        $id_pendaftar=$this->input->post('id_pendaftar');
        $nama=$this->input->post('nama');
        $penghubung='_';
        $generate_data_qr = $id_pendaftar.$penghubung.$nama.$penghubung.$waktu;
        $nama_qr = $id_pendaftar.$penghubung.$nama;

        $qr_code=$nama_qr.'.png'; 
        $params['data'] = $generate_data_qr; 
        $params['level'] = 'H'; 
        $params['size'] = 10;
        $params['savename'] = FCPATH.$config['imagedir'].$qr_code; 
        $this->ciqrcode->generate($params);
 
        $this->m_pendaftar->save_data($id_pendaftar,$creator,$kode_klinik,$no_identitas,$nama,$file_dokumen,$sertifikat_lab,$tanggal_berlaku_sertifikat,$expired,$qr_code); 
        redirect('pendaftar/view');
	} 

	public function delete($id_pendaftar=null)
    {
        if (!isset($id_pendaftar)) show_404();
        
        if ($this->m_pendaftar->delete_data($id_pendaftar)) {
            redirect(site_url('pendaftar/view'));
        }
    }

	function edit($id_pendaftar){

		$data['daftar_master_klinik']=$this->m_master_klinik->view_data();
		$data['detail_pendaftar']=$this->m_pendaftar->detail_data($id_pendaftar);	
		$data['page']='pendaftar/edit';
		$this->load->view('Home',$data);	
	}

	function update(){
		$id_pendaftar=$this->input->post('id_pendaftar');
        $creator=$this->input->post('creator');
        $kode_klinik=$this->input->post('kode_klinik');
        $no_identitas=$this->input->post('no_identitas');
        $nama=$this->input->post('nama');
	
		if ($_FILES["file_dokumen"]["name"] !=null) {
            $file_dokumen = $this->_updateImage();
        } else{
            $file_dokumen = $this->input->post('old_file_dokumen');
		}
	
		if ($_FILES["sertifikat_lab"]["name"] !=null) {
            $sertifikat_lab = $this->_updateImage2();
        } else{
            $sertifikat_lab = $this->input->post('old_sertifikat_lab');
		}
		
        $tanggal_berlaku_sertifikat=$this->input->post('tanggal_berlaku_sertifikat');
        $tanggal_sekarang = date('Y-m-d');
		if (!(strtotime($tanggal_sekarang) <= time() AND time() >= strtotime($tanggal_berlaku_sertifikat))) {
		$expired = 'Aktif';
		} else {
		$expired = 'Tidak Aktif';
		}

        $this->m_pendaftar->update_data($id_pendaftar,$creator,$kode_klinik,$no_identitas,$nama,$file_dokumen,$sertifikat_lab,$tanggal_berlaku_sertifikat,$expired); 
        redirect('pendaftar/view');
	}

	private function _updateImage()
	{	
        $id_pendaftar=$this->input->post('id_pendaftar');
        $nama=$this->input->post('nama');
        $penghubung='_';
        $nama_file = $id_pendaftar.$penghubung.$nama;
		$config['upload_path']          = './assets/file_dokumen/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $nama_file;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file_dokumen')) {

			$file_dokumen = $this->m_pendaftar->delete_file_dokumen_sebelumnya($id_pendaftar);
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _updateImage2()
	{
       	$id_pendaftar=$this->input->post('id_pendaftar');
        $nama=$this->input->post('nama');
        $penghubung='_';
        $nama_file = $id_pendaftar.$penghubung.$nama;
		$config['upload_path']          = './assets/file_dokumen/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $nama_file;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('sertifikat_lab')) {

			$sertifikat_lab = $this->m_pendaftar->delete_sertifikat_lab_sebelumnya($id_pendaftar);
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _uploadImage()
	{	
        $id_pendaftar=$this->input->post('id_pendaftar');
        $nama=$this->input->post('nama');
        $penghubung='_';
        $nama_file = $id_pendaftar.$penghubung.$nama;
		$config['upload_path']          = './assets/file_dokumen/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $nama_file;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file_dokumen')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _uploadImage2()
	{
       	$id_pendaftar=$this->input->post('id_pendaftar');
        $nama=$this->input->post('nama');
        $penghubung='_';
        $nama_file = $id_pendaftar.$penghubung.$nama;
		$config['upload_path']          = './assets/file_dokumen/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $nama_file;
		$config['max_size']             = 1024;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('sertifikat_lab')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}
    
    function print_qr($id_pendaftar){
	$data['pendaftar']=$this->m_pendaftar->getById($id_pendaftar);
	$html = $this->load->view('pendaftar/print_qr',$data,true);
    $this->pdf->PdfGenerator($html,'QR-Code-'.$data['pendaftar']->id_pendaftar.'-'.$data['pendaftar']->nama.'-Indosehat-2003','A4','Portrait');
    }


}
?>
