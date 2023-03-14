<?php
$this->load->view('_header');
?>
<div class="col-md-6">
					<section class="header_text sub">
			
				<strong><h6>Üye Login İşlemleri</h6></strong>
			</section>	
<div id="login" class="tab-pane active">
<?php
if($this->session->flashdata('mesaj'))
?>	
	</div>	
			<section class="main-content">				
				<div class="row">
					<div class="span2">					
						<h3 class="title"><span class="text"><strong>Giriş</strong> Formu</span></h3>
						<form action="<?=base_url()?>home/uyegiris_yap" method="post">
							<input type="hidden" name="next" value="/">
							
								<div class="form-group">
									<label class="form-label">E-mail</label>
									<div class="controls">
										<input type="text" style="width:200px;"  placeholder="E mail" id="email" name="email" required=""/>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Sifre</label>
									<div class="controls">
										<input type="password" style="width:200px;" placeholder="Sifreniz" id="sifre" name="sifre" required=""/>
									</div>
								</div>
								<button class="btn btn-inverse pull-left" type="submit">GİRİŞ YAP</button>
							
						</form>				
					</div>
					
				</div>
			</section>			
		
				</div>
				<?php
$this->load->view('_footer');
?>