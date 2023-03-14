<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Panel Giriş Sayfası</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Saglikli Yasam</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="<?=base_url()?>admin/login/giris_yap" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>GİRİŞ YAP</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" name="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">SİFRE</label>
            <input class="form-control" type="password" name="sifre" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Beni Hatırla</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Şifremi Unuttum ?</a></p>
            </div>
          </div>
          <input type="submit" value="Giris Yap"/>
        </form>
	<?php 
		if($this->session->flashdata("uyarı"))
		{
			?>
		<div class="alert alert-dismissible alert-danger">
                        <button class="close" type="button" data-dismiss="alert">×</button><strong></strong> <?=$this->session->flashdata('uyarı')?>
                      </div>
		<?php }?>
        <form class="forget-form" action="<?=base_url()?>admin/login/giris_yap" method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Şifremi unuttum ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/plugins/pace.min.js"></script>
  <script src="js/main.js"></script>
</html>