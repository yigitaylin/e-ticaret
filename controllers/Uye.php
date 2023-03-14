<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->library('session');
				$this->load->model('Database_Model');
				
				if(!$this->session->userdata("uye_session")) // login olup olmadığı kontrolü
					redirect(base_url().'home/login_ol');
				
        }
	
	public function index() //otomatik olarak çalışır
	{
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		$data["sayfa"]="Üye Paneli";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data);
		
		
	}
	public function cikis() {
		
		$this->session->unset_userdata("uye_session");
		redirect(base_url().home);
		
		
	}
	public function uye_resim_yukle(){
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		$data["sayfa"]="Üye Profil Fotoğrafı";
		$data["menu"]="uye";
		$this->load->view('uye_profil_foto',$data);
		}
	public function uye_resim_kaydet(){
		$data["id"]=$id;
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 1024;
        // Ayarlar ile kütüphaneyi çağır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))//Yükle->Hata varsa
                {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede Hata oluştu :".$error);
                        $this->load->view('uye_profil_foto', $data);
                }
                else //Hata yoksa
                {
                        $upload_data=$this->upload->data();
						$dosya_adi=$upload_data["file_name"];

                        $data=array(
		                       'resim'=>$upload_data["file_name"]
		                             );
						$id=$this->session->uye_session["id"];
		                $this->load->model('Database_Model');
		                $this->Database_Model->update_data("uyeler",$data,$id);
						$this->session->set_flashdata("mesaj","Profil Fotoğrafı Başarıyla güncellendi");
		                redirect(base_url().'uye/uye_resim_yukle');
		
                }
        }
	
	public function hesabim(){
		
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		$data["sayfa"]="Üye Hesabi";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data);
		
	}
	
	
	public function uye_guncelle(){
		
		$data=array(
		'ad'=>$this->input->post('ad'),
		'soyad'=>$this->input->post('soyad'),
		'sehir'=>$this->input->post('sehir'),
		'telefon'=>$this->input->post('telefon'),
		'adres'=>$this->input->post('adres'),
		'sifre'=>$this->input->post('sifre')
		);
		$id=$this->session->uye_session["id"];
		
		$this->load->model('Database_Model');
		$this->Database_Model->update_data("uyeler",$data,$id);
		$this->session->set_flashdata("mesaj","Üyelik Bilgileriniz güncellendi");
		redirect(base_url().'uye/hesabim');
		
	}
	public function sepetim(){
		
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="Sepetim ||";
		$data["menu"]="sepetim";
		$id=$this->session->uye_session["id"];	
		$data['veriler']=$this->Database_Model->sepet_urunler($id);
		//print_r($data['veriler']);
		//exit();
		$this->load->view('sepet',$data);
		
	}
	public function sepet_sil($id){
		
		$query=$this->db->query("DELETE FROM sepet WHERE Id=$id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi.  </p>");
		redirect(base_url().'uye/sepetim');
	}
	public function siparis_sil($id){
		
		$query=$this->db->query("DELETE FROM sepet WHERE Id=$id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün İtal Edildi.  </p>");
		redirect(base_url().'uye/siparis_detay');
	}
	
	public function sepete_ekle(){
		
		$data=array(
		'urun_id'=>$this->input->post('urun_id'),
		'adet'=>$this->input->post('adet'),
		'musteri_id'=>$this->session->uye_session['id']
		);
		//print_r($data);
		//exit();
		$this->db->insert("sepet",$data);
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi</p>");
		redirect(base_url().'home/urundetay/'.$this->input->post('urun_id'));
		
	}
	public function satin_al(){
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$data["toplam"]=$this->input->post('toplam');
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["uye"]=$query->result();
		$data["sayfa"]="Satın Alma ||";
		$data["menu"]="sepetim";
		$this->load->view('satin_alma',$data);
		}
		public function siparis_tamamla(){
		
		$data=array(
		'adi'=>$this->input->post('adi'),
		'soyadi'=>$this->input->post('soyadi'),
		'musteri_id'=>$this->session->uye_session['id'],
		'adres'=>$this->input->post('adres'),
		'sehir'=>$this->input->post('sehir'),
		'telefon'=>$this->input->post('telefon'),
		'tutar'=>$this->input->post('toplam'),
		'IP'=>$_SERVER['REMOTE_ADDR']
		);
		$this->db->insert("siparis",$data);
		$siparis_id=$this->db->insert_id();
		
		$id=$this->session->uye_session["id"];
		
		$veriler=$this->Database_Model->sepet_urunler($id);
		foreach($veriler as $rs){
			$data=array(
			'adi'=>$rs->urun_adi,
			'fiyat'=>$rs->s_fiyat,
			'musteri_id'=>$id,
			'urun_id'=>$rs->urun_id,
			'siparis_id'=>$siparis_id,
		    'adet'=>$rs->adet,
			'tutar'=>$rs->adet*$rs->s_fiyat,
			);
			$this->db->insert("siparis_urunler",$data);
		}
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
		redirect(base_url().'uye/islem_son');
		
	}
	public function siparisler(){
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$data["sayfa"]="siparislerim ||";
		$data["menu"]="uye";
		$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
		$this->load->view('siparislerim',$data);
	
		
	}
	public function islem_son(){
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
		$data["sayfa"]="İşlem Tamamlandı ||";
		$data["menu"]="satin alma";
		$this->load->view('islem_son',$data);
	
		
	}
	public function siparisdetay($siparis_id){
		$query=$this->db->query("SELECT * FROM ayarlar ");
		$data["veri"]=$query->result();
		
		$data["sayfa"]="Sipariş Detayı ||";
		$data["menu"]="uye";
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT * FROM siparis_urunler WHERE siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
	
		$this->load->view('siparis_detay',$data);
	}
	
}
