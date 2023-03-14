<?php
$this->load->view('_header');
?>
<div class="row">	
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
		
			
			 
			 <div class="slider">
  
            <div class="flexslider">
              <ul class="slides">
			  
			  <li><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" /> </li>
                <?php
		
		foreach($resimler as $rs)
		{
			?>
		<li><img src="<?=base_url()?>uploads/<?=$rs->resim?>" ></a><br></li>
       <?php
		}
		?>
              </ul>
            </div>
          </div>
         <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script src="<?=base_url()?>assets/js/hoverIntent.js"></script>
<script src="<?=base_url()?>assets/js/superfish.js"></script>
<script src="<?=base_url()?>assets/js/slider/jquery.flexslider.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrollToTop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
    $('.flexslider').flexslider();
    $('.flexcar').flexslider();
});
</script>

					<div class="span9">
						<h2><?=$veri[0]->adi?></h2>
						<h3><?=$veri[0]->aciklama?><h3>
					
							<div class="span5">
								<address>
								   <strong>Kategorisi:</strong><span><?=$veri[0]->katadi?></span><br>
								   <strong>Fiyat:</strong><span><?=$veri[0]->sfiyat?>TL</span><br>
									<strong>Birimi:</strong> <span><?=$veri[0]->birimi?></span><br>
									<strong>Kodu:</strong> <span><?=$veri[0]->kodu?></span><br> 
									</address>		
							<form action="<?=base_url()?>home/sepete_ekle/<?=$veri[0]->Id?>" method="post" class="form-signin">
							<strong>Adet:</strong><input type="text" style="width:100px;"  value="1" name="miktar"/> <?=$veri[0]->birimi?>
									<button class="btn btn-inverse pull-left" type="submit">SEPETE EKLE</button>
							
						   </form>		
									
									
															
								
							</div>
												
						
							</div>	
                <div class="row">
					<?=$veri[0]->detay?>
					
					</div> 							
							
						
					</div>
				
		
			<?php
$this->load->view('_footer');
?>