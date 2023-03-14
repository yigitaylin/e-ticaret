<div class="tagline">
  <div class="row">
    <div class="columns large-12">
      <div class="center">
        <h1>SİTEMİZE HOŞGELDİNİZ</h1>
        <p>Sağlıklı bir yaşam için sağlıklı beslenmek temel şarttır.Biz de sağlınız için en özel ürünlerimizi size sunduk. </p>
      </div>
    </div>
  </div>
</div>
<div class="row content-wrapper">
  <div class="columns large-12">
    <div class="row wrapper">
      <div class="columns large-12 content">
        <h1 class="page-title">ÜRÜNLERİMİZ</h1>
        <h2 class="sub-title">En çok tercih edilen ürünlerimiz</h2>
		
		
        <div class="thumbnail-block">
          <ul class="large-block-grid-4">
		  
		<?php
		
		foreach($urun as $rs)
		{
			?>
		
		  
            <li><a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""></a><?=$rs->adi?><br><?=$rs->aciklama?></li>

			<?php
		}
		?>
           </ul>
        </div>
		
   
        
      </div>
    </div>
  </div>
</div>




