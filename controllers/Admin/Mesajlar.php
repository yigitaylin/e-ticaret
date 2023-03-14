<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {
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
		$query=$this->db->query("SELECT * FROM mesajlar ORDER BY ad");
		$data["veriler"]=$query->result();
		$this->load->view('admin/mesajlar_liste',$data);
		
		
	}
	
	public function duzenle($id){
		
		$query=$this->db->query("SELECT * FROM mesajlar WHERE Id= $id");
		$data["veri"]=$query->result();
		$this->load->view('admin/mesajlar_duzenle_formu',$data);
	}
	
	public function guncelle($id){
		
		$data=array(
		'mesaj_not'=>$this->input->post('mesaj_not'));
		
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("mesajlar",$data,$id);
		$this->session->set_flashdata("mesaj","Not Eklendi");
		redirect(base_url().'admin/mesajlar');
		
	}
	public function sil($id){
		
	    $this->db->query("DELETE  FROM mesajlar WHERE Id= $id");
		$this->session->set_flashdata("mesaj","Mesaj Silindi");
		redirect(base_url().'admin/mesajlar');
	}
	
}
