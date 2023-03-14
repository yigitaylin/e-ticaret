<?php
	$this->load->view('admin/_header');
	
	

?>
<div id="page-wrapper" >
            <div id="page-inner">
                            
                 <div>
				 <ul class="breadcrumb">
				 <li>
				 <a href="<?=base_url()?>admin/home">Home</a>
				 </li>
				 <li>
				 <a href="<?=base_url()?>admin/kullanicilar">Kullanicilar</a>
				 </li>
				 </ul>
				 </div>
				  
                               <div class="col-md-5">
                               <h4>AYARLAR </h4>
				               <form role="form" action="<?=base_url()?>admin/home/ayarguncelle/<?=$veriler[0]->Id?>" method="post">
							   <div class="form-group">
                                            <label>Site Adi</label>
                                            <input type="text" class="form-control" name="adi"  value="<?=$veriler[0]->adi?>" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" class="form-control" name="keywords"  value="<?=$veriler[0]->keywords?>" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Açıklama</label>
                                            <input type="text"  class="form-control" name="aciklama"  value="<?=$veriler[0]->aciklama?>" />
                                        </div>
										<div class="form-group">
                                            <label>Name</label>
                                            <input type="text"  class="form-control" name="name"   value="<?=$veriler[0]->name?>" />
                                        </div>
										<div class="form-group">
                                            <label>smtpserver</label>
                                            <input type="text"  class="form-control" name="smtpserver"  value="<?=$veriler[0]->smtpserver?>" />
                                        </div>
										<div class="form-group">
                                            <label>smtpemail</label>
                                            <input type="text"  class="form-control" name="smtpemail"  value="<?=$veriler[0]->smtpemail?>" />
                                        </div>
										<div class="form-group">
                                            <label>smtpsifre</label>
                                            <input type="text"  class="form-control" name="smtpsifre"   value="<?=$veriler[0]->smtpsifre?>" />
                                        </div>
										<div class="form-group">
                                            <label for="exampleInputPassword1">smtpport</label>
                                            <input type="text"  class="form-control" name="smtpport"   value="<?=$veriler[0]->smtpport?>" />
                                        </div>
										<div class="form-group">
                                            <label>adres</label>
                                            <input type="text"  class="form-control" name="adres"   value="<?=$veriler[0]->adres?>" />
                                        </div>
										<div class="form-group">
                                            <label>tel</label>
                                            <input type="text"  class="form-control" name="tel"   value="<?=$veriler[0]->tel?>" />
                                        </div>
										<div class="form-group">
                                            <label>fax</label>
                                            <input type="text"  class="form-control" name="fax"  value="<?=$veriler[0]->fax?>" />
                                        </div>
										<div class="form-group">
                                            <label>sehir</label>
                                            <input type="text"  class="form-control" name="sehir"   value="<?=$veriler[0]->sehir?>" />
                                        </div>
										<div class="form-group">
                                            <label>email</label>
                                            <input type="text"  class="form-control" name="email"   value="<?=$veriler[0]->email?>" />
                                        </div>
										<div class="form-group">
                                            <label>Hakkımızda</label>
                                            <input type="text"  class="form-control" name="hakkimizda"   value="<?=$veriler[0]->hakkimizda?>" />
                                        </div>
										
										
                                   <div class="form-group">
										<label class="control-label" for="selectError">İletisim</label>
									         <script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
                                           <textarea name="iletisim"  rows="10" cols="80">
                                     <?=$veriler[0]->iletisim?>
                                       </textarea>
								       <script>
                                  // Replace the <textarea id="editor1"> with a CKEditor
                                   // instance, using default configuration.
                                   CKEDITOR.replace( 'iletisim' );
                                       </script>
                                          
                                       
										</div>
										
									  
										
			
										
										<button type="submit" class="btn btn-warning">Guncelle</button>
										</form>
                                        </div>
                                        </div>
				                       </div>
				               
                                        
                                        
                                        
                                        
										
                                        
                                        
                                       
                                        
            
								
                                      
										
				 