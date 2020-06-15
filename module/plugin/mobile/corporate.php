	<div id="meshSection3" class="meshSection fusion-fullwidth pattern_overlayed_dotted_2" style="margin-top:20px;margin-bottom:0px!important; background: #969696!important;">
            <div class="meshTitle" style="padding-bottom: 25px;">
                <div class="meshTitleBhinneka"><b>Happy Client </b> Vanectro</div>
            </div>
            <div id="meshInfoslider" class="meshInfoslider" style="overflow: hidden; visibility: visible;">						
				<?php $data_produk = ("select *  from happy_client ORDER BY happy_client.tanggal"); $count=1; $result = $db->query($data_produk); while ($a_data = $result->fetch_array(MYSQLI_BOTH)){$count++;} ?>				
                <div class="meshInfosliderFrame" style="list-style: none; width: <?php echo ($count*230);?>px; transition-duration: 1000ms; transform: translate3d(0px, 0px, 0px);">
						<?php
						$result = $db->query($data_produk);
						while ($a_data = $result->fetch_array(MYSQLI_BOTH)) {		
						$a_foto = $a_data['foto'];
						$a_ket_foto = $a_data['keterangan']; 
						$a_tanggal_foto = $a_data['tanggal']; 
						$a_lokasi_foto = $a_data['lokasi']; 			
						?>
					
                    <div class="divMeshSlide" style="width: 1445px; display: inline-block; vertical-align: top;">
                        <div style="text-align: center" class="shift-image">
                            <img src="<?php echo $c_cdn_img.DS.$a_foto; ?>" alt="<?php echo $a_ket_foto ?>" class="replace-2x" style="width: 270px; height:200px;">
                        </div>
                        <div style="font-weight: bold; text-align: center;"><?php echo $a_ket_foto ?></div>
                        <div class="meshDescription"><?php echo $a_lokasi_foto ?>
                        </div>
                    </div>
					<?php } ?>
				</div>
                <div style="position: relative; padding-top: 48px;">
                    <div id="divPagerMesh">
                        <a class="lnkMeshPager inline"></a> <a class="lnkMeshPager inline"></a> <a class="lnkMeshPager inline"></a>
                        <a class="lnkMeshPager inline"></a> <a class="lnkMeshPager inline"></a> <a class="lnkMeshPager inline"></a>
                        <a class="lnkMeshPager lnkMeshActive inline"></a>
                    </div>
                </div>
            </div>
        </div>