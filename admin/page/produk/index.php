	<script src="<?php echo $c_cdn;?>/new/plugin/cke/full/ckeditor.js"></script>
	<script src="<?php echo $c_cdn;?>/new/plugin/cke/full/samples/js/sample.js"></script>
<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
$proses = "page/produk/proses.php";

switch ($_GET['act']) {
    case 'listproduk':		if(isset($_GET['table_search'])){$q=$_GET['table_search'];		$jml_produk_query = mysql_query("select count(id_produk) as 'jml' from produk where nama_produk like '%$q%' or category like  '%$q%' or deskripsi_a like '%$q%' or deskripsi_b like '%$q%' or infopaket like '%$q%' or harga_baru like '%$q%' or harga_lama like '%$q%' 		order by nama_produk DESC");		} else { $q='';                           		$jml_produk_query = mysql_query("select count(id_produk) as 'jml' from produk ");		}
    $jml_produk_query = mysql_query("select count(id_produk) as 'jml' from produk ");
    $jml_produk = mysql_fetch_array($jml_produk_query);
    ?>
<?PHP
	$total_artikel = $jml_produk['jml'];
	if ($total_artikel == 0){header("location:$c_url");}
	if (isset($_GET['pg'])){$page = abs((int)$_GET['pg']);}
	else{$page = 1;}
//untuk pelengkap file load_content.php
$c_perpage = 10;
$paging = "$c_url/admin/list-produk"; //default url untuk pagingnya 
$calc = $c_perpage * $page;
$start = $calc - $c_perpage;
$data_art = mysql_query("select * from produk  DESC LIMIT $start, $c_perpage");
?>	
        <div class="row">
            <section class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-qrcode"></i>
                        <h3 class="box-title">List Produk (<?php echo $jml_produk['jml'];?>)</h3>						<div class="col-sm-12">						<table id="tabel1" class="table table-bordered table-striped">							<thead>								<tr>									<th scope="col">Kategori</th>									<th scope="col">Merk</th>									<th scope="col">Nama Produk</th>									<th scope="col">Kondisi</th>									<th scope="col">Harga</th>									<th scope="col">Action</th>								</tr>							</thead>							<tbody>							<?php 							$select123 = ("select * from produk where harga_baru>=10000  order by category DESC, brand asc, hot desc,  harga_baru DESC, nama_produk desc");							$query = mysql_query($select123);                            while ($d = mysql_fetch_array($query)) {								$brand=$d['brand'];								$category=$d['category'];								$nama_produk=ucwords(strtolower($d['nama_produk']));								$harga_baru=format_rupiah($d['harga_baru']);								$hot=$d['hot'];                            ?>								<tr>									<td><?php echo $category; ?></td>									<td><?php echo $brand; ?></td>									<td><?php echo $nama_produk; ?></td>									<td><?php echo $hot; ?></td>									<td>Rp <?php echo $harga_baru; ?></td>									<td>										<a class="btn btn-danger btn-sm" style="color:#fff;" href="<?php echo $c_url;?>/admin/ws-produk/editproduk?id=<?php echo $d['id_produk'];?>" title="Edit"> Edit <i class="fa fa-edit"></i></a>										<a class="btn btn-danger btn-sm" style="color:#fff;" href="<?php echo $c_url;?>/admin/ws-produk/hapusproduk?id=<?php echo $d['id_produk'];?>" title="Hapus" onclick="return confirm('Apakah anda yakin akan menghapusnya?');"> Hapus <i class="fa fa-trash-o"></i></a>									</td>								</tr>							<?php } ?>							</tbody>						</table>						</div>
                    </div><!-- /.box-header -->
                </div><!-- /.box -->
            </section>
        </div>
        <script type="text/javascript">
        //check all checkbox
        function checkAll(listproduk) {
            for (var i=0;i<document.forms[listproduk].elements.length;i++) {
                var e=document.forms[listproduk].elements[i];
                if ((e.name !='allbox') && (e.type=='checkbox')) {
                    e.checked=document.forms[listproduk].allbox.checked;
                }
            }
        }
        </script>   
    <?php
        break;

    case 'addproduk':
    ?>
        <div class="row">
            <section class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-qrcode"></i>
                        <h3 class="box-title">Tambah Produk Baru</h3>                
                    </div>
                    <div class="box-body">
                        <form name="" method="post" action="../page/produk/proses.php?page=produk&act=insert" onsubmit="return cek_pass()" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Produk</label>
                                <div class="col-md-6">
                                    <input type="text" name="nama_produk" class="form-control" placeholder="Mesin Fotocopy Seri" required>
									<input type="hidden" name="user" class="form-control" value="<?php echo $_SESSION['userid'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 control-label">Foto Produk</label>
                                <div class="col-md-3">
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
                                </div>                                <div class="col-md-3">                                    <div class="thumbnail">                                        <?php if(isset($d['photosmall'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['photosmall'];?>" style="width:100%;height:auto;"/><?php } else {?>										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>                                        <?php } ?><div class="caption">                                            <span class="btn btn-default fileinput-button">                                                <i class="glyphicon glyphicon-camera"></i>                                                                              <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>" onchange="readURL(this);" >                                            </span>                                        </div>                                    </div>                                </div>                                <div class="col-md-3">                                    <div class="thumbnail">                                        <?php if(isset($d['photosmall'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['photosmall'];?>" style="width:100%;height:auto;"/><?php } else {?>										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>                                        <?php } ?><div class="caption">                                            <span class="btn btn-default fileinput-button">                                                <i class="glyphicon glyphicon-camera"></i>                                                                              <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>" onchange="readURL(this);" >                                            </span>                                        </div>                                    </div>                                </div>                                <div class="col-md-3">                                    <div class="thumbnail">                                        <?php if(isset($d['photosmall'])){?><img id="img_prev" src="<?php echo $c_cdn_img."/".$d['photosmall'];?>" style="width:100%;height:auto;"/><?php } else {?>										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>                                        <?php } ?><div class="caption">                                            <span class="btn btn-default fileinput-button">                                                <i class="glyphicon glyphicon-camera"></i>                                                                              <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['photosmall'])){echo $d['photosmall'];}?>" onchange="readURL(this);" >                                            </span>                                        </div>                                    </div>                                </div>								
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Merk</label>
                                <div class="col-md-6">
                                    <input type="text" name="brand" class="form-control" placeholder="brand" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-6">
                                    <select name="category" data-placeholder="Pilih Kategori" class="chosen-select form-control">
                                        <option value=""></option>
										<option value="Mesin Fotocopy Hitam Putih">Mesin Fotocopy Hitam Putih</option>
										<option value="Mesin Fotocopy Warna">Mesin Fotocopy Warna</option>
										<option value="Perangkat Tambahan">Perangkat Tambahan</option>
										<option value="Sparepart Fotocopy">Sparepart Fotocopy</option>
                                    </select>
                                </div>
                            </div>		
                            <div class="form-group">
                                <label class="col-md-4 control-label">Harga</label>
                                <div class="col-md-6">
                                    <input type="text" name="harga_baru" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" class="form-control" placeholder="Ex: 82000" required>
                                </div>
                            </div>							
							<div class="form-group">
								<label class="col-md-4 control-label">Short Deskripsi</label>
								  <div class="col-md-6">
									<textarea name="deskripsi_a" id="editor"></textarea>
									<script>initSample();</script> 
								  </div>
							</div> 	    
							<div class="form-group">
								<label class="col-md-4 control-label">Deskripsi</label>
								  <div class="col-md-6">
									<textarea name="deskripsi" id="editor1"></textarea><script>initSample1();</script>		
								  </div>
							</div> 	    							
							<div class="form-group">
								<label class="col-md-4 control-label">Spesifikasi</label>
								  <div class="col-md-6">
									<textarea name="spec" id="editor2"></textarea>	<script>initSample2();</script>
								  </div>
							</div> 	 
                            <div class="form-group">
                                <label class="col-md-4 control-label">Label</label>
                                <div class="col-md-6">
                                    <input type="text" name="special" class="form-control" placeholder="Ex: Bestseller" required>
                                </div>
                            </div>							
                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenis</label>
                                <div class="col-md-6">
                                    <select name="hot" data-placeholder="Pilih Jenis Mesin " class="chosen-select form-control">
                                        <option value=""></option>
										<option value="New">New</option>
										<option value="Rekondisi">Rekondisi</option>
                                    </select>
                                </div>
                            </div>	
                            <div class="form-group">   
                                <div class="col-md-offset-4 col-md-4">
                                    <input type="submit" class="btn btn-primary" value="Tambah">
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->            
            </section>
        </div>        
    <?php
        break;
		case 'hapusproduk':
	$filename = $_GET['img'];
	//hapus foto 
	$dir = "$upload_dir/produk/";
	unlink($dir.$filename);
	unlink($dir."thumb/".$filename);
	$id=$_REQUEST['id'];
	mysql_query("delete from produk where id_produk = '$id'");
	header('location:'.$c_url.'/admin/index.php?page=produk&act=listproduk');
	break;
    case 'editproduk':
    $query_edit = mysql_query("select * from produk where id_produk='$_GET[id]'");
        $d = mysql_fetch_array($query_edit);
        ?>
        <div class="row">
            <section class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-qrcode"></i>
                        <h3 class="box-title">Edit Produk</h3>                
                    </div>
                    <div class="box-body">
                        <form name="" method="post" action="../page/produk/proses.php?page=produk&act=update" onsubmit="return cek_pass()" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nama Produk</label>
                                <div class="col-md-6">
                                    <input type="text" name="nama_produk" class="form-control" value="<?php echo $d['nama_produk'];?>" placeholder="Mesin Fotocopy Seri" required>
									<input type="hidden" name="user" class="form-control" value="<?php echo $_SESSION['userid'];?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Foto Produk</label>
                                <div class="col-md-6">
                                    <div class="thumbnail">
                                        <?php if(isset($d['image_3'])){?><img id="img_prev" src="<?php echo $c_url."/".$d['image_3'];?>" style="width:100%;height:auto;"/><?php } else {?>
										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <?php } ?><div class="caption">
                                            <span class="btn btn-default fileinput-button">
                                                <i class="glyphicon glyphicon-camera"></i>                              
                                                <input type="file" id="fileupload" name="fileUpload" value="<?php if(isset($d['image_satu'])){echo $d['image_satu'];}?>" onchange="readURL(this);" >
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Merk</label>
                                <div class="col-md-6">
                                    <input type="text" name="brand" class="form-control" value="<?php echo $d['brand'];?>" placeholder="brand" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Kategori</label>
                                <div class="col-md-6">
                                    <select name="category" class="chosen-select form-control">
                                        <option value="<?php echo $d['category'];?>"><?php echo $d['category'];?></option>
										<option value="Mesin Fotocopy Hitam Putih">Mesin Fotocopy Hitam Putih</option>
										<option value="Mesin Fotocopy Warna">Mesin Fotocopy Warna</option>
										<option value="Perangkat Tambahan">Perangkat Tambahan</option>
										<option value="Sparepart Fotocopy">Sparepart Fotocopy</option>
                                    </select>
                                </div>
                            </div>		
                            <div class="form-group">
                                <label class="col-md-4 control-label">Harga</label>
                                <div class="col-md-6">
                                    <input type="text" name="harga_baru" value="<?php echo ($d['harga_baru']);?>" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" class="form-control" placeholder="Ex: 82000" required>
                                </div>
                            </div>							
							<div class="form-group">
								<label class="col-md-4 control-label">Short Deskripsi</label>
								  <div class="col-md-6">
									<textarea name="deskripsi_a" id="editor"><?php echo ($d['deskripsi_a']);?></textarea>	<script>initSample();</script>
								  </div>
							</div> 	    
							<div class="form-group">
								<label class="col-md-4 control-label">Deskripsi</label>
								  <div class="col-md-6">
									<textarea name="deskripsi" id="editor1"><?php echo ($d['deskripsi']);?></textarea>	<script>initSample1();</script>
								  </div>
							</div> 	    							
							<div class="form-group">
								<label class="col-md-4 control-label">Spesifikasi</label>
								  <div class="col-md-6">
									<textarea name="spec" id="editor2"><?php echo ($d['spec']);?></textarea>	<script>initSample2();</script>
								  </div>
							</div> 	 
                            <div class="form-group">
                                <label class="col-md-4 control-label">Label</label>
                                <div class="col-md-6">
                                    <input type="text" name="special" class="form-control" value="<?php echo ($d['special']);?>" placeholder="Ex: Bestseller" required>
                                </div>
                            </div>	
                            <div class="form-group">
                                <label class="col-md-4 control-label">Link</label>
                                <div class="col-md-6">
                                    <input type="text" name="link" class="form-control" value="<?php echo ($d['link']);?>" required>
                                </div>
                            </div>								
                            <div class="form-group">
                                <label class="col-md-4 control-label">Jenis</label>
                                <div class="col-md-6">
                                    <select name="hot" class="chosen-select form-control">
                                        <option value="<?php echo ($d['hot']);?>"><?php echo ($d['hot']);?></option>
										<option value="New">New</option>
										<option value="Rekondisi">Rekondisi</option>
                                    </select>
                                </div>
                            </div>	
							<input type="hidden" name="id" class="form-control" value="<?php echo $d['id_produk'];?>">
							<input type="hidden" name="img" class="form-control" value="<?php echo "$c_url/$d[image_3]";?>" required>                            
							<div class="form-group">   
                                <div class="col-md-offset-4 col-md-4">
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </div>
                            </div>
                        </form>
                    </div><!-- /.box-body -->            
            </section>
        </div> 
        <?php
        break;

    case 'listprodkategori':
        ?>
        <div class="row">
            <section class="col-lg-6 connectedSortable">
                <!-- quick post widget -->
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-tags"></i>
                        <h3 class="box-title">Kategori Produk</h3>    
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <a href="?page=produk&act=addprodkategori" class="btn btn-primary btn-sm" style="color:#fff"><i class="fa fa-plus"></i> Tambah Kategori</a>
                        </div><!-- /. tools -->            
                    </div>
                    <div class="box-body no-padding">
                        <table class="table">
                            <tr>
                                <th style="width: 10px; text-align:center">No</th>
                                <th>Kategori</th>                                
                            </tr>
                            
                            <?php
                            $query = mysql_query("select * from produk order by category");
                            $no = 1;
                            $cek_kategori = mysql_num_rows($query);
                            if ($cek_kategori != 0) {
                                while ($d = mysql_fetch_array($query)) {                                    
                                    echo "<tr>
                                        <td align='center'>$no</td>
                                        <td>".ucwords(implode(' ', explode('-', $d['category'])))."
                                            <div class='tools'>
                                                <a href='?page=produk&act=editprodkategori&id=$d[category]' title='Edit'><i class='fa fa-edit'></i></a>
                                                <a href='$proses?page=produk&act=hapuspk&id=$d[category]' onclick='return confirm(\"Apakah anda yakin akan menghapusnya?\");' title='Hapus'><i class='fa fa-trash-o'></i></a>
                                            </div>
                                        </td></tr>";
                                    $no++;
                                }
                            } else {
                                echo "<tr>
                                        <td colspan='3' align='center'>Tidak ada kategori</td></tr>";
                            }
                            
                            ?>
                                                     
                        </table>
                    </div>                    
                </div>
            </section>
        </div>
        <?php
        break;

    case 'addprodkategori':
        ?>
        <div class="row">
            <section class="col-lg-6 connectedSortable">
                <!-- quick post widget -->
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">Tambah Kategori Produk</h3>  
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <a class="btn btn-default btn-sm" onclick="history.back();" ><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                        </div><!-- /. tools -->               
                    </div>
                    <div class="box-body">
                        <form name="" method="post" action="page/produk/proses.php?page=produk&act=submitpk" onsubmit="return cek_pass()" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nama Kategori</label>
                                <div class="col-md-8">
                                    <input type="text" name="category" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">   
                                <div class="col-md-offset-3 col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Tambah">
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </section>
        </div>
        <?php
        break;
    case 'editprodkategori':
        include './../lib/config.php';
        $id = $_GET['id'];
        $q = mysql_query("select * from produk where category='$id'");
        $d = mysql_fetch_array($q);
        ?>
        <div class="row">
            <section class="col-lg-6 connectedSortable">
                <!-- quick post widget -->
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">Edit Nama Kategori</h3>  
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <a class="btn btn-default btn-sm" onclick="history.back();" ><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                        </div><!-- /. tools -->               
                    </div>
                    <div class="box-body">
                        <form name="" method="post" action="page/produk/proses.php?page=produk&act=updatepk&id=<?php echo $d['category']; ?>" onsubmit="return cek_pass()" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Judul Kategori</label>
                                <div class="col-md-8">
                                    <input type="text" name="category" value="<?php echo ucwords(implode(' ', explode('-', $d['category'])));?>" class="form-control" required>
                                </div>                            
                            </div>                            
                            <div class="form-group">   
                                <div class="col-md-offset-3 col-md-8">
                                    <input type="submit" class="btn btn-primary" value="Tambah">
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>
            </section>
        </div>
        <?php
        break;

    default:
        ?>
        <label>404 Halaman tidak ditemukan</label>
        <?php
        break;
}
?>
<script >function tandaPemisahTitik(b){
var _minus = false;
if (b<0) _minus = true;
b = b.toString();
b=b.replace(".","");
b=b.replace("-","");
c = "";
panjang = b.length;
j = 0;
for (i = panjang; i > 0; i--){
j = j + 1;
if (((j % 3) == 1) && (j != 1)){
c = b.substr(i-1,1) + "." + c;
} else {
c = b.substr(i-1,1) + c;
}
}
if (_minus) c = "-" + c ;
return c;
}
function numbersonly(ini, e){
if (e.keyCode>=49){
if(e.keyCode<=57){
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
ini.value = tandaPemisahTitik(b);
return false;
}
else if(e.keyCode<=105){
if(e.keyCode>=96){
//e.keycode = e.keycode - 47;
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
ini.value = tandaPemisahTitik(b);
//alert(e.keycode);
return false;
}
else {return false;}
}
else {
return false; }
}else if (e.keyCode==48){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==95){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==8 || e.keycode==46){
a = ini.value.replace(".","");
b = a.replace(/[^\d]/g,"");
b = b.substr(0,b.length -1);
if (tandaPemisahTitik(b)!=""){
ini.value = tandaPemisahTitik(b);
} else {
ini.value = "";
}
return false;
} else if (e.keyCode==9){
return true;
} else if (e.keyCode==17){
return true;
} else {
//alert (e.keyCode);
return false;
}
}</script>