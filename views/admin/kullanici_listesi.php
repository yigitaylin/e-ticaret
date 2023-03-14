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
		    <div class="card">
              <h3 class="card-title">Kullanıcılar <a class="btn btn-success"href="<?=base_url()?>admin/kullanicilar/ekle"><i class="glyphicon glyphicon-plus"></i>
				Yeni Kullanici Ekle</a> </h3>
				                    <div class="bs-component">
                      <div class="alert alert-dismissible alert-danger">
                        <button class="close" type="button" data-dismiss="alert">×</button><strong></strong> <?=$this->session->flashdata('mesaj')?>
                      </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Adı Soyadı</th>
                      <th>Email</th>
                      <th>Sifre</th>
                      <th>Yetki</th>
                      <th>Durum</th>
                      <th>Tarih</th>
					  <th>İşlemler</th>
               
		
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				   foreach($veriler as $rs)
				   {
					   ?>
                    <tr>
                      <td><?=$rs->id?></td>
                      <td><?=$rs->adsoy?></td>
                      <td><?=$rs->email?></td>
					  <td><?=$rs->sifre?></td>
                      <td><?=$rs->yetki?></td>
					  <td><?=$rs->durum?></td>
					  <td><?=$rs->tarih?></td>
					  <td class="center">
						
								<a class="btn btn-info" href="<?=base_url()?>admin/kullanicilar/duzenle/<?=$rs->id?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								Duzenle
								</a>
								<a class="btn btn-danger" href="<?=base_url()?>admin/kullanicilar/sil/<?=$rs->id?>" onclick="return confirm('Silmek İstediğinize Emin Misiniz?')">
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