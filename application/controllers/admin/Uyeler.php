<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		
		if (!$this->session->userdata("admin_session"))//login olup olmadığı kontrolü
			redirect(base_url().'admin/login');
	}
	
	public function index()
	{
		$query = $this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/uyeler_liste',$data);
	}
	
	public function ekle()
	{
		$this->load->view('admin/uyeler_ekle');
	}
	
	public function ekle_kaydet()
	{
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sehir' => $this->input->post('sehir'),
		'tel'   => $this->input->post('tel'),
		'durum' => $this->input->post('durum'),
		'yetki' => $this->input->post('yetki'),
		'sifre' => $this->input->post('sifre')
		);
		
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
	}
}