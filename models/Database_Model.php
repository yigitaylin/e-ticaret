<?php

class Database_Model extends CI_Model {

	function __construct(){
		parent::__construct();
	}                                

public function insert_data($table,$data)
{
	if($this->db->insert($table,$data))
	{
		
			return $this->db->insert_id();
		
	}
	

	
}
public function update_data($tablo,$data,$Id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('Id', $Id);
		$this->db->update($tablo ,$data);
		return true;
	} 
	public function delete_data($tablo,$Id)  
	{
		if($this->db->delete($tablo,"Id=".$Id))
			return true;
	} 
	public function login($tablo,$email,$sifre)
		{
		
         
        $query = $this->db->query("SELECT * FROM $tablo WHERE email='$email' AND sifre='$sifre' LIMIT 1");
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
		}
		public function urun_get() //ürünler tablosuna ait
	 {
		$query=$this->db->query('SELECT urunler.*,kategoriler.adi as katadi
		FROM urunler
		INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.Id
		order by urunler.adi');
		
		return $query->result();
      
	   }
	   public function get_urun($Id) // ürün detayı icin 
	 {
		$query=$this->db->query('SELECT urunler.*,kategoriler.adi as katadi
		FROM urunler
		INNER JOIN kategoriler ON urunler.kategori_id=kategoriler.Id
		WHERE urunler.id='.$Id);
		
		return $query->result();
      
	   }
	  
}