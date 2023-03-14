<?php
	$this->load->view('_header');

?>
<div class="row" >

<?php
	$this->load->view('uye_sidebar');

?>
 <div align="center" class="alert alert-danger alert-dismissable">
 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
 <?=$this->session->flashdata('mesaj');?>
</div>
<?php
?>	
  <div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
     <div class="columns large-8">
        <h1 class="page-title">Üye Bilgilerim</h1>
        <div class="row">
          <div class="columns large-6">
            <div class="service-box-page">
              <form role="form" action="<?=base_url()?>home/uyeguncelle?>" method="post">
							   <div class="form-group">
                                             <label>Adı Soyadı</label>
                                       <input type="text"  class="form-control" name="adsoy" placeholder="Kullanıcı Adsoy" value ="<?=$veri2[0]->adsoy?>" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Email adresi</label>
                                            <input type="email"  class="form-control" name="email" placeholder="Email adresi giriniz" value="<?=$veri2[0]->email?>" disabled />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Sifre</label>
                                            <input type="password"class="form-control" name="sifre" placeholder="PLease Enter Keyword" value="<?=$veri2[0]->sifre?>" />
                                        </div>
										
						             <button type="submit" class="btn btn-warning">GUNCELLE</button>
										</form>
            </div>
          </div>
         
          </div>
        </div>
       
      </div>
    </div>
  </div>

        <?php
	$this->load->view('_footer');

?>
         
                 