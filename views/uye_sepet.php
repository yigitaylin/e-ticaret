<?php
	$this->load->view('_header');

?>
<div class="row" >

<?php
	$this->load->view('uye_sidebar');

?>
          
                              
  <div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
     <div class="columns large-8">
        <h5 class="page-title">SEPETTEKİ ÜRÜNLERİ</h5>
        <div class="row">
          <div class="columns large-6">
            <?php
			if($this->session->flashdata('mesaj'))
           {			
           ?>
<div class="alert alert-dismissible alert-danger">
                        <button class="close" type="button" data-dismiss="alert">×</button><strong></strong> <?=$this->session->flashdata('mesaj');?>
                      </div>
			
			<?php
		   }
		   ?>
		   
		     
                <table class="table">
                  <thead>
                    <tr>
                      <th>S.no</th>
                      <th>Ürün Adı</th>
                      <th>Miktar</th>
                      <th>Birim</th>
                      <th>Fiyat</th>
                      <th>Tutar</th>
                      <th>Sil</th>
               
		
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				  $sn=0;
				  $top=0;
				   foreach($veriler as $rs)
				   { $sn++;
				   $tutar=0;
				   $tutar=$rs->ursfiyat * $rs->miktar;
				   $top+= $tutar;
				?>
                    <tr>
                      <td><?=$sn?></td>
                      <td><?=$rs->uradi?></td>
                      <td><?=$rs->miktar?></td>
					  <td><?=$rs->urbirim?></td>
                      <td><?=$rs->ursfiyat?></td>
					  <td><?=$tutar?></td>
					  
					  <td class="center">
						<a class="btn btn-danger" href="<?=base_url()?>home/sepetsil/<?=$rs->Id?>" onclick="return confirm('Silmek İstediğinize Emin Misiniz?')">
								<i class="glyphicon glyphicon-trash icon-white"></i>
								Sil
								</a>
								</td>
					 
                    </tr>
					
					<?php
				   }
				   ?>
                  </tbody>
                </table>
				            TOPLAM TUTAR: <?=$top?><br>
							
							<?php
							if($sn>0)
							{
							?>
            <form action="<?=base_url()?>home/siparis_tamamla" method="post" class="form-signin">
			<H3>KARGO ADRES BİLGİLERİ</H3>
			<hr>
			Alıcı Adı Soyadı:<input type="text"  name="adsoy" value="<?=$musteri[0]->adsoy?>" /> <br>
			Adresi:<input type="text"   name="adres" value="<?=$musteri[0]->adres?>" /><br>
			Telefonu:<input type="text"  name="tel" value="<?=$musteri[0]->tel?>" /><br>
			Şehir:<input type="text"   name="sehir" value="<?=$musteri[0]->sehir?>" /><br> 
			TOPLAM TUTAR:<input type="text" value="<?=$top?>" name="tutar"/><br>
			<hr>
	      <H3>ÖDEME BİLGİLERİ</H3>
		  <hr>
			Kredikartı No:<input type="text"   name="kartno"/> <br>
			SKT AY:<input type="text"   style="width:100px" name="ay"/>
			SKT YIL:<input type="text" style="width:100px" name="yil"/>
			Güvenlik Kodu:<input type="text" style="width:100px" name="miktar"/> <br>
			TOPLAM TUTAR:<input type="text" style="width:100px"  value="<?=$top?>" name="gkodu"/><br>
			<hr>
			<button class="btn btn-inverse pull-left" type="submit">Alışverişi Tamamla</button>
							
						   </form>		
									
			         
		                <?php
						}
							?>
			
			
			
          </div>
         
          </div>
        </div>
       
      </div>
    </div>
  </div>

        <?php
	$this->load->view('_footer');

?>
         
                 