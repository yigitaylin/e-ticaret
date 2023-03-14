<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
        }
		public function uye_ekle() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Kayıt";
		$data["menu"]="Uye";
		$this->load->view('register',$data);
		
		
	}
	public function uye_kaydet(){
		$data=array(
		'ad'=>$this->input->post('ad'),
		'soyad'=>$this->input->post('soyad'),
		'email'=>$this->input->post('email'),
		'sifre'=>$this->input->post('sifre')
		
		);
		$this->db->insert("uyeler",$data);
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi");
		redirect(base_url().'home/login_ol');
		
	}
		public function login_ol() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Uye Login";
		$data["menu"]="Uye";
		$this->load->view('login_ol',$data);
		
	}
	public function login(){
		
		$email=$this->input->post("email");
		$sifre=$this->input->post("sifre");
		echo "<br>";
		// Zararlı Kodları Temizleme
		 $email= $this->security->xss_clean($email);
		 $sifre= $this->security->xss_clean($sifre);
		 
		$this->load->model('Database_Model');
		$result=$this->Database_Model->login("uyeler",$email,$sifre);
		if($result){
			//Kullacı varsa bilgiler diziye aktarılır
			$sess_array = array(
			'id' => $result[0]->Id,
			'yetki' => $result[0]->yetki,
			'email' => $result[0]->email,
			'ad' => $result[0]->ad,
			'soyad' => $result[0]->soyad,
			'resim' => $result[0]->resim);
			
			//print_r($sess_array);
			//echo "<br>Login oldu";
			//exit();
			//Session  atama
			$this->session->set_userdata("uye_session",$sess_array);
			redirect(base_url().home);
		
	}
	else{
		$this->session->set_flashdata("mesaj","Hatalı kullanıcı adı veya şifre girdiniz!");
		redirect(base_url().'home/login_ol');
	}
	
}
	public function index() //otomatik olarak çalışır
	{
        $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		$data["sepet"]=$query->result();
	    $query=$this->db->query("SELECT * FROM urunler Where grubu='cok_satan' ORDER BY RAND() LIMIT 4");
		$data["cok_satan"]=$query->result();
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 4");
		$data["random"]=$query->result();


	    $query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="";
		$data["menu"]="anasayfa";
		$this->load->view('_header',$data);
		$this->load->view('_footer');
		$this->load->view('_slider');
		$this->load->view('_content');
		
		
	}
		public function hakkimizda() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda";
		$data["menu"]="hakkimizda";
		$this->load->view('hakkimizda',$data);
		
	}
	public function iletisim() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim";
		$data["menu"]="iletisim";
		$this->load->view('iletisim',$data);
		
	}
	public function bize_yazin() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize Yazın";
		$data["menu"]="bize_yazin";
		$this->load->view('bize_yazin',$data);
		
	}
	public function mesaj_kaydet(){
		
		$data=array(
		'ad'=>$this->input->post('ad'),
		'soyad'=>$this->input->post('soyad'),
		'email'=>$this->input->post('email'),
		'telefon'=>$this->input->post('telefon'),
		'mesaj'=>$this->input->post('mesaj'),
		'IP'=>$_SERVER['REMOTE_ADDR']
		);
		$this->db->insert("mesajlar",$data);
		
		
		
		
		
		$this->session->set_flashdata("mesaj","<p align='center'>Mesajınız Gönderildi. Teşekkür Ederiz.</p>");
		redirect(base_url().'home/bize_yazin');
		
	}
	public function urundetay($id){
		$query=$this->db->query("SELECT * FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
		$data["sayfa"]="urun_detay";
		$data["menu"]="urun";
		$this->load->model('Database_Model');
		$data["veri"]=$this->Database_Model->get_urun($id);
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result();
		$this->load->view('urun_detay',$data);
		
	}
	
	public function giyim_1() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM urunler Where cinsiyet='kadin' ORDER BY RAND() LIMIT 12");
		$data["random"]=$query->result();
        
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Kadın Giyim";
		$data["menu"]="Kadin Giyim";
		$this->load->view('kadin_giyim',$data);
		
	}
	public function giyim_2() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM urunler Where cinsiyet='erkek'  ORDER BY RAND() LIMIT 12");
		$data["random"]=$query->result();
        
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Erkek Giyim";
		$data["menu"]="Erkek Giyim";
		$this->load->view('erkek_giyim',$data);
		
	}
	public function sa_ayakkabi() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM urunler Where kategori='5'  ORDER BY RAND() LIMIT 12");
		$data["random"]=$query->result();
        
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Erkek Giyim";
		$data["menu"]="Erkek Giyim";
		$this->load->view('ayakkabilar',$data);
	}
	public function aksesuar() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM urunler Where kategori='3'  ORDER BY RAND() LIMIT 12");
		$data["random"]=$query->result();
        
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Aksesuar";
		$data["menu"]="Aksesuar";
		$this->load->view('aksesuarlar',$data);
	}
	public function sa_indirim() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM urunler Where grubu='indirim' ORDER BY RAND() LIMIT 12");
		$data["indirim"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İndirim";
		$data["menu"]="İndirim";
		$this->load->view('s_indirim',$data);
		
	}
	public function s_aksesuar() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM urunler ORDER BY RAND() LIMIT 12");
		$data["random"]=$query->result();
		$query=$this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Aksesuar";
		$data["menu"]="Aksesuar";
		$this->load->view('aksesuar',$data);
		
	}
	
}
