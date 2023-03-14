<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->database();
				$this->load->library('session');
				
        }
	
	public function index() //otomatik olarak çalışır
	{
		$this->load->view('admin/login_form');
		
		
	}
	public function login_ol(){
		
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");
		echo "<br>";
		// Zararlı Kodları Temizleme
		 $email= $this->security->xss_clean($email);
		 $sifre= $this->security->xss_clean($sifre);
		 
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login("adminler",$email,$sifre);
		if($result){
			//Kullacı varsa bilgiler diziye aktarılır
			$sess_array = array(
			'id' => $result[0]->Id,
			'yetki' => $result[0]->yetki,
			'email' => $result[0]->email,
			'ad' => $result[0]->ad,
			'soyad' => $result[0]->soyad,
			'resim' => $result[0]->resim);
			//Session  atama
			$this->session->set_userdata("admin_session",$sess_array);
			redirect(base_url().'admin/home');
		
	}
	else{
		$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya şifre girdiniz!");
		redirect(base_url().'admin/login');
	}
	
}
public function log_out(){
		$this->session->unset_userdata("admin_session");
			redirect(base_url().'admin/login');
	}
}
