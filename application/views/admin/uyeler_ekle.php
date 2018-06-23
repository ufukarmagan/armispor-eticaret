<?php
  $this->load->view('admin/_header');
  $this->load->view('admin/_sidebar');
?>

<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Üyeler</span>
				<i class="fa fa-angle-right"></i>
				<span>Üye Ekleme</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	
				<h3 id="forms-horizontal">Üye Ekleme Formu</h3>
				<form class="form-horizontal" method="post" action="<?=base_url()?>admin/uyeler/ekle_kaydet">
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label hor-form">Adı Soyadı</label>
					<div class="col-sm-10">
					  <input name="adsoy" type="text" class="form-control" id="inputEmail3" placeholder="Adı Soyadı">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label hor-form">Email</label>
					<div class="col-sm-10">
					  <input name="email" type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label hor-form">Password</label>
					<div class="col-sm-10">
					  <input name="sifre" type="password" class="form-control" id="inputPassword3" placeholder="Şifre">
					</div>
				  </div>
				   <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label hor-form">Telefon</label>
					<div class="col-sm-10">
					  <input name="tel" type="text" class="form-control" id="inputPassword3" placeholder="Telefon">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label hor-form">Adres</label>
					<div class="col-sm-10">
					  <input name="adres" type="text" class="form-control" id="inputPassword3" placeholder="Adres">
					</div>
				  </div>
				  <div class="form-group">
					  <label for="inputPassword3" class="col-sm-2 control-label hor-form">Şehir</label>
					  <div class="col-sm-10">
					  <select class="form-control" id="sel1" name="sehir">
						<option>Ankara</option>
						<option>Çorum</option>
						<option>İstanbul</option>
						<option>Karabük</option>
					  </select>
					  </div>
				  </div>
				  <div class="form-group">
					  <label for="inputPassword3" class="col-sm-2 control-label hor-form">Yetki</label>
					  <div class="col-sm-10">
					  <select class="form-control" id="sel1" name="yetki">
						<option>uye</option>
						<option>satici</option>
						<option>yorumcu</option>
						<option>yazar</option>
					  </select>
					  </div>
				  </div>
				   <div class="form-group">
					  <label for="inputPassword3" class="col-sm-2 control-label hor-form">Durum</label>
					  <div class="col-sm-10">
					  <select class="form-control" id="sel1" name="durum">
						<option>aktif</option>
						<option>pasif</option>
					  </select>
					  </div>
				  </div>
				  <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-primary">Üye Ekle</button>
					</div>
				  </div>
				</form>
			
	</div>
	
	<!--//faq-->
		<!---->
		<?php $this->load->view('admin/_footer');
		?>