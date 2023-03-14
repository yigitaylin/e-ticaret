<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siparisler extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->model('Database_Model');
        }
		
	public function index() //otomatik olarak çalışır
	{
        
	    $query=$this->db->query("SELECT * FROM siparis Where siparis_durumu='yeni'");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/siparisler_listesi',$data);

		
		
	}
	public function liste($durum){
		
		$query=$this->db->query("SELECT * FROM siparis WHERE siparis_durumu='$durum'");
		$data["veriler"]=$query->result();
		
		$this->load->view('admin/siparisler_listesi',$data);
	
		
	}
	public function guncelle($id)
	{
		$data=array(
		'kargo'=>$this->input->post('kargo'),
		'siparis_durumu'=>$this->input->post('siparis_durumu'),
		'aciklama'=>$this->input->post('aciklama')
		
		);
		$this->Database_Model->update_data("siparis",$data,$id);
		                                                                                                                                                                                                                                                                                                                          
		redirect(base_url().'admin/siparisler');
		
	}
	public function siparisdetay($siparis_id){
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
		$query=$this->db->query("SELECT * FROM siparis WHERE Id=$siparis_id");
		$data["veri"]=$query->result();
		$data["siparis_id"]=$siparis_id;
		$this->load->view('admin/siparisler_detay',$data);
	}
		
	
}
