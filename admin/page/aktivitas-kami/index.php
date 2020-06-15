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
                        <h3 class="box-title">Daftar Foto</h3>     
						<div class="box-tools pull-right">
                            <a href="<?php echo $c_url;?>/admin/ws-aktivitas-kami/tambah" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Tambah Foto</a>
                        </div>						
                    </div>
                    <div class="box-body table-responsive">
                       <table class="table">
                            <tr>
                                <th  style="width: 10px; text-align:center">No</th>                                
                                <th style="text-align:center">Keterangan</th>
                                <th style="text-align:center">Lokasi</th>
                                <th style="text-align:center">Tanggal </th>
                                <th style="text-align:center">Action</th>
                            </tr>
                            
                            <?php
                            $query_user = mysql_query("select * from aktivitas_vanectro");
                            $no = 1;
                            while ($user = mysql_fetch_array($query_user)) {
                                echo "<tr>
                                    <td data-th='No' align='center'>$no</td>
                                    <td data-th='Nama Lengkap'>".$user['keterangan']."</td>
                                    <td data-th='Lokasi'>".$user['lokasi']."</td>
                                    <td data-th='Tanggal'>".date('d/m/y', strtotime($user['tanggal']))."</td>                                    
                                    <td data-th='Aksi' align='center'>
                                        <a href='?act=edit&id=$user[id]'>Edit</a> | 
                                        <a href='../page/aktivitas-kami/proses.php?page=aktivitas&act=delete&id=$user[id]' onclick='return confirm(\"Apakah anda yakin akan menghapusnya?\");'>Hapus</a>
                                    </td></tr>";
                                $no++;
                            }
                            ?>                        
                            </tr>                           
                        </table>
                    </div><!-- /.box-body -->            
            </section>
        </div>
		<?php
		break;
	case 'edit':
        $id = $_REQUEST['id'];
        $q = mysql_query("select * from aktivitas_vanectro where id='$id'");
        $d = mysql_fetch_array($q);
        ?>
        <div class="row">
<section class="col-lg-12 connectedSortable">
		<!-- quick post widget -->
        <div class="box">
            <div class="box-header">
                <i class="fa fa-edit"></i>
                <h3 class="box-title">Aktivitas Kami</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div><!-- /. tools -->
            </div>
            <div class="box-body">
                <form name="" action="../page/aktivitas-kami/proses.php?act=update&id=<?php echo $d['id'];?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
                        <input type="text" class="form-control" name="nama" value="<?php if(isset($d['keterangan'])){echo $d['keterangan'];}?>"/>
						<input type="hidden" class="form-control" name="id" value="<?php if(isset($d['id'])){echo $d['id'];}?>"/>
                    </div> 
					<div class="form-group">
                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php if(isset($d['tanggal'])){$now=date('m/d/Y', strtotime($d['tanggal'])); echo date('d/m/Y', strtotime($now)); }?>"/>
                    </div>						
                    <div class="form-group">
                                    <div class="thumbnail">
                                        <?php if(isset($d['foto'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['foto'];?>" style="width:100%;height:auto;"/><?php } else {?>
										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <?php } ?><div class="caption">
                                            <span class="btn btn-default fileinput-button">
                                                <i class="glyphicon glyphicon-camera"></i>                              
                                                <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['foto'])){echo $d['foto'];}?>" onchange="readURL(this);" >
                                            </span>
                                        </div>
                                    </div>
                    </div>	
                    <div class="form-group">
						<div class="thumbnail">
							<div class="caption">
								<span class="btn btn-default fileinput-button">
									<i class="glyphicon glyphicon-camera"></i>                              
									<input type="file" id="videonya" name="videonya" value="<?php if(isset($d['shoot'])){echo $d['shoot'];}?>">
								</span>
							</div>
						</div>
                    </div>						
					<div class="form-group">
						<textarea name="komentar" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 200px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
						<?php if(isset($d['deskripsi'])){echo $d['deskripsi'];}?>
						</textarea>					
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
        <?php break; case 'tambah': ?>

        <div class="row">
			<section class="col-lg-12 connectedSortable">
				<!-- quick post widget -->
				<div class="box">
					<div class="box-header">
						<i class="fa fa-edit"></i>
						<h3 class="box-title">Aktivitas Kami</h3>
						<!-- tools box -->
						<div class="pull-right box-tools">
							<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
						</div><!-- /. tools -->
					</div>
					<div class="box-body">
						<form name="" action="../page/aktivitas-kami/proses.php?act=post" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" class="form-control" name="nama" value="<?php if(isset($d['nama'])){echo $d['nama'];}?>"/>
								<input type="hidden" class="form-control" name="id" value="<?php if(isset($d['id'])){echo $d['id'];}?>"/>
							</div> 	

	<script>
		$(document).ready(function(){
			$("#tambahvideonya").click(function(){
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

			// Kita akan menambahkan form dengan menggunakan append
			// pada sebuah tag div yg kita beri id insert-form
			$("#insert-form").append(
				"<div class='col-md-6'>"+
				"<div class='thumbnail'>"+
					"<?php if(isset($d['photosmall'])){?><img id='img_prev' src='<?php echo $c_cdn_img.'/'.$d['photosmall'];?>' style='width:100%;height:auto;'/><?php } else {?>"+
					"<img id='img_prev' src='<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg' style='width:100%;height:auto;'/>"+
					"<?php } ?><div class='caption'>"+
					"<span class='btn btn-default fileinput-button'>"+
					"<i class='glyphicon glyphicon-camera'></i>"+                              
					"<input type='file' id='fileupload' name='fileUpload[]'  multiple='multiple' value='<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>' >"+
					"</span>"+
					"</div>"+
				"</div>"+
				"<div class='thumbnail'><div class='caption'><span class='btn btn-default fileinput-button'><i class='glyphicon glyphicon-camera'></i><input type='file' id='fileupload' name='fileUpload[]'  multiple='multiple'></span></div></div>"+
				"</div>"
			);

			
			$("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
			
			});
		});
	</script>
							<input type="hidden" id="jumlah-form" value="1">
							<div class="form-group">
								<a id="tambahvideonya" class="btn btn-default">Tambah Video <i class="fa fa-arrow-circle-right"></i></a>
							</div>
							<div class="form-group">
								
								<div id="posisitambah">
									<div class="col-md-6">
										<div class="thumbnail">
											<?php if(isset($d['photosmall'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['photosmall'];?>" style="width:100%;height:auto;"/><?php } else {?>
											<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
											<?php } ?>
											<div class="caption">
												<span class="btn btn-default fileinput-button">
													<i class="glyphicon glyphicon-camera"></i>                              
													<input type="file" id="fileupload" name="fileUpload[]"  multiple="multiple" value="<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>" onchange="readURL(this);" >
												</span>
											</div>
										</div>								
										<div class="thumbnail">
											<div class="caption">
												<span class="btn btn-default fileinput-button">
													<i class="glyphicon glyphicon-camera"></i>                              
													<input type="file" id="fileupload" name="fileUpload[]"  multiple="multiple">
												</span>									
											</div>
										</div>
									</div>
									<div id="insert-form"></div>
								</div>
							</div>						
							<div class="form-group col-md-12">
								<textarea name="komentar" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 200px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
								<?php if(isset($d['komentar'])){echo $d['komentar'];}?>
								</textarea>					
							</div> 				
							
							<div class="form-group">
								<input type="text" class="form-control" name="lokasi" placeholder="Nama Kota" value="<?php if(isset($d['lokasi'])){echo $d['lokasi'];}?>"/>
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
?>	