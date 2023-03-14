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
				 <a href="<?=base_url()?>admin/urunler">Urunler</a>
				 </li>
				 </ul>
				 </div>
				  
                                         <div class="col-md-5">
                               <h4>Urun Ekleme</h4>
				               <form role="form" action="<?=base_url()?>admin/urunler/kaydet" method="post">
							   <div class="form-group">
                                            <label>Urun adi</label>
                                            <input type="text" class="form-control" name="adi" placeholder="Urun adi" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Turu</label>
                                            <input type="text" class="form-control" name="turu" placeholder="Urunun turunu giriniz" />
                                          
                                        </div>
                                        <div class="form-group">
                                            <label>Alış Fiyatı</label>
                                            <input type="text"  class="form-control" name="afiyat"  placeholder="Alış fiyatını giriniz." />
                                        </div>
										<div class="form-group">
                                            <label>Satış Fiyatı</label>
                                            <input type="text"  class="form-control" name="sfiyat"  placeholder="Satış fiyatını giriniz." />
                                        </div>
										<div class="form-group">
										<label class="control-label" for="selectError">Detay</label>
									         <script src="<?=base_url()?>/ckeditor/ckeditor.js"></script>
                                           <textarea name="detay"  rows="10" cols="80">
                                    
                                </textarea>
								<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'detay' );
            </script>
                                          
                                       
										</div>
										
									  
										
										<label class="control-label" for="selectError">Durumu</label>
										<div class="controls">
										<select id="selectError" name="durum" data-rel="chosen">
										<option>onayli</option>
										<option>beklemede</option>
										
										
						
										</select>
										</div>
										
										
                                        
                                        <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-warning">URUN EKLE</button>
										</form>
                                        </div>
                                        </div>
				
				               
										
                                        
                                        
                                       
                                        
            
								
                                        </div>
										
				 