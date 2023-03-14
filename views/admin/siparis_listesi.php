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
		<h3>Yeni Siparişler</h3>
		
		<table class="table">
                  <thead>
                    <tr>
                      <th>S.no</th>
                      <th>Tarih</th>
                      <th>Tutar</th>
                      <th>Durum</th>
                      <th>Detay</th>
                     
               
		 </tr>
                  </thead>
                  <tbody>
				  <?php
				  $sn=0;
				  $top=0;
				   foreach($veriler as $rs)
				   { $sn++;
				   $tutar=0;
				    $top+= $tutar;
				   
				?>
                    <tr>
                      <td><?=$sn?></td>
                      <td><?=$rs->tarih?></td>
                      <td><?=$rs->tutar?></td>
					  <td><?=$rs->durum?></td>
                     
					  
					  <td class="center">
						<a class="btn btn-danger" href="<?=base_url()?>admin/Siparisler/siparis_detay/<?=$rs->Id?>" >
								<i class="glyphicon glyphicon-trash icon-white"></i>
							Sipariş Detay
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