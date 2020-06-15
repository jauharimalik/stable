<div class="row">
    <div class="col-md-12">
        <div class="box box-success">
            <!-- New Post -->
            <div class="box-header">
                <i class="fa fa-dashboard"></i><h3 class="box-title">Dashboard<small> administrator</small></h3>              
            </div><!-- /.box-header -->
            <div class="box-body">
            	<p>Hello <?php echo $_SESSION['fullname']?>, selamat datang dihalaman administrator <?php echo "$site_name - $page_title2";?></p>
            </div><!-- /.box-body -->
        </div>
    </div><!-- /.col-->
</div><!-- ./row -->
<div class="row">
	<section class="col-lg-6 connectedSortable">
		<!-- quick post widget -->
        <div class="box">
            <div class="box-header">
                <i class="fa fa-edit"></i>
                <h3 class="box-title">Aktivitas Pelanggan</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /. tools -->
            </div>
            <div class="box-body">
                <form name="" action="page/dashboard/proses.php?page=aktivitaspelanggan&act=post" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama Pelanggan"/>
                    </div> 
                    <div class="form-group">
                                    <div class="thumbnail">
                                        <img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <div class="caption">
                                            <span class="btn btn-default fileinput-button">
                                                <i class="glyphicon glyphicon-camera"></i>                              
                                                <input type="file" id="fileupload" name="fileUpload" onchange="readURL(this);" >
                                            </span>
                                        </div>
                                    </div>
                    </div>	
					<div class="form-group">
						<textarea name="komentar" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 200px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>					
                    </div> 					
					<div class="form-group">
                                    <select name="tipemesin" data-placeholder="Pilih Produk" autocomplete="on"  class="chosen-select form-control">
                                        <option value=""></option>
                                        <?php                                   
                                        $result = mysql_query("select * from produk where category = 'Mesin Fotocopy Warna' or category = 'Mesin Fotocopy Hitam Putih' order by brand desc, id_produk desc");
                                        while ($kategori = mysql_fetch_array($result)) {
                                            echo "<option value='".$kategori['id_produk']."'>".ucwords($kategori['nama_produk'])."</option>";
                                        }
                                        ?>
                                    </select>
					</div>				
                    <div class="form-group">
                        <input type="text" class="form-control" name="lokasi" placeholder="Nama Kota"/>
                    </div> 			
                    <div class="form-group">
                        <select name="rating" data-placeholder="Beri Rating" class="chosen-select form-control">
						<?php  $j=5;for($i=$j;$i>=1;$i--){ echo "<option value='".$i."'> Rating ".$i."</option>";} ?>
						</select>
                    </div> 
					<div class="box-footer clearfix">
                        <button class="pull-right btn btn-default">Post <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
	</section>

<section class="col-lg-6 connectedSortable">
        <!-- quick post widget -->
        <div class="box">
            <div class="box-header">
                <i class="fa fa-"></i>
                <h3 class="box-title">Daftar Antrian Pesanan</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /. tools -->
            </div>
            <div class="box-body">
                <table class="table table-hover">                    
                    <tr style="background-color: #F3F4F5">                        
                        <th>Tgl. Order</th>
                        <th>Id Pemesanan</th>
                        <th>Status</th>                       
                    </tr>
                    <?php
                    $d = mysql_query("select tgl_pesan, order_id, status, dilihat from orders where dilihat='0'");
                    if (mysql_num_rows($d)>0) {
                        while ($data = mysql_fetch_array($d)) {
                            if ($data['status']=="Menunggu") {
                                $label = "<span class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> ";
                            } elseif ($data['status']=="Proses") {
                                $label = "<span class=\"label label-primary\"><i class=\"fa fa-spinner\"></i> ";
                            } elseif ($data['status']=="Dikirim") {
                                $label = "<span class=\"label label-success\"><i class=\"fa fa-check\"></i> ";
                            } else {
                                $label = "<span class=\"label label-danger\"><i class=\"fa fa-times\"></i> ";
                            }
                            if ($data['dilihat']==0) {
                                $bold = "font-weight:bold";
                            } else {
                                $bold = "font-weight:normal";
                            }
                    ?>
                    <tr>
                        <td style="<?php echo $bold ?>"><?php echo date('d/m/Y', strtotime($data['tgl_pesan'])); ?></td>
                        <td style="<?php echo $bold ?>"><?php echo $data['order_id']; ?></td>
                        <td style="<?php echo $bold ?>"><?php echo $label.$data['status']; ?></span></td>
                    </tr>  
                    <?php
                        }
                    } else {
                    ?>
                    <tr>
                        <td colspan="7">Tidak ada daftar pemesanan</td>
                    </tr>
                    <?php
                    }
                    ?>                        
                </table>
            </div>
        </div>
    </section>
</div>