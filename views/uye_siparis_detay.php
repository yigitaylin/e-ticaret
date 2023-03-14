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
        <h5 class="page-title">YAPILAN SİPARİŞ BİLGİLERİ</h5>
        <div class="row">
          <div class="columns large-6">
            
			 <table class="table">
                  <thead>
				  
                    <tr>
                      <th>Adı Soyadı:</th>
					  <td><?=$siparis[0]->adsoy?></td>
					</tr>
					<tr>
                      <th>Adres:</th>
					  <td><?=$siparis[0]->adres?></td>
					</tr>
					<tr>
                      <th>Telefon:</th>
					  <td><?=$siparis[0]->tel?></td>
					</tr>
					<tr>
                      <th>Sehir:</th>
					  <td><?=$siparis[0]->sehir?></td>
					</tr>
					<tr>
                      <th>Kargo Firma:</th>
					  <td><?=$siparis[0]->kargofirma?></td>
					</tr>
					<tr>
                      <th>Kargo no:</th>
					  <td><?=$siparis[0]->kargono?></td>
					</tr>
					
					
               
		 </tr>
                  </thead>
                 
                </table>
			
			
			<h3> Siparişe ait ürünler </h3>
			
			
			<table class="table">
                  <thead>
                    <tr>
					<th>S.no</th>
                      <th>Ürün Adı</th>
                      <th>Miktar</th>
					  <th>Fiyat</th>
                      <th>Birim</th>
                      <th>Tutar</th>
                      </tr>
                     
               </thead>
                  <tbody>
		
                   <?php
				  $sn=0;
				  $top=0;
				   foreach($urunler as $rs)
				   { $sn++;
				   $tutar=0;
				   
				?>
                    <tr>
                      <td><?=$sn?></td>
                      <td><?=$rs->adi?></td>
                      <td><?=$rs->miktar?></td>
					  <td><?=$rs->fiyat?></td>
					  <td><?=$rs->birim?></td>
					   <td><?=$rs->tutar?></td>
                     
					  </tr> 
					 
					 
                   
					
					<?php
				   }
				   ?>
                  </tbody>
                </table>
			
			
			
			
			
          </div>
         
          </div>
        </div>
       
      </div>
    </div>
  </div>

        <?php
	$this->load->view('_footer');

?>
         
                 