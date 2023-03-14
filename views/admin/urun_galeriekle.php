<?php 
 $this->load->view('admin/_header');
	      $this->load->view('admin/_sidebar');
		 $this->load->view('admin/_footer');
		 ?>
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Resim Ekleme Formu</h1>
			<form action="<?=base_url()?>admin/urunler/galeri_upload/<?=$id?>" method="post" enctype="multipart/form-data">
			
			<?php //echo form_open_multipart(base_url().'admin/upload/urunler/resim_upload');?>

           <input type="file" name="userfile" size="20" onChange="this.form.submit();" /><br /><br />
          
          </form>
		  <div class="row">
		  <?php foreach($veriler as $rs)
					 {
						 ?>
						   <div class="thumbnail-block">
          
            <a class="thumbnail" href="#"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="image"></a>
            <div class= "mask">
			<div class="tools tools-bottom">
			<a href="#"><i class="fa fa-link"></i></a>
			<a href="#"><i class="fa fa-pencil"></i></a>
			<a href="<?=base_url()?>admin/urunler/resimsil/<?=$id?><?=$rs->urun_id?>"><i class="fa fa-times"></i></a>
			</div>
			</div>
			
			
			</div>
         
        </div>
        		 
						 
						 <?php
								}
								?>
							
            
			</div>
          </div>
          <div>
            
          </div>
        </div>
        <div class="row">

        </div>
      </div>