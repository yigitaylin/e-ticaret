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
              <h3 class="card-title">Mesajlar  </h3>
				                    <div class="bs-component">
                      <div class="alert alert-dismissible alert-danger">
                        <button class="close" type="button" data-dismiss="alert">×</button><strong></strong> <?=$this->session->flashdata('mesaj')?>
                      </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      
                      <th>Adı Soyadı</th>
                      <th>Email</th>
                      <th>Telefon</th>
                      <th>Mesaj</th>
					  <th>Durum</th>
                      <th>Tarih</th>
                      <th>IP</th>
					  <th>detay</th>
					  <th>sil</th>
                     
               
		
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				   foreach($veriler as $rs)
				   {
					   ?>
                    <tr>
                     
                      <td><?=$rs->adsoy?></td>
                      <td><?=$rs->email?></td>
					  <td><?=$rs->tel?></td>
                      <td><?=$rs->mesaj?></td>
					  <td><?=$rs->durum?></td>
					  <td><?=$rs->tarih?></td>
					  <td><?=$rs->IP?></td>
					 <td><a class="btn btn-info" href="<?=base_url()?>admin/mesajlar/detay/<?=$rs->Id?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								DETAY
								</a></td>
								<td><a class="btn btn-danger" href="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>">
								<i class="glyphicon glyphicon-edit icon-white"></i>
								SİL
								</a></td>
					  
						
								
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