 <?php 
 $this->load->view('admin/_header');
	      $this->load->view('admin/_sidebar');
		 $this->load->view('admin/_footer');
		 ?>
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Resim Ekleme Formu</h1>
			<form action="<?=base_url()?>admin/urunler/resim_upload/<?=$id?>" method="post" enctype="multipart/form-data">
			
			<?php //echo form_open_multipart(base_url().'admin/upload/urunler/resim_upload');?>

           <input type="file" name="userfile" size="20" onChange="this.form.submit();" /><br /><br />
       
          </form>
            
          </div>
          <div>
            
          </div>
        </div>
        <div class="row">

        </div>
      </div>