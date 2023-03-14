<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->library('session');
				
				if(!$this->session->userdata("admin_session")) // login olup olmadığı kontrolü
					redirect(base_url().'admin/login');
				
        }
	
	public function index() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM uyeler ORDER BY ad");
		$data["veriler"]=$query->result();
		$this->load->view('admin/uyeler_liste',$data);
		
		
	}
	public function ekle() //otomatik olarak çalışır
	{
		
		$this->load->view('admin/uyeler_ekle');
		
		
	}
	public function ekle_kaydet(){
		
		$data=array(
		'ad'=>$this->input->post('ad'),
		'soyad'=>$this->input->post('soyad'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		'telefon'=>$this->input->post('telefon'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'yetki'=>$this->input->post('yetki'),
		'durum'=>$this->input->post('durum')
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'admin/uyeler');
		
	}
	public function duzenle($id){
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id= $id");
		$data["veri"]=$query->result();
		$this->load->view('admin/uyeler_duzenle_formu',$data);
	}
	
	public function guncelle($id){
		
		$data=array(
		'ad'=>$this->input->post('ad'),
		'soyad'=>$this->input->post('soyad'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre'),
		'telefon'=>$this->input->post('telefon'),
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'yetki'=>$this->input->post('yetki'),
		'durum'=>$this->input->post('durum')
		);
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Üye güncellendi");
		redirect(base_url().'admin/uyeler');
		
	}
	public function sil($id){
		
	    $this->db->query("DELETE  FROM uyeler WHERE Id= $id");
		$this->session->set_flashdata("mesaj","Üye silindi");
		redirect(base_url().'admin/uyeler');
	}
	
}
