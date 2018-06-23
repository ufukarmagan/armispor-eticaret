<?php
  $this->load->view('admin/_header');
  $this->load->view('admin/_sidebar');
?>

<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Uyeler</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	
			<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"> Üyeler Listesi</h3>
			  <a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-info btn-lg">
               <span class="glyphicon glyphicon-plus"></span> Üye Ekle 
              </a>
			  <?=$this->session->flashdata("mesaj","Üye kaydı gerçekleştirildi")?>
			</div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
			  
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Adı Soyadı</th>
                  <th>Email</th>
                  <th>Telefon</th>
				  <th>Şehir</th>
				  <th>Yetki</th>
				  <th>Durum</th>
				  <th>Düzenle</th>
				  <th>Sil</th>
				 </tr>
				 <?php
				    $sno=0;
				    foreach ($veriler as $rs)
					{
						$sno++;
				 ?>
				 <tr>
                  <th style="width: 10px"><?=$sno?></td>
                  <td><?=$rs->adsoy?></td>
                  <td><?=$rs->email?></td>
                  <td><?=$rs->tel?></td>
				  <td><?=$rs->sehir?></td>
				  <td><?=$rs->yetki?></td>
				  <td><?=$rs->durum?></td>
				  <td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>">Düzenle </a></td>
				  <td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>">Sil </a></td>
				 </tr>
				 <?php }?>
				
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
	       </div>
	
	<!--//faq-->
		<!---->
		<?php $this->load->view('admin/_footer');
		?>