<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
 public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				$this->load->model('Database_Model');
				
				if(!$this->session->userdata("admin_session")) // login olup olmadığı kontrolü
					redirect(base_url().'admin/login');
				
        }
	
	public function index() //otomatik olarak çalışır
	{
		//$query=$this->db->query("SELECT * FROM urunler ORDER BY adi");
		//$data["veriler"]=$query->result();
		$data["veriler"]=$this->Database_Model->get_urunler();
		$this->load->view('admin/urunler_liste',$data);
		
		
	}
	public function ekle() //otomatik olarak çalışır
	{
		
		$this->load->view('admin/urunler_ekle');
		
		
	}
	public function ekle_kaydet(){
		
		$data=array(
		'adi'=>$this->input->post('adi'),
		'kategori'=>$this->input->post('kategori'),
		'al_fiyat'=>$this->input->post('al_fiyat'),
		'sat_fiyat'=>$this->input->post('sat_fiyat'),
		'stok'=>$this->input->post('stok'),
		'durum'=>$this->input->post('durum'),
		'aciklama'=>$this->input->post('aciklama')
		
		);
		$this->db->insert("urunler",$data);
		$this->session->set_flashdata("mesaj","Ürün Eklendi");
		redirect(base_url().'admin/urunler');
		
	}
	public function duzenle($id){
		
		$query=$this->db->query("SELECT * FROM urunler");
		$data["veriler"]=$query->result();
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		$this->load->view('admin/urunler_duzenle_formu',$data);
	}
	
	public function guncelle($id){
		$data=array(
		'adi'=>$this->input->post('adi'),
		'kategori'=>$this->input->post('kategori'),
		'al_fiyat'=>$this->input->post('al_fiyat'),
		'sat_fiyat'=>$this->input->post('sat_fiyat'),
		'stok'=>$this->input->post('stok'),
		'ind_fiyati'=>$this->input->post('ind_fiyati'),
		'grubu'=>$this->input->post('grubu'),
		'durum'=>$this->input->post('durum'),
		'aciklama'=>$this->input->post('aciklama')
		
		);
		$this->Database_Model->update_data("urunler",$data,$id);
		$this->session->set_flashdata("mesaj","Ürün güncellendi");
		redirect(base_url().'admin/urunler');
		
	}
	public function sil($id){
		
	    $this->db->query("DELETE  FROM urunler WHERE Id= $id");
		$this->session->set_flashdata("mesaj","Ürün silindi");
		redirect(base_url().'admin/urunler');
	} 
	
	public function resim_yukle($id){
		$query=$this->db->query("SELECT * FROM urunler WHERE Id= $id");
		$data["veri"]=$query->result(); 
		$data["id"]=$id;
		$this->load->view('admin/urunler_resim_yukle',$data);
		}
	public function resim_kaydet($id){
		$data["id"]=$id;
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1700;
                $config['max_height']           = 1024;
        // Ayarlar ile kütüphaneyi çağır
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('resim'))//Yükle->Hata varsa
                {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata("mesaj","Yüklemede Hata oluştu :".$error);
                        $this->load->view('admin/urunler_resim_yukle', $data);
                }
                else //Hata yoksa
                {
                        $upload_data=$this->upload->data();
						$dosya_adi=$upload_data["file_name"];

                        $data=array(
		                       'resim'=>$upload_data["file_name"]
		                             );
		                $this->load->model('Database_Model');
		                $this->Database_Model->update_data("urunler",$data,$id);
		                redirect(base_url().'admin/urunler');
		
                }
        }
		public function galeri_yukle($id){
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id= $id");
		$data["veriler"]=$query->result();
		$data["id"]=$id;
		$this->load->view('admin/urunler_galeri_yukle',$data);
		}
	public function galeri_kaydet($id){
		
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
                        redirect(base_url().'admin/urunler/galeri_yukle'.$id);
                }
                else //Hata yoksa
                {
					        // veritabanına kayıt
                        $upload_data=$this->upload->data();
						$dosya_adi=$upload_data["file_name"];

                        $data=array(
						       'urun_id'=>$id,
		                       'resim'=>$upload_data["file_name"]
		                             );
		                $this->db->insert("urunler_resim",$data);
						//veritabanına kayıt
						$this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi");
		                redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
		
                }
        }
		
		public function galeri_sil($urunid,$resimid){
	    $this->db->query("DELETE  FROM urunler_resim WHERE Id= $resimid");
		$this->session->set_flashdata("mesaj","Resim Galerinden Silindi.");
		redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
	}
} 