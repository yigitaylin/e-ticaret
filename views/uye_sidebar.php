<?php

if(!$this->session->userdata('uye_session'))
		{
			 $this->session->set_flashdata("mesaj","Giris yapmadiniz  !");
			 redirect(base_url()."home/uyelik");
		}

?>
 <div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-4 content sidebar">
        <h1>Üye İşlemleri</h1>
        <ul>
           <li class="bullet"><a href="<?=base_url()?>home/uyepanel">Profil Bilgilerim</a></li>
           <li class="bullet"><a href="<?=base_url()?>home/siparislerim">Siparişlerim</a></li>
          <li class="bullet"><a href="<?=base_url()?>home/sepetim">Sepetim</a></li>
           <li class="bullet"><a href="#">Yorumlarım</a></li>
           <li class="bullet"><a href="#">Favori Urunler</a></li>
          <li class="bullet"><a href="<?=base_url()?>home/cikis_yap">ÇIKIŞ</a></li>
        </ul>
      </div>
      
    </div>
  </div>
</div>