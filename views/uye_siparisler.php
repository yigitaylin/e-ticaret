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
        <h5 class="page-title">YAPILAN SİPARİŞLER</h5>
        <div class="row">
          <div class="columns large-6">
            
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
						<a class="btn btn-danger" href="<?=base_url()?>home/siparis_detay/<?=$rs->Id?>" >
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
        </div>
       
      </div>
    </div>
  </div>

        <?php
	$this->load->view('_footer');

?>
         
                 