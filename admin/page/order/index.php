<style>
.mt80{margin-top:80px;}
</style>
<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
switch ($_GET['act']) {
    case 'listorder':
    $jml_order = mysql_fetch_array(mysql_query("select count(order_id) as jml_order from orders"));
    ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">                        
                        <h3 class="box-title">List Order (<?php echo $jml_order['jml_order']; ?>)</h3>
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
                        <form name="formlist[0]" action="../page/order/proses.php?page=order&act=aksilistorder" method="post">
                            <table class="table table-hover">
                                <tr>
                                    <th colspan="7">
                                        <div class="pull-left box-tools"> 
                                            <div class="btn-group">
                                                <button name="btnhapus" class="btn btn-sm"><i class="fa fa-trash-o"></i> Hapus</button>
                                                <button name="btnbatalproses" class="btn btn-warning btn-sm"><i class="fa fa-undo"></i> Batalkan Proses</button>
                                                <button name="btnproses" class="btn btn-primary btn-sm"><i class="fa fa-spinner"></i> Proses</button>
                                                <button name="btndikirim" class="btn btn-success btn-sm"><i class="fa fa-send-o"></i> Dikirim</button>
                                                <button name="btnbatal" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Cancel</button>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr style="background-color: #F3F4F5">
                                    <th style="text-align:center;"><input type="checkbox"  name="allbox" onclick="checkAll(0);" /></th>
                                    <th>Tgl. Order</th>
                                    <th>ID Pemesanan</th>
                                    <th>Status</th>
                                    <th>Nama Pemesan</th>
                                    <th>Qty</th>
                                    <th>Subtotal</th>
                                </tr>
                                <?php
                                $d = mysql_query("select o.tgl_pesan, o.order_id, o.nama, o.status, o.dilihat, o.pelunasan, sum(od.qty) as item, sum(od.total) as subtotal from orders o, order_detail od where o.order_id=od.order_id group by od.order_id order by o.tgl_pesan desc ");
                                if (mysql_num_rows($d)>0) {
                                    while ($data = mysql_fetch_array($d)) {
                                        if ($data['status']=="Menunggu") {
                                            $label = "<span class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> ";
                                        } elseif ($data['status']=="Dalam Proses") {
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
                                        $pelunasan = ($data['pelunasan']=="1") ? '<i class="fa fa-check" style="color:#84AD05"></i>' : '';
                                ?>
                                <tr>
                                    <td align="center"><input type="checkbox" value="<?php echo $data['order_id']; ?>" name="id[]"/></td>
                                    <td style="<?php echo $bold ?>"><?php echo date('d/m/Y', strtotime($data['tgl_pesan'])); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo "<a href='".$c_url."/admin/ws-order/detilorder?id=$data[order_id]'>".$data['order_id']."</a> $pelunasan"; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $label.$data['status']; ?></span></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['nama']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['item']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo "Rp. ".number_format($data['subtotal'], 0,',','.'); ?></td>
                                </tr>  
                                <?php
                                    }
                                } else {
                                ?>
                                <tr>
                                    <td colspan="7" align="center">Tidak ada daftar pemesanan</td>
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

    case 'detilorder':
        $msg = "";
        //proses buton 
         if (isset($_REQUEST['btndikirim'])) {
            $idord = $_REQUEST['id'];
			$tgl_kirim= date('Y-m-d');			
            $proses = mysql_query("update orders set status='Dikirim', tgl_kirim='".$tgl_kirim."' where order_id='$idord'");
            if ($proses) {
                $msg = "<div class=\"alert alert-success\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-spinner\"></i>
                            <b>Sukses:</b> Status Pemesanan dikirim.
                        </div>"; 
            }
        }
        if (isset($_REQUEST['btnproses'])) {
            $idord = $_REQUEST['id'];
			$tgl_proses= date('Y-m-d');
			$prosesterbaru="Dalam Proses";
			$proses = mysql_query("update orders set status = '".$prosesterbaru."', tgl_proses='".$tgl_proses."' where order_id ='".$idord."'");
            if ($proses) {
                $msg = "<div class=\"alert alert-info\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-spinner\"></i>
                            <b>Sukses:</b> Pesanan akan segera diproses ".$_REQUEST['id'].".
                        </div>"; 
            }
			else {
                $msg = "<div class=\"alert alert-danger\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-spinner\"></i>
                            <b>Gagal:</b> Pesanan gagal diproses ".$idord.".
                        </div>"; 				
			}
        }
        if (isset($_REQUEST['btncancel'])) {
            $idord = $_REQUEST['id'];
			$tgl_proses= date('Y-m-d');
			$prosesterbaru="Dalam Proses";			
            $proses = mysql_query("update orders set status='Batal' where order_id='$idord'");
            if ($proses) {
                $msg = "<div class=\"alert alert-success\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-spinner\"></i>
                            <b>Cancel:</b> Pesanan berhasil dicancel.
                        </div>"; 
            }
        }
		if (isset($_REQUEST['upload_proses'])) {
			$upload1 = $_FILES["fileUpload"]["tmp_name"];
			$typefile= filetype ($_FILES["fileUpload"]["tmp_name"]);
			$idord = $_REQUEST['id'];
			$tgl_proses= date('Y-m-d');
			if($typefile!=".jpg"){
				$new_images = "proses_video_".$_FILES["fileUpload"]["name"];
				copy($_FILES["fileUpload"]["tmp_name"],CDN.DS."/images/proses/".$new_images);
			} else {
				$images = $_FILES["fileUpload"]["tmp_name"];
				$new_images = "Produk_Detail".$_FILES["fileUpload"]["name"];
				copy($_FILES["fileUpload"]["tmp_name"],"../cdn/images/proses/".$_FILES["fileUpload"]["name"]);
				$width=278; //*** Fix Width & Heigh (Autu caculate) ***//
				$size=GetimageSize($images);
				$height=round($width*$size[1]/$size[0]);
				$images_orig = ImageCreateFromJPEG($images);
				$photoX = ImagesX($images_orig);
				$photoY = ImagesY($images_orig);
				$images_fin = ImageCreateTrueColor($width, $height);
				ImageCopyResampled($images_fin, $images_orig, 0, 0, 0, 0, $width+1, $height+1, $photoX, $photoY);
				ImageJPEG($images_fin,"../cdn/images/proses/".$new_images);
				ImageDestroy($images_orig);
				ImageDestroy($images_fin);	
			}	
			$proses = mysql_query("update orders set foto_proses='cdn/images/proses/$new_images' , tgl_proses='".$tgl_proses."' where order_id='$idord'");
			
		}
		if (isset($_REQUEST['update_pengiriman2'])) {
			$idord = $_REQUEST['id'];
			$ekspedisi = $_REQUEST['ekspedisi'];
			$nohp_pengiriman = $_REQUEST['nohp_pengiriman'];	
			$ongkir = $_POST['ongkir'];
			$ongkir = str_replace('.', '', $ongkir);			
			$resi = $_REQUEST['resi'];		
			$link_ekspedisi = $_REQUEST['link_ekspedisi'];				
			$proses = mysql_query("update orders set ongkir='".$ongkir."', ekspedisi='".$ekspedisi."', nohp_pengiriman='".$nohp_pengiriman."', resi='".$resi."', link_ekspedisi='".$link_ekspedisi."' where order_id='$idord'");
		}			
		if (isset($_REQUEST['upload_kirim'])) {
			$idord = $_REQUEST['id'];
			$images = $_FILES["fileUpload2"]["tmp_name"];
			$tgl_kirim= date('Y-m-d');
			copy($_FILES["fileUpload2"]["tmp_name"],"../cdn/images/proses/".$_FILES["fileUpload2"]["name"]);
			$proses = mysql_query("update orders set foto_pengiriman='cdn/images/proses/".$_FILES['fileUpload2']['name']."' , tgl_kirim='".$tgl_kirim."' where order_id='$idord'");
		}		
        //get informasi
        if (isset($_GET['id'])) {
            $kodeord = $_GET['id'];     
            $d = mysql_fetch_array(mysql_query("select o.order_id, o.nama, o.kota, o.provinsi, o.alamat, o.kodepos, o.phone, o.tgl_pesan, o.pelunasan, c.cust_fn, c.cust_mail from orders o, cust_users c where  o.order_id='$kodeord'"));
            $c = mysql_query("select p.nama_produk, p.harga_baru, o.qty, o.total from order_detail o, produk p where o.produk_id=p.id_produk and o.order_id='$kodeord'");
			$e = mysql_fetch_array(mysql_query("select * from orders where  order_id='$kodeord'"));
                   
            //set dilihat menjadi 1
            mysql_query("update orders set dilihat='1' where order_id='$kodeord'");
        ?>
        <div class="pad margin no-print">
            <?php echo $msg; ?>
        </div>
        <section class="content invoice">                    
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-"></i> Detail Pemesanan
                        <small class="pull-right"></small>
                    </h2>                          
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address>
                        <strong>
						<?php if(isset($d['nama'])){echo $d['nama'];} else {echo $e['nama'];} ?></strong><br>
                        <?php if(isset($d['alamat'])){echo $d['alamat'];} else {echo $e['alamat'];} ?><br>
                        <?php if(isset($d['kota'])){echo $d['kota']." ".$d['kodepos'];} else {echo $e['kota']." ".$e['kodepos'];} ?><br>
                        <?php if(isset($d['provinsi'])){echo $d['provinsi'];} else {echo $e['provinsi'];} ?><br>
                        Phone: <?php if(isset($d['phone'])){echo $d['phone'];} else {echo $e['phone'];} ?><br/>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>ID Pemesanan</b>
                    <h3 style="margin: 0"><?php echo $d['order_id']?></h3>
                    Tanggal: <?php echo date('d/m/Y', strtotime($d['tgl_pesan']))?><br/>
                    Akun: <?php if(isset($d['cust_fn'])){echo $d['cust_fn']." ( ".$d['cust_mail']." ) <br>";} else {echo $e['nama']."<br>";} ?>
                    Pembayaran: <?php echo ($d['pelunasan']=="1") ? '<span style="color:#84AD05"><i class="fa fa-check-square-o"></i> Terverifikasi</span>' : '<span style="color:#F4543C"><i class="fa fa-clock-o"></i> Menunggu</span>'; ?>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th>Produk</th>
                                <th style="text-align:center">Harga</th>
                                <th style="text-align:center">Qty</th>
                                <th style="text-align:center">Total</th>
                            </tr>                                    
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            while ($data = mysql_fetch_array($c)) {
                            ?>                                                                  
                            <tr>
                                <td align="center"><?php echo $no; ?></td>
                                <td style="text-align: left; width:40%;"><?php echo $data['nama_produk']; ?></td>
                                <td align="center"><?php echo "Rp. ".number_format($data['harga_baru'], 0,',','.'); ?></td>
                                <td align="center"><?php echo $data['qty']; ?></td>
                                <td align="center"><?php echo "Rp. ".number_format($data['total'], 0,',','.'); ?></td>                                             
                            </tr>   
                            <?php
                                $no++;
                            }
                            $sub = mysql_fetch_array(mysql_query("select sum(total) as subtotal from order_detail where order_id='$kodeord' group by order_id"));
                            ?>
                            <tr>
                                <td colspan="4" align="right"><strong>Subtotal</strong></td>
                                <td align="center"><strong><?php echo "Rp. ".number_format($sub['subtotal'], 0,',','.'); ?></strong></td>
                            </tr>  
                        </tbody>
                    </table>                            
                </div><!-- /.col -->
            </div><!-- /.row -->
			<?php if($e['tgl_kirim']>0){ ?> 
					 <form action="" method="post" style="border-bottom: 1px solid #eee;padding-bottom:40px;">
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Tarif Ongkos Kirim</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($e['ongkir'])){echo $e['ongkir'];} ?>" name="ongkir" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" class="form-control" placeholder="Ex: 82000" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Perusahaan Ekspedisi</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($e['ekspedisi'])){echo $e['ekspedisi'];} ?>" name="ekspedisi" class="form-control" placeholder="Ex: PT. Tiki" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Kontak Ekspedisi</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($e['nohp_pengiriman'])){echo $e['nohp_pengiriman'];} ?>"  name="nohp_pengiriman" class="form-control" placeholder="Ex: +6289 6350 23780" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Nomor Resi</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($e['resi'])){echo $e['resi'];} ?>" name="resi" class="form-control" placeholder="Ex: 12345" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Halaman Web Ekspedisi</label>
                                <div class="col-md-8">
                                    <input type="text" value="<?php if(isset($e['link_ekspedisi'])){echo $e['link_ekspedisi'];} ?>" name="link_ekspedisi" class="form-control" placeholder="http://www.tiki.com" required>
                                </div>
                            </div>
							<div class="form-group" style="padding:20px;">
							<input type="hidden" name="kodeord" value=" <?php if(isset($d['order_id'])){echo $d['order_id'];} else {echo $e['order_id'];} ?>">
							<button name="update_pengiriman2" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-spinner"></i> Update</button>
							</div>
					</form>
			<?php } ?>
					<?php if($e['tgl_proses']>0){ ?>
                        <form name="" method="post" action="" onsubmit="return cek_pass()" class="form-horizontal mt80" enctype="multipart/form-data">
                                <div class="col-md-6">
									<label class=" control-label">Foto Proses : <?php echo $e['tgl_proses'];?></label>
                                    <div class="thumbnail">
                                        <?php if(!empty($e['foto_proses'])){ 
											$format=get_file_extension($e['foto_proses']); 
											if($format=="mp4"){
										?>
											<video  style="width:100%;height:auto;" controls>
											  <source src="<?php echo $c_url."/".$e['foto_proses'];?>" type="video/mp4">
												Your browser does not support the video tag.
											</video>										
										<?php 
											} else if(($format=="jpg")||($format=="jpeg")||($format=="png")) {
										?>
											<img id="img_prev" src="<?php echo $c_url."/".$e['foto_proses'];?>" style="width:100%;height:auto;"/>
										<?php }} else {?>
											<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <?php } ?>
										<div class="caption">
                                            <span class="btn btn-default fileinput-button">
                                                <i class="glyphicon glyphicon-camera"></i>                              
                                                <input type="file" id="fileupload" name="fileUpload" value="<?php if(!empty($e['foto_proses'])){echo $e['foto_proses'];}?>" onchange="readURL(this);" >
                                            </span>
                                        </div>
                                    </div>
									<input type="hidden" name="kodeord" value=" <?php if(isset($d['order_id'])){echo $d['order_id'];} else {echo $e['order_id'];} ?>">
									<button name="upload_proses" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-spinner"></i> Upload</button>
                                </div>
						</form>
					<?php } ?>	
					<?php if($e['tgl_kirim']>0){ ?>
                        <form name="" method="post" action="" onsubmit="return cek_pass()" class="form-horizontal mt80" enctype="multipart/form-data">
                                <div class="col-md-6">
									<label class=" control-label">Bukti Pengiriman : <?php echo $e['tgl_kirim'];?></label>
                                    <div class="thumbnail">
                                        <?php if(!empty($e['foto_pengiriman'])){?><img id="img_prev" src="<?php echo $c_url."/".$e['foto_pengiriman'];?>" style="width:100%;height:auto;"/><?php } else {?>
										<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" style="width:100%;height:auto;"/>
                                        <?php } ?><div class="caption">
                                            <input class="form-control btn btn-primary" type="file" id="fileupload2" name="fileUpload2" value="<?php if(!empty($e['foto_pengiriman'])){echo $e['foto_pengiriman'];}?>"  >
                                            
                                        </div>
                                    </div>
									<input type="hidden" name="kodeord" value=" <?php if(isset($d['order_id'])){echo $d['order_id'];} else {echo $e['order_id'];} ?>">
									<button name="upload_kirim" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-spinner"></i> Upload</button>
                                </div>
						</form>
					<?php } ?>						
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <form action="" method="post">
                        <input type="hidden" name="kodeord" value=" <?php if(isset($d['order_id'])){echo $d['order_id'];} else {echo $e['order_id'];} ?>">
                        <button name="btndikirim" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-send-o"></i> Dikirim</button>
                        <button name="btnproses" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-spinner"></i> Proses</button>
                        <button name="btncancel" class="btn pull-right" style="margin-right: 5px;"><i class="fa fa-times"></i> Cancel Pesanan</button>
                    </form>					
                </div>
            </div>
        </section><!-- /.content -->
        <?php	
        }        
        break;

    case 'buatpo':
	include ROOT.DS.'ongkir/config.php'; 	
	function int($s){return(int)preg_replace('/[^\-\d]*(\-?\d*).*/','$1',$s);}$skor=0;$skor2=0;
        $msg = "";
        //proses buton 
         if (isset($_REQUEST['simpanpo'])) {
		$faktur=$_POST['faktur'];
		$nama=$_POST['nama'];
		$tel=$_POST['phone'];
		$prov3=$_POST['provinsi'];
		$kota=$_POST['kota'];
		$kodepos=$_POST['kodepos'];
		$alamat=$_POST['alamat'];
		$ongkir=str_replace('.','',$_POST['ongkir']);
		$tanggal=date('Y-m-d');
		$status="Dalam Proses";
		$tipemesin=$_POST['tipemesin'];
		$qty=$_POST['qty'];
		$total = mysql_fetch_array(mysql_query("select * from produk where  id_produk='$tipemesin'"));	
		$harga=$total['harga_baru'];
		$totalnya=$harga*$qty;
		$pelunasan=1;
		$prov = $db2->query("SELECT * FROM tbl_provinsi where provinsi_id = '".$prov3."'");
		$dataprov = $prov->fetch(PDO::FETCH_ASSOC);
		$nm_prov=$dataprov['provinsi'];		
		mysql_query("insert into orders(ongkir,order_id,faktur,nama,phone,status,pelunasan,dilihat, provinsi,kota,kodepos,alamat,tgl_pesan,tgl_proses)
		values 	('$ongkir','$faktur','$faktur','$nama','$tel','$status','$pelunasan','$pelunasan','$nm_prov','$kota','$kodepos','$alamat','$tanggal','$tanggal')");						

		mysql_query("insert into order_detail(order_id,produk_id,qty,total)
		values 	('$faktur','$tipemesin','$qty','$totalnya')");			
		
		header('location:'.$c_url.'/admin/ws-order/listorder');	
        }
        ?>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>			
        <div class="pad margin no-print">
            <?php echo $msg; ?>
        </div>
        <section class="content invoice">                    
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-"></i> Detail Pemesanan
                        <small class="pull-right"></small>
                    </h2>                          
                </div><!-- /.col -->
            </div>
            <!-- info row -->
			<div class="row">
                <div class="col-xs-12">
					 <form action="" method="post" style="border-bottom: 1px solid #eee;padding-bottom:40px;">
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Nomor Faktur</label>
                                <div class="col-md-8">
                                    <input type="text" name="faktur" class="form-control" placeholder="Ex: Nomor Faktur" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Atas Nama</label>
                                <div class="col-md-8">
                                    <input type="text" name="nama" class="form-control" placeholder="Ex: Nama di Faktur" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">No. Handphone </label>
                                <div class="col-md-8">
                                   <input maxlength="12" type="text" class="form-control" name="phone" required>
                                </div>
                            </div>								
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Provinsi</label>
                                <div class="col-md-8">
									<select  name="provinsi" class="form-control provinsi" id="provinsi" required>
									<?php
									$prov = $db2->query("SELECT * FROM tbl_provinsi");
									if(isset($a_data['provinsi_id'])){echo '<option value="'.$a_data['provinsi_id'].'" >'.$a_data['provinsi'].'</option>';} 
									else{echo'<option >Pilih Provinsi</option>';}
									while ($dataprov = $prov->fetch(PDO::FETCH_ASSOC)) {
									echo'<option value="'.$dataprov['provinsi_id'].'">'.$dataprov['provinsi'].'</option>';
									}
									?>
									</select>
                                </div>
                            </div>								
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Kota / Kabupaten</label>
                                <div class="col-md-8">
									<select  name="kota" class="form-control kota" id="kota" required>
									<?php if(isset($a_data['kota'])){echo '<option value="'.$a_data['kota'].'" >'.$a_data['kota'].'</option>';} ?>
									</select>	
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Kode Pos</label>
                                <div class="col-md-8">
                                    <input  type="text" pattern="[0-9]{5}" class="form-control" name="kodepos" required>
                                </div>
                            </div>				
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Produk</label>
                                <div class="col-md-8">
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
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Jumlah Pemesanan </label>
                                <div class="col-md-8">
                                    <input  type="number" class="form-control" name="qty" required>
                                </div>
                            </div>	
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Ongkir</label>
                                <div class="col-md-8">
                                    <input  type="text" class="form-control" name="ongkir" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" required>
                                </div>
                            </div>								
                            <div class="form-group" style="padding:20px;">
                                <label class="col-md-4 control-label">Alamat </label>
                                <div class="col-md-8">
                                    <textarea name="alamat" class="textarea" placeholder="Tuliskan Alamat Pengirimanya" style="width: 100%; height: 200px; font-size: 14px; font-family: 'ProximaNova', sans-serif !important; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
								</div>
                            </div>								
							<div class="form-group" style="padding:20px;">
							<button name="simpanpo" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-send-o"></i> Dikirim</button>
							</div>	
					</form>
                </div><!-- /.col -->				
				<script src="<?php echo $c_cdn;?>/new/javascript/v1/admin-kota.js"></script>					
            </div>				
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <form action="" method="post">
                        <input type="hidden" name="kodeord" value=" <?php if(isset($d['order_id'])){echo $d['order_id'];} else {echo $e['order_id'];} ?>">
                        <button name="btndikirim" class="btn btn-success pull-right" style="margin-right: 5px;"><i class="fa fa-send-o"></i> Dikirim</button>
                        <button name="btnproses" class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-spinner"></i> Proses</button>
                        <button name="btncancel" class="btn pull-right" style="margin-right: 5px;"><i class="fa fa-times"></i> Cancel Pesanan</button>
                    </form>					
                </div>
            </div>
        </section><!-- /.content -->
<?php break;
    case 'pembayaran':
    $jml_p = mysql_fetch_array(mysql_query("select count(pembayaran_id) as jml_pembayaran from pembayaran"));
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">                        
                        <h3 class="box-title">Konfirmasi Pembayaran (<?php echo $jml_p['jml_pembayaran']; ?>)</h3>
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
                        <form name="formlist[0]" action="../page/order/proses.php?page=order&act=aksipembayaran" method="post">
                            <table class="table table-hover" style="font-size:90%">
                                <tr>
                                    <th colspan="9">
                                        <div class="pull-left box-tools"> 
                                            <div class="">
                                                <button name="btnhapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                                <button name="btnbatal" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Batalkan Verifikasi</button>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr style="background-color: #F3F4F5">
                                    <th style="text-align:center;"><input type="checkbox"  name="allbox" onclick="checkAll(0);" /></th>
                                    <th>Tgl. Transfer</th>
                                    <th>ID Pemesanan</th>
                                    <th>Bank</th>
                                    <th>Atas Nama</th>
                                    <th>Rek. Pemilik</th>
                                    <th>Rek. Tujuan</th>
                                    <th>Jumlah Transfer (Rp)</th>
                                    <th>Jumlah Tagihan (Rp)</th>
                                </tr>
                                <?php
                                $d = mysql_query("select t.tgl_transfer, t.order_id, t.bank, t.atas_nama, t.rek_cust, t.rek_admin, sum(t.jml_transfer) as totalbayar,  t.jml_transfer, t.ket, t.dilihat, o.pelunasan, sum(od.total) as subtotal 
								from pembayaran t, orders o, order_detail od where t.order_id=od.order_id and t.order_id=o.order_id group by od.order_id order by t.pembayaran_id desc");
                                if (mysql_num_rows($d)>0) {
                                    while ($data = mysql_fetch_array($d)) {
                                        if ($data['pelunasan']=="1") {
                                            $label = "<i class=\"fa fa-check\" style=\"color:#84ad05 \"></i>";
                                        } else {
                                            $label = "";
                                        }

                                        if ($data['dilihat']==0) {
                                            $bold = "font-weight:bold";
                                        } else {
                                            $bold = "font-weight:normal";
                                        }
                                ?>
                                <tr>
                                    <td align="center"><input type="checkbox" value="<?php echo $data['order_id']; ?>" name="ordid[]"></td>
                                    <td style="<?php echo $bold ?>"><?php echo date('d/m/Y', strtotime($data['tgl_transfer'])); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo "<a href='".$c_url."/admin/ws-order/detilpembayaran?id=$data[order_id]'>".$data['order_id']."</a> ".$label; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['bank']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['atas_nama']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['rek_cust']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['rek_admin']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['totalbayar'], 0,',','.'); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['subtotal'], 0,',','.'); ?></td>
                                </tr>  
                                <?php
                                    }
                                } else {
                                ?>
                                <tr>
                                    <td colspan="7" align="center">Tidak ada daftar pembayaran</td>
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
<?php break;
    case 'penawaran':
    $jml_n = mysql_fetch_array(mysql_query("select count(pid) as jml_nego from penawaran"));
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">                        
                        <h3 class="box-title">Permintaan Nego Harga (<?php echo $jml_n['jml_nego']; ?>)</h3>
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
                        <form name="formlist[0]" action="../page/order/proses.php?page=order&act=aksipenawaran" method="post">
                            <table class="table table-hover" style="font-size:90%">
                                <tr>
                                    <th colspan="9">
                                        <div class="pull-left box-tools"> 
                                            <div class="">
                                                <button name="btnhapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
                                                <button name="btnbatal" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Batalkan Verifikasi</button>
												<button name="btnok" class="btn btn-success btn-sm"><i class="fa fa-undo"></i> Terima Penawaran</button>
                                            </div>
                                        </div>
                                    </th>
                                </tr>
                                <tr style="background-color: #F3F4F5">
                                    <th style="text-align:center;"><input type="checkbox"  name="allbox" onclick="checkAll(0);" /></th>
                                    <th>Tgl. Transfer</th>
                                    <th>Tipe Mesin</th>
                                    <th>Atas Nama</th>
									<th>Status</th>
                                    <th>Harga Mesin Asli</th>
                                    <th>Harga Nego</th>
                                </tr>
                                <?php
                                $d = mysql_query("select * from penawaran order by tanggal desc");
                                if (mysql_num_rows($d)>0) {
                                    while ($data = mysql_fetch_array($d)) {
                                        if (($data['status'])=="Proses") { $label = ""; } 
										else { $label = "<i class=\"fa fa-check\" style=\"color:#84ad05 \"></i>"; }										
										
                                        if ($data['dilihat']==0) {$bold = "font-weight:bold";} 
										else {$bold = "font-weight:normal";}
									$mesin = mysql_fetch_array(mysql_query("select * from produk where  id_produk='".$data['id_produk']."'"));		
                                ?>
                                <tr>
                                    <td align="center"><input type="checkbox" value="<?php echo $data['pid']; ?>" name="ordid[]"></td>
                                    <td style="<?php echo $bold ?>"><?php echo date('d/m/Y', strtotime($data['tanggal'])); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo "<a href='".$c_url."/admin/ws-order/detailpesanan?id=$data[pid]'>".$mesin['nama_produk']."</a> ".$label; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo $data['nama']; ?></td>
									<td style="<?php echo $bold ?>"><?php echo $data['status']; ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['harga_mesin'],0,",","."); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['harga_nego'],0,",","."); ?></td>
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

    case 'detilpembayaran':
        $msg = "";
        if (isset($_REQUEST['btnverifikasi'])) {
            $idord = $_REQUEST['id'];
            $prosesverif = mysql_query("update orders set pelunasan='1' where order_id='$idord'");
            if ($prosesverif) {
                $msg = "<div class=\"alert alert-success\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-check\"></i>
                            <b>Sukses:</b> Berhasil diverifikasi.
                        </div>"; 
            }
        }
         if (isset($_REQUEST['btnbatalverifikasi'])) {
            $idord = $_REQUEST['id'];
            $prosesverif = mysql_query("update orders set pelunasan='0' where order_id='$idord'");
            if ($prosesverif) {
                $msg = "<div class=\"alert alert-info\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-info\"></i>
                            <b>Sukses:</b> Verifikasi Pembayaran dibatalkan.
                        </div>"; 
            }
        }

        //proses get informasi
        if (isset($_REQUEST['id'])) {
            $kodeord = $_REQUEST['id'];     
            $d = mysql_fetch_array(mysql_query("select o.order_id, o.nama, o.kota, o.provinsi, o.alamat, o.kodepos, o.phone, o.tgl_pesan, o.pelunasan, c.cust_fn, c.cust_mail from orders o, cust_users c where order_id='$kodeord'"));
            $c = mysql_query("select p.nama_produk,  p.harga_baru, o.qty, o.total from order_detail o, produk p where o.produk_id=p.id_produk and o.order_id='$kodeord'");
        
            //set dilihat menjadi 1
            mysql_query("update pembayaran set dilihat='1' where order_id='$kodeord'");
        ?>
        <div class="pad margin no-print">
            <?php echo $msg; ?>
        </div>
        <section class="content invoice">                    
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-"></i> Detail Pembayaran
                        <small class="pull-right"></small>
                    </h2>                                              
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address>
                        <strong><?php echo $d['nama']?></strong><br>
                        <?php echo $d['alamat']?><br>
                        <?php echo $d['kota']." ".$d['kodepos']?><br>
                        <?php echo $d['provinsi']?><br>
                        Phone: <?php echo $d['phone']?><br/>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>ID Pemesanan</b>
                    <h3 style="margin: 0"><?php echo $d['order_id']?></h3>
                    Tanggal: <?php echo date('d/m/Y', strtotime($d['tgl_pesan']))?><br/>
                    Akun: <?php echo $d['cust_fn']?> (<?php echo $d['cust_mail']?>)<br>
                    Pembayaran: <?php echo ($d['pelunasan']=="1") ? '<span style="color:#84AD05"><i class="fa fa-check-square-o"></i> Terverifikasi</span>' : '<span style="color:#F4543C"><i class="fa fa-clock-o"></i> Menunggu</span>'; ?>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center">No</th>
                                <th>Produk</th>
                                <th style="text-align:center">Harga</th>
                                <th style="text-align:center">Qty</th>
                                <th style="text-align:center">Total</th>
                            </tr>                                    
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            while ($data = mysql_fetch_array($c)) {
                            ?>                                                                  
                            <tr>
                                <td align="center"><?php echo $no; ?></td>
                                <td style="text-align: left; width:40%;"><?php echo $data['nama_produk']; ?></td>
                                <td align="center"><?php echo "Rp. ".number_format($data['harga_baru'], 0,',','.'); ?></td>
                                <td align="center"><?php echo $data['qty']; ?></td>
                                <td align="center"><?php echo "Rp. ".number_format($data['total'], 0,',','.'); ?></td>                                             
                            </tr>   
                            <?php
                                $no++;
                            }
                            $sub = mysql_fetch_array(mysql_query("select sum(total) as subtotal from order_detail where order_id='$kodeord' group by order_id"));
                            ?>
                            <tr>
                                <td colspan="4" align="right"><strong>Subtotal</strong></td>
                                <td align="center"><strong><?php echo "Rp. ".number_format($sub['subtotal'], 0,',','.'); ?></strong></td>
                            </tr>  
                        </tbody>
                    </table>                            
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="row">
                <!-- accepted payments column -->
                <?php
                                $de = mysql_query("select * from pembayaran where order_id='$kodeord'");
                                while ($p = mysql_fetch_array($de)) {
                 ?>	
				<div class="col-xs-12" style="margin-bottom:20px;">
                <div class="col-lg-6" style="overflow:hidden;height: 328px;">
                <!--kosongkan-->   
				<?php if(!empty($p['bukti'])){?><a href="<?php echo $c_cdn_img."/bukti-pembayaran/".$p['bukti'];?>"><img id="img_prev" src="<?php echo $c_cdn_img."/bukti-pembayaran/".$p['bukti'];?>" /></a><?php } else {?>
				<img id="img_prev" src="<?php echo $c_cdn;?>/new/admin/img/nopreview.jpg" />
				<?php } ?>				
                </div><!-- /.col -->

                <div class="col-lg-6">
                    <p class="lead">Tgl. Transfer <?php echo date('d/m/Y', strtotime($p['tgl_transfer']))?></p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width:50%">Bank</th>
                                <td><?php echo $p['bank']?></td>
                            </tr>
                            <tr>
                                <th>Atas Nama</th>
                                <td><?php echo $p['atas_nama']?></td>
                            </tr>
                            <tr>
                                <th>No. Rekening</th>
                                <td><?php echo $p['rek_cust']?></td>
                            </tr>
                            <tr>
                                <th>Rek. Tujuan</th>
                                <td><?php echo $p['rek_admin']?></td>
                            </tr>
                            <tr>
                                <th>Jumlah Transfer</th>
                                <td><?php echo "Rp. ".number_format($p['jml_transfer'], 0,',','.');?></td>
                            </tr>
                            <tr>
                                <th>Jumlah Tagihan</th>
                                <td><?php echo "Rp. ".number_format($sub['subtotal'], 0,',','.');?></td>
                            </tr>
                            <tr>
                                <th>Keterangan</th>
                                <td><?php echo $p['ket']?></td>
                            </tr>
                        </table>
                    </div>
                </div><!-- /.col -->
				</div>
		<?php } ?>
                            <table class="table table-hover" style="font-size:90%">
                                <tr style="background-color: #F3F4F5">
                                    <th>Jumlah Transfer (Rp)</th>
                                    <th>Jumlah Tagihan (Rp)</th>
									<th>Kurang Bayar (Rp)</th>
                                </tr>
                                <?php
                                $d = mysql_query("select t.tgl_transfer, t.order_id, t.bank, t.atas_nama, t.rek_cust, t.rek_admin, sum(t.jml_transfer) as totalbayar,  t.jml_transfer, t.ket, t.dilihat, o.pelunasan, sum(od.total) as subtotal 
								from pembayaran t, orders o, order_detail od 
								
								where t.order_id=od.order_id and t.order_id=o.order_id and o.order_id='$kodeord'
								
								group by od.order_id order by t.pembayaran_id desc");
                                if (mysql_num_rows($d)>0) { while ($data = mysql_fetch_array($d)) {
									$kurangbayar=$data['subtotal']-	$data['totalbayar'];
									$bold = "font-weight:bold";
                                ?>
                                <tr>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['totalbayar'], 0,',','.'); ?></td>
                                    <td style="<?php echo $bold ?>"><?php echo number_format($data['subtotal'], 0,',','.'); ?></td>
									<td style="<?php echo $bold ?>"><?php echo number_format($kurangbayar, 0,',','.'); ?></td>
                                </tr>  
                                <?php
                                    }
                                } else {
                                ?>
                                <tr>
                                    <td colspan="7" align="center">Tidak ada daftar pembayaran</td>
                                </tr>
                                <?php } ?>                        
                            </table>
						
            </div><!-- /.row -->
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <div class="col-lg-12" style="margin-bottom:10px;"><button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button></div>
                    <form action="" method="post">
                        <input type="hidden" name="kodeord" value="<?php echo $d['order_id']?>">
                        <div style="float:left;"><button name="btnverifikasi" class="btn btn-primary pull-right" style="margin-right: 5px; font-size:12px;"><i class="fa fa-check-square-o"></i> Verifikasi</button></div>
                        <div style="float:right'"><button name="btnbatalverifikasi" class="btn pull-right" style="margin-right: 5px;font-size:12px;"><i class="fa fa-undo"></i> Batalkan Verifikasi</button></div>
                    </form>
                </div>
            </div>
        </section><!-- /.content -->
        <?php }
        break;

    case 'detailpesanan':
        $msg = "";
        //proses verifikasi
        if (isset($_REQUEST['btnverifikasi'])) {
            $idord = $_REQUEST['id'];
			$status="Diterima";
            $prosesverif = mysql_query("update penawaran set dilihat='1', status='$status' where pid='$idord'");
            if ($prosesverif) {
                $msg = "<div class=\"alert alert-success\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-check\"></i>
                            <b>Sukses:</b> Berhasil diverifikasi.
                        </div>"; 
            }
        }
         if (isset($_REQUEST['btnbatalverifikasi'])) {
            $idord = $_REQUEST['id'];
			$status="Ditolak";
            $prosesverif = mysql_query("update penawaran set dilihat='1', status='$status' where pid='$idord'");
            if ($prosesverif) {
                $msg = "<div class=\"alert alert-info\" style=\"margin-bottom: 0!important;\">
                            <i class=\"fa fa-info\"></i>
                            <b>Sukses:</b>Penawaran Ditolak.
                        </div>"; 
            }
        }

        //proses get informasi
        if (isset($_GET['id'])) {
            $kodeord = $_GET['id'];     
            $d = mysql_fetch_array(mysql_query("select * from penawaran where pid='$kodeord'"));
            $c = mysql_query("select p.nama_produk,  p.harga_baru, o.id_produk from penawaran o, produk p where o.id_produk=p.id_produk and o.pid='$kodeord'");
            //set dilihat menjadi 1
            mysql_query("update penawaran set dilihat='1' where pid='$kodeord'");
        ?>
        <div class="pad margin no-print">
            <?php echo $msg; ?>
        </div>
        <section class="content invoice">                    
            <!-- title row -->
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-"></i> Detail Nego
                        <small class="pull-right"></small>
                    </h2>                                              
                </div><!-- /.col -->
            </div>
            <!-- info row -->
            <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                    <address>
                        <strong><?php echo $d['nama']?></strong><br>
                        <?php echo $d['alamat']?><br>
                        Phone: <?php echo $d['telepon']?><br/>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>ID Pemesanan</b>
                    <h3 style="margin: 0"><?php echo $d['pid']?></h3>
                    Tanggal: <?php echo date('d/m/Y', strtotime($d['tanggal']))?><br/>
                    Email : (<?php echo $d['email']?>)<br>
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
                                <th>Produk</th>
                                <th style="text-align:center">Harga</th>
                                <th style="text-align:center">Harga Nego</th>
                            </tr>                                    
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            while ($data = mysql_fetch_array($c)) {
                            ?>                                                                  
                            <tr>
                                <td align="center"><?php echo $no; ?></td>
                                <td style="text-align: left; width:40%;"><?php echo $data['nama_produk']; ?></td>
                                <td align="center"><?php echo "Rp. ".number_format($d['harga_mesin'], 0,',','.'); ?></td>
								<td align="center"><?php echo "Rp. ".number_format($d['harga_nego'], 0,',','.'); ?></td>                                 
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
            <!-- this row will not appear when printing -->
            <div class="row no-print">
                <div class="col-xs-12">
                    <div class="col-lg-12" style="margin-bottom:10px;"><button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button></div>
                    <form action="" method="post">
                        <input type="hidden" name="kodeord" value="<?php echo $d['order_id']?>">
                        <div style="float:left;"><button name="btnverifikasi" class="btn btn-primary pull-right" style="margin-right: 5px; font-size:12px;"><i class="fa fa-check-square-o"></i> Terima </button></div>
                        <div style="float:right'"><button name="btnbatalverifikasi" class="btn pull-right" style="margin-right: 5px;font-size:12px;"><i class="fa fa-undo"></i> Tolak </button></div>
                    </form>
                </div>
            </div>
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