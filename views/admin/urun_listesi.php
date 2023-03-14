<div class="content-wrapper">
        
        <div class="row">
		    <div class="card">
              <h3 class="card-title">Urunler <a class="btn btn-success"href="<?=base_url()?>admin/urunler/ekle"><i class="glyphicon glyphicon-plus"></i>
				Yeni Urun Ekle</a> </h3>
				                    <div class="bs-component">
                      <div class="alert alert-dismissible alert-danger">
                        <button class="close" type="button" data-dismiss="alert">×</button><strong></strong> <?=$this->session->flashdata('mesaj');?>
                      </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kodu</th>
                      <th>Adı</th>
                      <th>Kategorisi</th>
                      <th>Miktar</th>
                      <th>Birimi</th>
                      <th>S.fiyat</th>
                      <th>Resim</th>
					  <th>Galeri</th>
					  <th>Durum</th>
                     
					  
               
		
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				   foreach($veriler as $rs)
				   {
					   ?>
                    <tr>
                      <td><?=$rs->kodu?></td>
                      <td><?=$rs->adi?></td>
                      <td><?=$rs->katadi?></td>
					  <td><?=$rs->miktar?></td>
                      <td><?=$rs->sfiyat?></td>
					  <td><?=$rs->birimi?></td>
					  <td>
					  <?php if($rs->resim)
					  {?>
				 <a href="<?=base_url()?>admin/urunler/resimekle/<?=$rs->Id?>">
					  <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height= "40" />
					  
					  <?php } else { ?>
					  
					  <a class="btn btn-info" href="<?=base_url()?>admin/urunler/resimekle/<?=$rs->Id?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								Resim Ekle
								</a>
					  
					  <?php } ?>
					  
					  </td>
					  
						  <td> <a href="<?=base_url()?>admin/urunler/galeriekle/<?=$rs->Id?> "a class="btn btn-info">
					 Galeri Ekle</a> </td>
					   <td><?=$rs->durum?></td>
					  <td class="center">
						
								<a class="btn btn-info" href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								Duzenle
								</a>
								<a class="btn btn-danger" href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>" onclick="return confirm('Silmek İstediğinize Emin Misiniz?')">
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
              </div>
            </div>

        </div>
      </div>
	  </div>