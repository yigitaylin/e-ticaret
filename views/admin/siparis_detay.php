<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_sidebar');
	

?>
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
            <p>A free and modular admin template</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Dashboard</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
		
		<h3>Sipariş Detay Bilgileri </h3>
		<?php
		if($this->session->flashdata('mesaj'))
        {
			?>
					<div class="alert alert-dismissible alert-danger">
                        <button class="close" type="button" data-dismiss="alert">×</button><strong></strong> <?=$this->session->flashdata('mesaj')?>
                      </div>
					  
		<?php
		}
		?>
		<form role="form" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparis[0]->Id?>" method="post">

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
					  <td> <input type="text" name="email" value="<?=$siparis[0]->kargofirma?>"  /></td>
					</tr>
					<tr>
                      <th>Kargo no:</th>
					  <td><input type="text" name="email" value="<?=$siparis[0]->kargono?>" /></td>
					</tr>
					<tr>
                      <th>Durumu:</th>
					  <td><select name="durum">
					  <option> <?=$siparis[0]->durum?></option>
					  <option>Onaylandı </option>
					  <option>Kargoda</option>
					  <option>Tamamlandı</option>
					  
					  </td>
					</tr>
					<tr>
                      <th>Sipariş Notu:</th>
					  <td> <textarea name="admin_aciklama" col="20"  ></textarea></td>
					</tr>
					<tr>
                      <th></th>
					  <td><button type="submit" class="btn btn-warning">GUNCELLE</button></td>
					</tr>
					
					
               
		 </tr>
                  </thead>
                 
                </table>
			</form>
			
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