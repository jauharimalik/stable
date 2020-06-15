<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);

switch ($_GET['act']) {
    case 'list':
    $jml_n = mysql_fetch_array(mysql_query("select count(id) as jml_ulasan from ulasan"));
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">                        
                        <h3 class="box-title">Lihat Semua Ulasan(<?php echo $jml_n['jml_ulasan']; ?>)</h3>
                        <div class="box-tools">                            
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <form name="formlist[0]" action="../page/ulasan/proses.php?page=ulasan&act=aksiulasan" method="post">
                            <table class="table table-hover" style="font-size:90%">
                                <tr>
                                    <th colspan="9">
                                        <div class="pull-left box-tools"> 
                                            <div class="">
                                                <button name="btnhapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                                <button name="btnbatal" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Batalkan Verifikasi</button>
												<button name="btnok" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Terima Ulasan</button>												<a href="<?php echo $c_url;?>/admin/ws-ulasan/tambahulasan"  class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Ulasan</a>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr style="background-color: #F3F4F5">
                                    <th style="text-align:center;"><input type="checkbox"  name="allbox" onclick="checkAll(0);" /></th>
                                    <th>Tanggal</th>
                                    <th>Tipe Mesin</th>
                                    <th>Atas Nama</th>
									<th>Status</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                </tr>
                                <?php
                                $d = mysql_query("select * from ulasan order by tanggal desc");
                                if (mysql_num_rows($d)>0) {
                                    while ($data = mysql_fetch_array($d)) {
                                        if (($data['status'])=="y") { $label = "<i class=\"fa fa-check\" style=\"color:#84ad05 \"></i>"; $bold = "font-weight:bold"; } 
										else { $label = ""; $bold = "font-weight:normal";}	
										
									$mesin = mysql_fetch_array(mysql_query("select * from produk where  id_produk='".$data['pid']."'"));		
                                ?>
                                <tr>
                                    <td align="center"><input type="checkbox" value="<?php echo $data['id']; ?>" name="ordid[]"></td>
                                    <td style="<?php echo $bold ?>"><?php echo date('d/m/Y', strtotime($data['tanggal'])); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo "<a href='".$c_url."/admin/ws-ulasan/detailulasan?id=$data[id]'>".$mesin['nama_produk']."</a> ".$label; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['nama']; ?></td>
									<td style="<?php echo $bold ?>"><?php echo $data['status']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['rating'],0,",","."); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['review']; ?></td>
                                </tr>  
                                <?php
                                    }
                                } else {
                                ?>
                                <tr>
                                    <td colspan="6" align="center">Tidak ada daftar pembayaran</td>
                                </tr>
                                <?php
                                }
                                ?>                        
                            </table>
                        </form>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
        <script type="text/javascript">
        //check all checkbox
        function checkAll(formlist) {
            for (var i=0;i<document.forms[formlist].elements.length;i++) {
                var e=document.forms[formlist].elements[i];
                if ((e.name !='allbox') && (e.type=='checkbox')) {
                    e.checked=document.forms[formlist].allbox.checked;
                }
            }
        }
        </script> 		
        <?php
        break;
    case 'tambahulasan':        if (isset($_REQUEST['btnverifikasi'])) {			$status="y";			$tanggal=date('Y-m-d');			$nama=  $_POST['nama'];			$pid=  $_POST['pid'];			$judul=  $_POST['judul'];			$rating=  $_POST['rating'];			$review=  $_POST['review'];			$query_tambah_ulasan="INSERT INTO ulasan (nama, pid, judul, rating, review, tanggal, status) VALUES ('$nama','$pid','$judul','$rating','$review','$tanggal','$status')";            $prosesverif = mysql_query($query_tambah_ulasan);            if ($prosesverif) {                $msg = "<div class=\"alert alert-success\" style=\"margin-bottom: 0!important;\">                            <i class=\"fa fa-check\"></i>                            <b>Sukses:</b> Berhasil diverifikasi.                        </div>"; 					            }        }	        ?>	        <section class="content invoice col-md-12">     					 <form action="" method="post" class="col-md-12" style="border-bottom: 1px solid #eee;padding-bottom:40px;">                            <div class="form-group col-md-12" style="padding:20px;">                                <label class="col-md-4 control-label">Nama Pelanggan</label>                                <div class="col-md-8">                                    <input type="text" name="nama" class="form-control" placeholder="Ex: Bapak Haryono" required>                                </div>                            </div>	                            <div class="form-group col-md-12" style="padding:20px;">                                <label class="col-md-4 control-label">Seri Mesin</label>                                <div class="col-md-8">                                    <select name="pid" autocomplete="on"  class="chosen-select form-control">                                        <?php                                   											$result = mysql_query("select * from produk where category like '%Mesin Fotocopy%' and harga_baru >=100000 and hot !='' order by brand desc, id_produk desc");											while ($kategori = mysql_fetch_array($result)) {												echo "<option value='".$kategori['id_produk']."'>".ucwords($kategori['nama_produk'])."</option>";											}                                        ?>                                    </select>								                                </div>                            </div>	                            <div class="form-group col-md-12" style="padding:20px;">                                <label class="col-md-4 control-label">Judul Ulasan</label>                                <div class="col-md-8">                                    <input type="text" name="judul" class="form-control" placeholder="Ex: Pemesanan Mesin Fotokopi Ramah" required>                                </div>                            </div>	                            <div class="form-group col-md-12" style="padding:20px;">                                <label class="col-md-4 control-label">Rating</label>                                <div class="col-md-8">									<select style="float:left;width:100%;" name="rating" data-placeholder="Beri Rating" class="chosen-select form-control">										<?php for($i=1;$i<=5;$i++) { ?><option value="<?php echo $i;?>"> Rating <?php echo $i;?></option><?php }?>													</select>									                                </div>                            </div>	                            <div class="form-group col-md-12" style="padding:20px;">                                <label class="col-md-4 control-label">Review</label>                                <div class="col-md-8">									<textarea name="review" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 100px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>		                                </div>                            </div>							<div class="form-group" style="padding:20px;">								<div style="float:left;"><button name="btnverifikasi" class="btn btn-primary pull-right" style="margin-right: 5px; font-size:12px;"><i class="fa fa-check-square-o"></i> Terima </button></div>								<div style="float:right'"><button name="btnbatalverifikasi" class="btn pull-right" style="margin-right: 5px;font-size:12px;"><i class="fa fa-undo"></i> Tolak </button></div>							</div>					</form>			        </section>		<?php                   break;
    case 'detailulasan':
        $msg = "";
        //proses verifikasi
        if (isset($_REQUEST['btnverifikasi'])) {
            $idord = $_REQUEST['id'];
			$status="y";
			$nama=  $_POST['nama'];
			$pid=  $_POST['pid'];
			$judul=  $_POST['judul'];
			$rating=  $_POST['rating'];
			$review=  $_POST['review'];
            $prosesverif = mysql_query("update ulasan set rating='$rating', review='$review', pid='$pid', judul='$judul', status='$status', nama='$nama'  where id='$idord'");
            if ($prosesverif) {
                $msg = "<div class=\"alert alert-success\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-check\"></i>
                            <b>Sukses:</b> Berhasil diverifikasi.
                        </div>"; 
            }
        }
         if (isset($_REQUEST['btnbatalverifikasi'])) {
            $idord = $_REQUEST['id'];
			$status="t";
            $prosesverif = mysql_query("update ulasan set status='$status' where id='$idord'");
            if ($prosesverif) {
                $msg = "<div class=\"alert alert-info\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-info\"></i>
                            <b>Sukses:</b>ulasan Ditolak.
                        </div>"; 
            }
        }

        //proses get informasi
        if (isset($_REQUEST['id'])) {
            $kodeord = $_REQUEST['id'];     
            $d = mysql_fetch_array(mysql_query("select * from ulasan where id='$kodeord'"));
            $c = mysql_query("select p.nama_produk, o.pid from produk p, ulasan o where p.id_produk=o.pid and o.id='$kodeord'");
            //set dilihat menjadi 1
        ?>
        <div class="pad margin no-print">
            <?php echo $msg; ?>
        </div>	
        <section class="content invoice">                    
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-"></i> Detail Ulasan
                        <small class="pull-right"></small>
                    </h2>                                              
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address>
                        <strong><?php echo $d['nama']?></strong><br>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Judul Ulasan</b>
                    <h3 style="margin: 0"><?php echo $d['judul']?></h3>
                    Tanggal: <?php echo date('d/m/Y', strtotime($d['tanggal']))?><br/>
                    Status: <?php echo $d['status']; ?>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th>Review</th>
								<th>Nama</th>
                                <th style="text-align:center">Produk</th>
                                <th style="text-align:center">Rating</th>
                            </tr>                                    
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            while ($data = mysql_fetch_array($c)) {
                            ?>                                                                  
                            <tr>
                                <td align="center"><?php echo $no; ?></td>
                                <td style="text-align: left; width:40%;"><?php echo $d['review']; ?></td>
								<td style="text-align: left;"><?php echo strtoupper($d['nama']); ?></td>
                                <td align="center"><?php echo $data['nama_produk']; ?></td>
								<td align="center"><?php echo $d['rating']; ?></td>                                 
                            </tr>   
                            <?php
                                $no++;
                            }
                            $sub = mysql_fetch_array(mysql_query("select sum(total) as subtotal from order_detail where order_id='$kodeord' group by order_id"));
                            ?>
                        </tbody>
                    </table>                            
                </div><!-- /.col -->
            </div><!-- /.row -->
					 <form action="" method="post" style="border-bottom: 1px solid #eee;padding-bottom:40px;">
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Nama Pelanggan</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($d['nama'])){echo strtoupper($d['nama']);} ?>" name="nama" class="form-control" placeholder="Ex: Bapak Haryono" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Seri Mesin</label>
                                <div class="col-md-8">
                                    <select name="pid" value="<?php echo $d['pid']; ?>" autocomplete="on"  class="chosen-select form-control">
                                        <option value="<?php if(isset($d['pid'])){echo $d['pid'];}?>"><?php if(isset($data['nama_produk'])){echo $data['nama_produk'];}?></option>
                                        <?php                                   
                                        $result = mysql_query("select * from produk where category = 'Mesin Fotocopy Warna' or category = 'Mesin Fotocopy Hitam Putih' order by brand desc, id_produk desc");
                                        while ($kategori = mysql_fetch_array($result)) {
                                            echo "<option value='".$kategori['id_produk']."'>".ucwords($kategori['nama_produk'])."</option>";
                                        }
                                        ?>
                                    </select>								
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Judul Ulasan</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($d['judul'])){echo $d['judul'];} ?>"  name="judul" class="form-control" placeholder="Ex: Pemesanan Mesin Fotokopi Ramah" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Rating</label>
                                <div class="col-md-8">
									<select style="float:left;width:100%;" name="rating" data-placeholder="Beri Rating" class="chosen-select form-control">
										<option value="<?php echo $d['rating'];?>"> Rating <?php echo $d['rating'];?></option>
										<?php for($i=1;$i<=5;$i++) { ?><option value="<?php echo $i;?>"> Rating <?php echo $i;?></option><?php }?>				
									</select>									
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Review</label>
                                <div class="col-md-8">
						<textarea name="review" class="textarea" placeholder="Tuliskan komentarnya disini" style="width: 100%; height: 100px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
						<?php if(isset($d['review'])){echo $d['review'];}?>
						</textarea>		
                                </div>
                            </div><div class="col-lg-12" style="margin-bottom:10px;"><button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button></div>
							<div class="form-group" style="padding:20px;">
                        <input type="hidden" name="id" value="<?php echo $d['id']?>">
                        <div style="float:left;"><button name="btnverifikasi" class="btn btn-primary pull-right" style="margin-right: 5px; font-size:12px;"><i class="fa fa-check-square-o"></i> Terima </button></div>
                        <div style="float:right'"><button name="btnbatalverifikasi" class="btn pull-right" style="margin-right: 5px;font-size:12px;"><i class="fa fa-undo"></i> Tolak </button></div>
							</div>
					</form>			
            <!-- this row will not appear when printing -->

        </section><!-- /.content -->		
        <?php            
        }        
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