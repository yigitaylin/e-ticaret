<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->model('Database_Model');
				$this->load->helper('url');
				$this->load->library('session');
				
				if(!$this->session->userdata("admin_session")) // login olup olmadığı kontrolü
					redirect(base_url().'admin/login');
				
        }
	
	public function index() //otomatik olarak çalışır
	{
		
		$this->load->view('admin/_content');
		
		
	}
	public function ayarlar(){
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$this->load->view('admin/ayarlar',$data);
	}
	public function ayarlar_guncelle($id){
		$data=array(
		'adi'=>$this->input->post('adi'),
		'keywords'=>$this->input->post('keywords'),
		'description'=>$this->input->post('description'),
		'name'=>$this->input->post('name'),
		'smtpserver'=>$this->input->post('smtpserver'),
		'smtpport'=>$this->input->post('smtpport'),
		'smtpemail'=>$this->input->post('smtpemail'),
		'password'=>$this->input->post('password'),
		'adres'=>$this->input->post('adres'),
		'tel'=>$this->input->post('tel'),
		'fax'=>$this->input->post('fax'),
		'email'=>$this->input->post('email'),
		'sehir'=>$this->input->post('sehir'),
		'iletisim'=>$this->input->post('iletisim'),
		
		'facebook'=>$this->input->post('facebook'),
		'hakkimizda'=>$this->input->post('hakkimizda'),
		'twitter'=>$this->input->post('twitter'),
		'instagram'=>$this->input->post('instagram'),
		'pinterest'=>$this->input->post('pinterest')
		);
		
		$this->Database_Model->update_data("ayarlar",$data,$id);
		$this->session->set_flashdata("mesaj","Ayarlar Güncellendi");
		redirect(base_url().'admin/home/ayarlar');
	}
}
