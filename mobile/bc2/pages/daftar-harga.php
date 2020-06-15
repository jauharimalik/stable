<div class="container-fluid container-full hala pt51">
<div class="halb hala">		
<amp-selector role="tablist"
  layout="container"
  class="ampTabContainer">
  <div role="tab"
    class="tabButton"
    selected
    option="spoilera"><i class="fa fa-list"></i> Harga</div>
	<div role="tabpanel" class="tabContent">
		<div class="container-fluid container-full">
			<div class="row">
				<div class="col-xs-12 margin-bottom-0">
					<div class="background-row bg-pelanggan text-center">
						<div class="background-row-content">
							<h3 class="row-1">Daftar Harga Mesin Fotocopy !!</h3>
							<h3 class="row-2">5 Jutaan - Ratusan</h3>
							<h3 class="row-3"> Update Terbaru  <?php echo date("M - Y");?> !!</h3>
						</div>
					</div>
				</div><!-- COL-XS-12 ENDS -->
			</div><!-- ROW ENDS -->
		</div><!-- CONTAINER-FLUID ENDS -->	
	<?php require_once $pages_daftar; ?>
	<div class="container-fluid">	
		<div class="row">
			<div class="col-xs-12">
			<center><a href="<?php echo $c_url;?>/download-daftar-harga-mesin-fotocopy" name="download2" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-download"></i> Download </a></center>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->		
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerb"><i class="fa fa-cloud-download"></i> Download</div>
  <div role="tabpanel" class="tabContent">
	<div class="container-fluid">	
		<div class="row">
			<div class="col-xs-12">
			<center><a href="<?php echo $c_url;?>/download-daftar-harga-mesin-fotocopy" name="download2" class="button chat2 primary-bg light-color margin-left-0"> <i class="fa fa-download"></i> Download </a></center>
			</div><!-- COL-XS-12 ENDS -->
		</div><!-- ROW ENDS -->
	</div><!-- CONTAINER-FLUID ENDS -->	
	
	</div>
  <div role="tab"
    class="tabButton"
    option="spoilerc"><i class="fa fa-legal"></i> Legalitas</div>
  <div role="tabpanel" class="tabContent">
				<div class="left">
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="rfq-title"><?php echo $legal_pt;?></div>
                        </div>
                        <div class="rfq-description">
							<p><?php echo $site_name;?> Merubah legalitasnya menjadi <?php echo $legal_pt;?>, dikarenakan beberapa alasan yang mendukung dan mengharuskan Kami 
							untuk upgrade Dokumen Legal, Kalau kamu takut jika tertipu silahkan Cek Dokumen Legal yang kami Miliki. </p><br>
                            <p><a class="alt-link"><b>Nomor Siup : </b><br><b><?php echo $legal_siup;?> </b></a></p><hr>
							<p><a class="alt-link"><b>TDP : </b><br><b><?php echo $legal_tdp;?> </b></a></p><hr>
							<p><a class="alt-link"><b>NPWP : </b><br><b><?php echo $legal_npwp;?> </b></a></p><hr>
							<p><a class="alt-link"><b>SK. Kementrian : </b><br><b><?php echo $legal_skmenteri;?> </b></a></p><hr>
                        </div>
                    </div>
                </div>
 </div>
</amp-selector>	
				<div class="left">
                    <div class="rfq-back-img">
                        <div class="sprite rfq-model"></div>
                    </div>
                    <div class="rfq-description-container">
                        <div class="rfq-header-home">
                            <div class="sprite-a rfq-logo-home"></div>
                            <div class="rfq-title">Info Pemesanan di <?php echo $c_title;?>??</div>
                        </div>
                        <div class="rfq-description">
                            <div class="rfq-description-title">"Silahkan hubungi Kami jika ada perihal yang ingin kamu pertanyakan via SMS / WA"</div>
                        </div>
						
					<div class="rfq-description-container">	
                        <div class="go-to-form-btn">
						<br><br>
                            <a href="sms:<?php echo $hp; ?>?body=Pak, Saya Mau Nego, Tolong, segera direspon ya? &#10; %0ATerima Kasih. &#10; %0A Saya : &#10; %0AKota: &#10; %0A" 
					class="button chat primary-bg light-color margin-left-0"> <i class="fa fa-comments"></i> Marketing 1 </a>	
					<br></br>	
					
                        </div>
					</div>	
                    </div>
                </div>	
</div>	
	</div><!-- SLIDER ENDS -->
	<?php  require_once PLUG.'/mobile/keunggulan.php'; ?>	

	