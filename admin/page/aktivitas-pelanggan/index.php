<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
switch ($_GET['act']) {
	case 'listcust':
		?>
		<div class="row">
            <section class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-users"></i>
                        <h3 class="box-title">Daftar Customers</h3>     
						<div class="box-tools pull-right">
                            <a href="<?php echo $c_url;?>/admin/ws-aktivitas-pelanggan/tambah" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Foto</a>
                        </div>						
                    </div>
                    <div class="box-body table-responsive">						<table id="tabel1" class="table table-bordered table-striped">							<thead>								<tr>									<th scope="col">Nama Pelanggan</th>									<th scope="col">Tipe Mesin</th>									<th scope="col">Lokasi</th>									<th scope="col">Tanggal Pemotretan</th>									<th scope="col">Action</th>								</tr>							</thead>							<tbody>							<?php 							$select123 = ("select * from aktivitas_pelanggan");							$query = mysql_query($select123);                            while ($d = mysql_fetch_array($query)) {								$nama_pelanggan=$d['nama'];								$tipemesin=$d['tipemesin'];								$lokasi=$d['lokasi'];								$tanggal_pelanggan=date('d/m/y', strtotime($d['tanggal']))                            ?>								<tr>									<td><?php echo $nama_pelanggan; ?></td>									<td><?php echo $tipemesin; ?></td>									<td><?php echo $lokasi; ?></td>									<td><?php echo $tanggal_pelanggan; ?></td>									<td>										<a class="btn btn-danger btn-sm" style="color:#fff;" href="<?php echo $c_url;?>/admin/ws-aktivitas-pelanggan/edit?id=<?php echo $d['id'];?>" title="Edit"> Edit <i class="fa fa-edit"></i></a>										<a class="btn btn-danger btn-sm" style="color:#fff;" href="<?php echo $c_url;?>/ajaxadmin-hapus_pelanggan?id=<?php echo $d['id'];?>" onclick='return confirm(\"Apakah anda yakin akan menghapusnya?\");' title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"> Hapus <i class="fa fa-trash-o"></i></a>									</td>								</tr>							<?php } ?>							</tbody>						</table>						
                    </div><!-- /.box-body -->            
            </section>
        </div>
		<?php
		break;
	case 'edit':
        $id = $_REQUEST['id'];
        $q = mysql_query("select * from aktivitas_pelanggan where id='$id'");
        $d = mysql_fetch_array($q);
        ?>
        <div class="row">
<section class="col-lg-12 connectedSortable">
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
                <form name="" action="../page/aktivitas-pelanggan/proses.php?act=update&id=<?php echo $d['id'];?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
                        <input type="text" class="form-control" name="nama" value="<?php if(isset($d['nama'])){echo $d['nama'];}?>"/>
						<input type="hidden" class="form-control" name="id" value="<?php if(isset($d['id'])){echo $d['id'];}?>"/>
                    </div> 
					<div class="form-group">
                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php if(isset($d['tanggal'])){$now=date('Y/m/d', strtotime($d['tanggal'])); echo date('Y/m/d', strtotime($now)); }?>"/>
                    </div>						
                    <div class="form-group">
                                    <div class="thumbnail">
                                        <?php if(isset($d['photosmall'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['photosmall'];?>" style="width:100%;height:auto;"/><?php } else {?>
										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <?php } ?><div class="caption">
                                            <span class="btn btn-default fileinput-button">
                                                <i class="glyphicon glyphicon-camera"></i>                              
                                                <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>" onchange="readURL(this);" >
                                            </span>
                                        </div>
                                    </div>
                    </div>	
					<div class="form-group">
						<textarea name="komentar" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 200px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
						<?php if(isset($d['komentar'])){echo $d['komentar'];}?>
						</textarea>					
                    </div> 					
					<div class="form-group">
                                    <select name="tipemesin" data-placeholder="Pilih Produk" autocomplete="on"  class="chosen-select form-control">
                                        <option value="<?php if(isset($d['id_produk'])){echo $d['id_produk'];}?>"><?php if(isset($d['tipemesin'])){echo $d['tipemesin'];}?></option>
                                        <?php                                   
                                        $result = mysql_query("select * from produk where category = 'Mesin Fotocopy Warna' or category = 'Mesin Fotocopy Hitam Putih' order by brand desc, id_produk desc");
                                        while ($kategori = mysql_fetch_array($result)) {
                                            echo "<option value='".$kategori['id_produk']."'>".ucwords($kategori['nama_produk'])."</option>";
                                        }
                                        ?>
                                    </select>
					</div>				
					
                    <div class="form-group">
                        <input type="text" class="form-control" name="lokasi" placeholder="Nama Kota"  value="<?php if(isset($d['lokasi'])){echo $d['lokasi'];}?>"/>
                    </div> 	
                    <div class="form-group">
                        <select name="rating" data-placeholder="Beri Rating" class="chosen-select form-control">
						<option value="<?php if(isset($d['rating'])){echo $d['rating'];}?>">Rating <?php if(isset($d['rating'])){echo $d['rating'];}?></option>
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
        </div>
        <?php break; case 'tambah': ?>

        <div class="row">
<section class="col-lg-12 connectedSortable">
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
                <form name="" action="../page/aktivitas-pelanggan/proses.php?act=post" method="post" enctype="multipart/form-data">
					<div class="form-group">
                        <input type="text" class="form-control" name="nama" value="<?php if(isset($d['nama'])){echo $d['nama'];}?>"/>
						<input type="hidden" class="form-control" name="id" value="<?php if(isset($d['id'])){echo $d['id'];}?>"/>
                    </div> 	
                    <div class="form-group">
                                    <div class="thumbnail">
                                        <?php if(isset($d['photosmall'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['photosmall'];?>" style="width:100%;height:auto;"/><?php } else {?>
										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <?php } ?><div class="caption">
                                            <span class="btn btn-default fileinput-button">
                                                <i class="glyphicon glyphicon-camera"></i>                              
                                                <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>" onchange="readURL(this);" >
                                            </span>
                                        </div>
                                    </div>
                    </div>	
					<div class="form-group">
						<textarea name="komentar" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 200px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
						<?php if(isset($d['komentar'])){echo $d['komentar'];}?>
						</textarea>					
                    </div> 					
					<div class="form-group">
                                    <select name="tipemesin" data-placeholder="Pilih Produk" autocomplete="on"  class="chosen-select form-control">
                                        <option value="<?php if(isset($d['id_produk'])){echo $d['id_produk'];}?>"><?php if(isset($d['tipemesin'])){echo $d['tipemesin'];}?></option>
                                        <?php                                   
                                        $result = mysql_query("select * from produk where category = 'Mesin Fotocopy Warna' or category = 'Mesin Fotocopy Hitam Putih' order by brand desc, id_produk desc");
                                        while ($kategori = mysql_fetch_array($result)) {
                                            echo "<option value='".$kategori['id_produk']."'>".ucwords($kategori['nama_produk'])."</option>";
                                        }
                                        ?>
                                    </select>
					</div>				
					
                    <div class="form-group">
                        <input type="text" class="form-control" name="lokasi" value="<?php if(isset($d['lokasi'])){echo $d['lokasi'];}?>"/>
                    </div> 	
                    <div class="form-group">
                        <select name="rating" data-placeholder="Beri Rating" class="chosen-select form-control">
						<option value="<?php if(isset($d['rating'])){echo $d['rating'];}?>">Rating <?php if(isset($d['rating'])){echo $d['rating'];}?></option>
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
        </div>		
<?php		
	break; default:
		# code...
		break;
}
		