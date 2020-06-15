<?php if(isset($loadcss)){ require_once STYLE_DIR.DS.$location; } ?>
<div class="cover-image">
	<div class="cover-image-list">
		<img src="<?php echo webpimage($data["bannertop"],1281,341); ?>" class="img-cover active" />
	</div>
	<div class="cover-clip"></div>
	<div class="cover-hero">
		<h1><?php echo $data["category_name"]; ?></h1>
		<p><?php echo $data["category_desc"]; ?></p>
	</div>
		<div class="svgelshape svgelshape-bottom" data-negative="false">
			<svg xmlns:dc="https://purl.org/dc/elements/1.1/" xmlns:cc="https://creativecommons.org/ns#" xmlns:rdf="https://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="https://www.w3.org/2000/svg" xmlns="https://www.w3.org/2000/svg" xmlns:sodipodi="https://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="https://www.inkscape.org/namespaces/inkscape" viewBox="0 0 1440.34 165.4" version="1.1" id="svg16" sodipodi:docname="xendit-section-shape.svg" inkscape:version="0.92.4 (5da689c313, 2019-01-14)">
			  <metadata id="metadata20">
				<rdf:rdf>
				  <cc:work rdf:about="">
					<dc:format>image/svg+xml</dc:format>
					<dc:type rdf:resource="https://purl.org/dc/dcmitype/StillImage"></dc:type>
				  </cc:work>
				</rdf:rdf>
			  </metadata>
			  <sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview18" showgrid="false" inkscape:zoom="0.19925851" inkscape:cx="720.16998" inkscape:cy="82.699997" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="0" inkscape:current-layer="svg16"></sodipodi:namedview>
			  <defs id="defs4">
				<style id="style2">.b{fill:#ebecf0;opacity:.3}</style>
			  </defs>
			  <path style="fill:none" inkscape:connector-curvature="0" d="M 1440,122 1247.74,13.08 A 100,100 0 0 0 1188.28,0.61 L 0,122" id="path6"></path>
			  <path style="opacity:0.3;fill:#ebecf0" inkscape:connector-curvature="0" d="m 1032.5,146.85 a 50,50 0 0 0 48.3,12.95 L 1440.34,63.52 V 0 L 885.7,0 Z" class="b" id="path8"></path>
			  <path style="opacity:0.3;fill:#ebecf0" inkscape:connector-curvature="0" d="m 1107.68,50.44 a 50,50 0 0 0 35.36,35.35 l 297.3,79.61 V 0 l -346.19,0 z" class="b" id="path10"></path>
			  <path style="fill:#ad1e1e" inkscape:connector-curvature="0" d="M 0.34,121.96 0,122" id="path12"></path>
			  <path style="fill:#ffffff" inkscape:connector-curvature="0" d="M 1440.34,0 0.34,0 V 122 L 1188.28,0.61 a 100,100 0 0 1 59.46,12.47 L 1440,122" id="path14"></path>
			</svg>
		</div>	
</div>

<div class="qoNbQ">
    <div class="container">
		<div class="gantunganbanner">
			<div class="judulkelebihan">Keunggulan <?php echo ucwords($data["category_short"]); ?> di <?php echo $site_name;?></div>
			<?php echo $data["keunggulan"]; ?>
		</div>
	</div>
</div>
<div class="fclear"></div>
<div class="sparator"></div>	
<div class="container">
	<div class="og">
		<div class="oy">
            <div class="cb">
				<?php 
					$vid_desc = explode("</h2>",$data["video_deskripsi"]); 
					$vid_h2 = str_replace('<h2 class="section-title">',"",$vid_desc[0]);
					$vid_h2 = str_replace("</h2>","",$vid_h2);
					
					$vid_sub = str_replace('<p class="section-subtitle">',"",$vid_desc[1]);
					$vid_sub = str_replace("</p>","",$vid_sub);					
				?>
				<h2 class="ox"><?php echo $vid_h2; ?></h2>
				<p class="ok"><?php echo $vid_sub; ?>.</p>
				<?php $vid_desc = explode("</h2>",$data["video_deskripsi"]); ?>
			</div>
		</div>	
	</div>
	<div class="ocatab">
		<?php echo $data["tabel_harga"]; ?>
	</div>
	<div class="ca">
		<img class="vjax" src="<?php echo $c_url;?>/compressed/loading2.svg" data-load="videoprofile" data-content="<?php echo $data["video_link"]; ?>" data-src="<?php echo webpimage($data["video_foto"],500,370); ?>" alt="jual mesin fotocopycanon" title="jual mesin fotocopycanon">
	</div>	
	
	<div class="fclear"></div>
	<div class="sparator"></div>	
	

	<div id="qahilang"  class="accordion-container">
		<div id="caris2">
			<div class="section-head">
				<h1 class="section-title">F.A.Q pengunjung <?php echo $site_name;?></h1>
				<p class="section-subtitle">
					Beberapa pertanyaan yang sering ditanyakan oleh pelanggan. Berikut adalah daftara pertanyaan yang sering ditanyakan pengunjung :
				</p>
			</div>
			<div class="QA" itemscope itemtype="https://schema.org/FAQPage">
	<?php 	
	$sql_qa = ("select *  from qa ORDER BY qa_sort  ASC LIMIT 12"); 
	$qa_result = $db->query($sql_qa);
	while ($faq = $qa_result->fetch_array(MYSQLI_BOTH)) {	
	?>			
				<div class="accordion" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"><?php echo $faq['qa_question'];?></div>
				<div class="accordion-item__body" id="answer-<?php echo $faq['idqa'];?>" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"> <?php echo $faq['qa_answer'];?> </div>
	<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>
