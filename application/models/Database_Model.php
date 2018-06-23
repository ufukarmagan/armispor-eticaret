<?php
class Database_Model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function login($tablo,$email,$sifre)
	{
		$this->db->select("*");
		$this->db->from($tablo);
		$this->db->where('email',$email);
		$this->db->where('sifre',$sifre);
		$this->db->where('durum',"aktif");
		$this->db->limit(1);
		
		$query = $this->db->get(); //verileri getir.
		
		if($query->num_rows() == 1) {
			return $query->result();
		}
		else{
			return false;
		}
	}
	
}
?>