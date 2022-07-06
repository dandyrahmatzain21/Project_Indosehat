<?php
defined('BASEPATH') or die('Error');


class M_user extends CI_model{
	
	var $user='user';
	

	function CekLogin($user,$pass){
	$this->db->where('user',$user);
	$this->db->where('pass',$pass);
	$sql_cek=$this->db->get($this->user);
		if($sql_cek->num_rows()==1){
			return $sql_cek->row_array();		
		}

	}
}
