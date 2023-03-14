<?php
	$this->load->view('admin/_header');
	

?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    
                       
                    </div>
                </div>              
                 <div>
				 <ul class="breadcrumb">
				 <li>
				 <a href="<?=base_url()?>admin/home">Home</a>
				 </li>
				 <li>
				 <a href="<?=base_url()?>admin/kullanicilar">Kullanıcılar</a>
				 </li>
				 </ul>
				 </div>
				  
                                         <div class="col-md-6">
                               <h4>Kullanıcı Ekleme</h4>
				               <form role="form" action="<?=base_url()?>admin/kullanicilar/kaydet" method="post">
							   <div class="form-group">
                                            <label>Adı Soyadı</label>
                                            <input type="text" class="form-control" id= "adsoy" name="adsoy" placeholder="Kullanıcı Adsoy" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Email adresi</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email adresi giriniz" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Sifre</label>
                                            <input type="password"  class="form-control" id="sifre" name="sifre"   placeholder="PLease Enter Keyword" />
                                        </div>
										<label class="control-label" for="selectError">Yetkisi</label>
										<div class="controls">
										<select id="selectError" name="yetki" data-rel="chosen">
										<option>admin</option>
										<option>editor</option>
										<option>uye</option>
						
										</select>
										</div>
										
										<label class="control-label" for="selectError">Durumu</label>
										<div class="controls">
										<select id="selectError" name="durum" data-rel="chosen">
										<option>onayli</option>
										<option>beklemede</option>
										<option>engelli</option>
										
						
										</select>
										</div>
										
										
                                        
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-warning">KULLANICI EKLE</button>
										</form>
                                        </div>
                                        </div>
				
				               
										
                                        
                                        
                                       
                                        
            
								
                                        </div>
										
				 