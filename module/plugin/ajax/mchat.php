<?php require_once(PLUG.DS."contact.php"); header('Content-Type: text/html');?>
<style>
.sidebar-mask, .sidebar {
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100%;
    background-color: #fff;
    outline: none;
    z-index: 2147483647;
    overflow-x: hidden!important;
    overflow-y: auto!important;	
}
.mchat header{    background: #fff!important;float: left;width: 100%;height:45px;    box-shadow: 0 1px 6px rgba(0,0,0,.12);}
.mchat header a{text-align: center;}
.mchat header a{float:left;line-height: 30px;background: none;font-size: 14px;margin: 8px;width:24px;}
.mchat header h5,.mchat header .h5{font-size:16px;float:left;width:85%;margin: 8px 0;line-height: 15px;text-align: left;white-space:nowrap;text-overflow: ellipsis;}
.mchat .searchbg{
    padding: 45px 0 60px;
    background: #eee;	
}
.mchat .hasilnya{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    padding: 10px 20px;    
	margin: 10px 0;
    width: 95%;
    background: #fff;
}
.mchat .judul-hasilnya {
    border-bottom: 1px solid #eee;
    margin-bottom: 5px;
    padding-top: 5px;
    padding-bottom: 5px;width: 98%;
}
.mchat .panel2 {
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    vertical-align: middle;
    text-align: left;
    margin-bottom: 10px;
    padding: 10px;
    background: #fff;
}
.mchat .menuli {
    font-size: 1.3rem;
    display: block;
    padding: 10px;
    margin: 0;
    border-bottom: 1px solid #eee;
}
.tblhub:after , .mchat .menuli:after {
    content: "";
    background-image: url(<?php echo $c_url;?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;
    margin-right: 10px;
    float: right;
}
.icohub{width: 16px;height: auto;vertical-align: middle;margin-right: 5px;}
.tblhub{
    margin: 5px 0;
    font-size: 1.3rem;
    display: block!important;
    width: 90%;
}
.mchat .chatbox {
	display:inline-block;
    width: 82%;
    margin: 5px!important;
    padding: 0;
}
.mchat .chatbox img {width: 60px!important;height:60px!important;border-radius: 50%!important;}
.mchat .chatbox .labelmar {margin: 25px 0;}
.mchat .sbslide {
	padding:10px 0;
    width: 100%;
    z-index: 2;
    white-space: nowrap!important;
    overflow-x: auto!important;
    overflow-y: hidden!important;
}

.mchat .kotakmar img {width: 30px;height: auto;border-radius: 4px;padding: 5px 0;}
.mchat .labelmar{margin:10px;font-size: 11px;}
.mchat .kotakisi{margin:0;}
</style>		
		<div class="sidebar mchat">
			<header>
				<a class="fleft vjax"  data-load="hide-mchat" id="klose-mchat"><i class="fa fa-arrow-left"></i></a>
				<a class="h5" href=""><h5><b>Kontak Kami atau Hubungi Kami</b></h5></a>
			</header>
			<div class="searchbg">
				<div class="hasilnya">
					<div class="judul-hasilnya"><b>Hallo, Selamat datang di <?php echo $site_name;?></b></div>
					<div class="isinyaan">		
						Terimakasih sudah menghubungi kami, bantuan apa yang kamu butuhkan ??
					</div>					
				</div>
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='tel:".$hp."'";?> class="kotakmar">
						<img class="lazy" width="50" height="50" data-src="<?php echo $c_url;?>/compressed/amp/help/telp.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Klik Disini : Telephone Divisi <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
					</a>
				</div>
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='sms:".$hp."?body= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="kotakmar">
						<img class="lazy" width="50" height="50" data-src="<?php echo $c_url;?>/compressed/amp/help/sms.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Klik Disini : SMS Divisi <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
					</a>
				</div>	
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='whatsapp://send?phone=".$hp."&text= Selamat Pagi. Pak ".$marketing_mesin.", Saya mau bertanya tentang Mesin Fotocopy. dari web : ".$url_sekarang."'";?> class="kotakmar">
						<img class="lazy" width="50" height="50" data-src="<?php echo $c_url;?>/compressed/amp/help/wa.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>Chat Whatsapp : Divisi <?php echo $posisi_marketing; ?></b><br>
							<?php echo $marketing_mesin." - ".$telp_original; ?>
						</span><br>
					</a>
				</div>					
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='mailto:".$c_email_admin."'";?> class="kotakmar">
						<img class="lazy" width="50" height="50" data-src="<?php echo $c_url;?>/compressed/amp/help/gmail.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b>E-Mail Resmi <?php echo $site_name; ?></b><br>
							<?php echo $c_email_admin; ?>
						</span><br>
					</a>
				</div>
				<div class="kotakisi">
					<a aria-label="Mesin Fotocopy" <?php echo "href='".$c_url."/hubungi'";?> class="kotakmar">
						<img class="lazy" width="50" height="50" data-src="<?php echo $c_url;?>/compressed/amp/help/map.svg" alt="Mesin Fotocopy"/>
						<span class="labelmar">
							<b><?php echo $d_alamat2; ?></b><br>
							<?php echo $d_alamat3; ?>
						</span><br>
					</a>
				</div>	
				<div class="hasilnya">
					<div class="judul-hasilnya"><b>Kontak & Bantuan Lainnya di <?php echo $site_name;?></b></div>
					<div class="isinyaan">		
						Silahkan hubungi nomor petugas dibawah sesuai dengan kepentingannya
					</div>
					<div class="sbslide">
					<?php $a=0; foreach ($konten as $obj_key =>$book) { $a= $a+1; ?>
					<div class="kotakisi chatbox">
						<a aria-label="Mesin Fotocopy" 
						<?php echo "href='whatsapp://send?phone=".$book[2]."&text= Selamat Pagi. Bapak / Ibu ".$obj_key.", Saya mau bertanya tentang ".$book[1]." Mesin Fotocopy. dari web : ".$url_sekarang."'";?>
						<?php echo "href='tel:".$hp."'";?> class="kotakmar">
							<img class="lazy" width="50" height="50" data-src="<?php echo $book[3];?>" alt="<?php echo ucwords(strtolower($obj_key));?>"/>
							<span class="labelmar">
								<b>Klik Disini : Chat WA - <?php echo ucwords(strtolower($book[1]));?></b><br>
								<?php echo ucwords(strtolower($obj_key));?> - <?php echo $book[0];?>
							</span><br>
						</a>
					</div>
					<?php }  ?>
					</div>
				</div>			
			</div>	
			<div class="footer">
				<a aria-label="Home" href="<?php echo $c_url;?>">
					<img class="lazy" width="20" height="20" alt="home" title="home" data-src="<?php echo $c_url; ?>/compressed/amp/footer/home2.svg" />
					<p>Home</p>
				</a>
				<a aria-label="Telephone" data-load="keranjanga" class="vjax" role="button">
					<img class="lazy" width="20" height="20" alt="telp" title="telp" data-src="<?php echo $c_url; ?>/compressed/amp/footer/cart1.svg" />
					<p>Blog</p>
				</a>
				<a aria-label="SMS" href="<?php echo $c_url;?>/panduan-pelanggan" role="button">
					<img class="lazy" width="20" height="20" alt="sms" title="sms" data-src="<?php echo $c_url; ?>/compressed/amp/footer/help1.svg" />
					<p>Bantuan</p>
				</a>
				<a aria-label="WA" data-load="mchat" class="vjax" role="button">
					<img class="lazy" width="20" height="20" alt="wa" title="wa" data-src="<?php echo $c_url; ?>/compressed/amp/footer/chat2.svg" />
					<p>Chat</p>
				</a>
				<a aria-label="Akunku"  href="<?php echo $c_url;?>/masuk" role="button">
					<img class="lazy" width="20" height="20" alt="user" title="user" data-src="<?php echo $c_url; ?>/compressed/amp/footer/user1.svg" />
					<p>Akun</p>
				</a>		
			</div>	
		</div>