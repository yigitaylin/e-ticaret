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
				                <div class="col-md-6">
                               <h4>Urun Ekleme</h4>
				               <form role="form" action="<?=base_url()?>admin/urunler/guncelle/<?=$veriler[0]->Id?>" method="post">
							   <div class="form-group">
                                            <label>Urun Adi</label>
                                            <input type="text" class="form-control" name="adi" value="<?=$veriler[0]->adi?>" />
                                          
                                        </div>
                                        
										<div class="form-group">
                                         <label>Kategorisi</label>
										<div class="controls">
										<select id="selectError" name="kategori_id" data-rel="chosen">
										<option value="<?=$veriler[0]->kategori_id?>"><?=$veriler[0]->adi?></option>
										<?php
										foreach($kategoriler as $rs)
										{
									     ?>
										<option value="<?=$rs->Id?>"><?=$rs->adi?></option>
										<?php
										}
										?>
										
								        </select>
										</div>
											
                                        </div>
                                        <div class="form-group">
                                            <label>Alış Fiyatı</label>
                                            <input type="text"  class="form-control" name="afiyat" value="<?=$veriler[0]->afiyat?>" />
                                        </div>
										<div class="form-group">
                                            <label>Satış Fiyatı</label>
                                            <input type="text"  class="form-control" name="sfiyat" value="<?=$veriler[0]->sfiyat?>" />
                                        </div>
                                   
										
										
										<label class="control-label" for="selectError">Durumu</label>
										<div class="controls">
										<select id="selectError" name="durum" data-rel="chosen">
										<option><?=$veriler[0]->durum?></option>
										<option>Aktif</option>
										<option>onayli</option>
										<option>beklemede</option>
										
								        </select>
										</div>
										<script src="<?=base_url()?>ckeditor/ckeditor.js"></script><br>
										 <br>Açıklama : </br>
										  <textarea name="uzunaciklama" id="uzunaciklama" rows="10" cols="80">
										  <?=$veriler[0]->aciklama?>
				                          </textarea> 
										  <script>
                                       // Replace the <textarea id="editor1"> with a CKEditor
                                       // instance, using default configuration.
                                       CKEDITOR.replace( 'uzunaciklama' );
                                        </script>
										  <div class="form-group">
                                            <label>File input</label>
                                            <input type="file" />
                                        </div>
                                        
                                        <button type="submit" class="btn btn-warning">URUN GÜNCELLE</button>
										</div>
										
										</div>
				 
        
         
                 