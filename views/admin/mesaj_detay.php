<?php
	$this->load->view('admin/_header');
	$this->load->view('admin/_sidebar');
	
	

?>
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> SAĞLIKLI YAŞAM</h1>
            <p>Sağlıklı yaşam için sağlıklı besinler </p>
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
              <h3 class="card-title">Mesaj Detay Bilgileri <a href="<?=base_url()?>admin/mesajlar/detay"><i class="glyphicon glyphicon-plus"></i></a></h3>
				                    <div class="bs-component">
                     
              <div class="table-responsive">
                <table class="table">
               
                       <tr>
                      
                      <th>Adı Soyadı</th><td><?=$veriler[0]->adsoy?></td>
					   </tr> 
                      
                   
					 <tr>
					<th>Email</th><td><?=$veriler[0]->email?></td>
				
					</tr>
					<tr>
					<th>Telefon</th><td><?=$veriler[0]->tel?></td>
				    </tr>
					
					<tr>
                      <th>Mesaj</th> <td><?=$veriler[0]->mesaj?></td>
					   </tr>
					  
					  <tr>
					  <th>Durum</th> <td><?=$veriler[0]->durum?></td>
					   </tr>
					 <tr>
					  <th>Tarih</th> <td><?=$veriler[0]->tarih?></td>
					  </tr>
					  <tr>
					   <th>IP</th><td><?=$veriler[0]->IP?></td>
					  </tr>
					   <tr>
					   <th>Notunuz</th><td>
					   <form action="<?=base_url()?>admin/mesajlar/guncelle/<?=$veriler[0]->Id?>" method="post">
					   
					   <textarea name="adminnotu"  rows="10" cols="80"<?=$veriler[0]->adminnotu?> >
                                   
                                       </textarea>
					    <button type="submit" class="btn btn-warning">GUNCELLE</button>
					   
					   </td>
					  </tr>
					  
					  
                 
              
				  
					 
            
					
					
                </table>
              </div>
            </div>

        </div>
      </div>