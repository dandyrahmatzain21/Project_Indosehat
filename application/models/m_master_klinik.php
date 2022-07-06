<?php
defined('BASEPATH') or die('error');

class m_master_klinik extends CI_model{

	private $master_klinik='master_klinik';
	public $id_klinik;
	public $kode_klinik;
	public $nama_klinik;
	public $pemilik;
	public $status;

	function view_data(){
        return $this->db->get($this->master_klinik)->result();
	}

	public function kode_klinik(){
		  $this->db->select('RIGHT(master_klinik.kode_klinik,4) as kode_klinik', FALSE);
		  $this->db->order_by('kode_klinik','DESC');    
		  $this->db->limit(1);    

		  $query = $this->db->get('master_klinik');    
		  if($query->num_rows() <> 0){    
			   $data = $query->row();      
			   $kode_klinik = intval($data->kode_klinik) + 1; 
		  }
		  else{      
			   $kode_klinik = 1;
		  }
			  $batas = str_pad($kode_klinik, 4, "0", STR_PAD_LEFT);    
			  $kodetampil = "K".$batas;
			  return $kodetampil;  
		 }

	function delete_data($id_klinik){
		$this->db->where('id_klinik',$id_klinik);
		$this->db->delete($this->master_klinik);
	}

	function save_data(){
        $post = $this->input->post();
        $this->id_klinik = $post["id_klinik"];
        $this->kode_klinik = $post["kode_klinik"];
        $this->nama_klinik = $post["nama_klinik"];
        $this->pemilik = $post["pemilik"];
        $this->status = $post["status"];
        $this->db->insert($this->master_klinik, $this);
	}

	function detail_data($id_klinik){
		$this->db->where('id_klinik',$id_klinik);
		$sql_master_klinik=$this->db->get($this->master_klinik);
		if($sql_master_klinik->num_rows()==1){
			return $sql_master_klinik->row_array();
		}
	}

	function update_data($id_klinik){
		$data=array(
			'nama_klinik'=>$this->input->post('nama_klinik'),
			'pemilik'=>$this->input->post('pemilik'),
			'status'=>$this->input->post('status')
			);

		$this->db->where('id_klinik',$id_klinik);
		$this->db->update($this->master_klinik,$data);
	}

	function CekRecord($id_klinik){
		$this->db->where('id_klinik',$id_klinik);
		$sql_master_klinik=$this->db->get($this->master_klinik);
		if($sql_master_klinik->num_rows()==1){
			
		}
	}
}


?>