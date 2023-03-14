<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title><?=$veri[0]->adi?></title>
<meta charset="utf-8">
<meta name="keywords" content="<?=$veri[0]->keywords?>">
<meta name="description" content="<?=$veri[0]->aciklama?>">

<link rel="stylesheet" href="<?=base_url()?>assets/css/foundation.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/superfish.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/stylesheet.css">
<link rel="stylesheet" href="<?=base_url()?>assets/js/slider/flexslider.css">
<link rel="stylesheet" href="<?=base_url()?>assets/js/slider/flexcar.css">
<link href='http://fonts.googleapis.com/css?family=Quando' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,300' rel='stylesheet' type='text/css'>
<script src="js/vendor/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
</head>
<body>
<div class="header">
  <div class="row">
    <div class="columns large-14">
      <div class="row header-inner">
        <div class="columns large-4 small-5"> <a href="index.html"><img src="<?=base_url()?>assets/images/logoyenii.png" alt="" class="logo"></a> </div>
        <div class="columns large-8">
          <nav>
            <section>
              <ul class="sf-menu large-12">
                <li class="active"><a href="<?=base_url()?>home">Anasayfa</a></li>
         
                <li><a href="<?=base_url()?>home/iletisim">İletisim</a></li>
				<li><a href="<?=base_url()?>home/sepetim">Sepetim</a></li>
				
				<?php
				
			if(!$this->session->uye_session)
		{
			?>
		<li><a href="<?=base_url()?>home/uyelik">UYELİK</a><br></li>
       <?php
		} else {
		?>
		<li><a href="<?=base_url()?>home/uyepanel"><?=$this->session->uye_session["adsoy"]?>
		</a></li>
		<?php
		}
		?>
                   
              </ul>
            </section>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="columns large-12 small-top-menu">
      <div class="row">
        <div class="columns large-12 plr0 top-nav">
          <form name="dropdown" class="dropdown" action="#">
            <nav>
              <section>
                <select name="selected" id="target" accesskey="E" onChange="goToNewPage(document.dropdown.selected)">
                  <option value="index.html">home</option>
                  <option value="about.html">about us</option>
                  <option value="blog.html">blog</option>
                  <option value="gallery.html">gallery</option>
                  <option value="services.html">services</option>
                  <option value="<?=base_url()?>home/iletisim">iletisim</option>
                </select>
              </section>
            </nav>
          </form>
        </div>
      </div>
    </div>
  </div>