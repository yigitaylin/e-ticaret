<?php
$this->load->view('_header');
?>

<div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-12 content ">
        <h5 class="page-title">Bize Yazın</h5>
		
		<?php
		if($this->session->flashdata("mesaj"))
		{
			?>
		<div class="alert alert-dismissible alert-danger">
                        <?=$this->session->flashdata("mesaj")?>
                      </div>
					  <?php
		}
		?>
		
        
        <div class="row contact-form">
          <div class="columns large-6">
            <form id="contact-form" method="post" action="<?=base_url()?>home/mesajkaydet">
              <input type="text" name="adsoy" placeholder="Adı Soyadı:">
              <input type="text" name="email" placeholder="Email:">
              <input type="text" name="tel" placeholder="Telefon:">
              <textarea  name="mesaj"></textarea>
              <input type="submit" class="button" name="submit" value="GONDER">
            </form>
          </div>
          <div class="columns large-4">
		   <h5 class="page-title">İletisim Bilgilerimiz</h5>
            <address>
			
			<?=$veri[0]->iletisim?>
			</address>
          </div>
        </div>
		
      </div>
      <div class="row collapse">
        <div class="columns large-12">
		
		</div>
      </div>
    </div>
	
  </div>
  
</div>
<?php
$this->load->view('_footer');
?>
