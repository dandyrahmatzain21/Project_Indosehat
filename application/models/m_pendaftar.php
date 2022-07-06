<?php
defined('BASEPATH') or die('error');

class m_pendaftar extends CI_model{

	private $pendaftar='pendaftar';
    public $id_pendaftar;
    public $creator;
    public $kode_klinik;
    public $no_identitas;
    public $nama;
    public $file_dokumen = "default.jpg";
    public $sertifikat_lab = "default.jpg";
    public $tanggal_berlaku_sertifikat;
    public $expired;
    public $qr_code;


    public function id_pendaftar(){
    $this->db->select('RIGHT(pendaftar.id_pendaftar,4) as id_pendaftar', FALSE);
    $this->db->order_by('id_pendaftar','DESC');    
    $this->db->limit(1);    

    $query = $this->db->get('pendaftar');    
    if($query->num_rows() <> 0){    
        $data = $query->row();      
        $id_pendaftar = intval($data->id_pendaftar) + 1; 
        }
        else{      
            $id_pendaftar = 1;
        }
            $batas = str_pad($id_pendaftar, 4, "0", STR_PAD_LEFT);    
            $kodetampil = "P".$batas;
            return $kodetampil;  
        }

    public function getAll()
    {
        return $this->db->get($this->pendaftar)->result();
    }

    public function getById($id_pendaftar)
    {
        return $this->db->get_where($this->pendaftar, ["id_pendaftar" => $id_pendaftar])->row();
    }


	function detail_data($id_pendaftar){
		$this->db->where('id_pendaftar',$id_pendaftar);
		$sql_pendaftar=$this->db->get($this->pendaftar);
		if($sql_pendaftar->num_rows()==1){
			return $sql_pendaftar->row_array();
		}
	}

	function CekRecord($id_pendaftar){
		$this->db->where('id_pendaftar',$id_pendaftar);
		$sql_pendaftar=$this->db->get($this->pendaftar);
		if($sql_pendaftar->num_rows()==1){
			
		}
	}

	function view_data(){//$limit,$start
        $this->db->select('*');
        $this->db->join('master_klinik', 'pendaftar.kode_klinik=master_klinik.kode_klinik');
        return $this->db->get($this->pendaftar)->result();//,$limit,$startx
	}

	function update_data($id_pendaftar,$creator,$kode_klinik,$no_identitas,$nama,$file_dokumen,$sertifikat_lab,$tanggal_berlaku_sertifikat,$expired)
	{

        $data = array(
        'creator'       =>$creator,
        'kode_klinik'   =>$kode_klinik,
        'no_identitas'  =>$no_identitas,
        'nama'          =>$nama,
        'file_dokumen'  =>$file_dokumen,
        'sertifikat_lab'=>$sertifikat_lab,
        'tanggal_berlaku_sertifikat'=>$tanggal_berlaku_sertifikat,
        'expired'       =>$expired
        );  
        $this->db->where('id_pendaftar',$id_pendaftar);
		$this->db->update($this->pendaftar, $data);
	}


	function save_data($id_pendaftar,$creator,$kode_klinik,$no_identitas,$nama,$file_dokumen,$sertifikat_lab,$tanggal_berlaku_sertifikat,$expired,$qr_code){
		$data = array(

        'id_pendaftar' 	=>$id_pendaftar,
       	'creator'		=>$creator,
        'kode_klinik'	=>$kode_klinik,
        'no_identitas'	=>$no_identitas,
        'nama'			=>$nama,
       	'file_dokumen'	=>$file_dokumen,
        'sertifikat_lab'=>$sertifikat_lab,
        'tanggal_berlaku_sertifikat'=>$tanggal_berlaku_sertifikat,
        'expired'		=>$expired,
        'qr_code' 		=> $qr_code
        );
        $this->db->insert($this->pendaftar, $data);
	}
	

	function delete_data($id_pendaftar){
		$this->_deleteImage($id_pendaftar);
        $this->_deleteQr($id_pendaftar);
        $this->_deleteSertifikat($id_pendaftar);
        return $this->db->delete($this->pendaftar, array("id_pendaftar" => $id_pendaftar));
	}

     function delete_file_dokumen_sebelumnya($id_pendaftar)
    {
        $pendaftar = $this->getById($id_pendaftar);
        if ($pendaftar->file_dokumen != "default.jpg") {
            $filename = explode(".", $pendaftar->file_dokumen)[0];
            return array_map('unlink', glob(FCPATH."assets/file_dokumen/$filename.*"));
        }
    }

     function delete_sertifikat_lab_sebelumnya($id_pendaftar)
    {
        $pendaftar = $this->getById($id_pendaftar);
        if ($pendaftar->file_dokumen != "default.jpg") {
        $filename = explode(".", $pendaftar->sertifikat_lab)[0];
        return array_map('unlink', glob(FCPATH."assets/file_dokumen/$filename.*"));
    }
    }

	private function _deleteImage($id_pendaftar)
	{
		$pendaftar = $this->getById($id_pendaftar);
		if ($pendaftar->file_dokumen != "default.jpg") {
			$filename = explode(".", $pendaftar->file_dokumen)[0];
			return array_map('unlink', glob(FCPATH."assets/file_dokumen/$filename.*"));
		}
	}

    private function _deleteQr($id_pendaftar)
    {
        $pendaftar = $this->getById($id_pendaftar);
        $filename = explode(".", $pendaftar->qr_code)[0];
        return array_map('unlink', glob(FCPATH."assets/file_dokumen/$filename.*"));
        
    }

    private function _deleteSertifikat($id_pendaftar)
    {
        $pendaftar = $this->getById($id_pendaftar);
        $filename = explode(".", $pendaftar->sertifikat_lab)[0];
        return array_map('unlink', glob(FCPATH."assets/file_dokumen/$filename.*"));
        
    }
}
?>