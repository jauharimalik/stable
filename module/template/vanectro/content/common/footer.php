<style>
footer {
    padding-top: 11px;
    background-color: #4D4D4D;
    position: relative;
}
.f-top {
    padding-bottom: 15.5px;
}
.f-top, .f-mid {
    border-bottom: 1px solid #707070;
}
.cfbox {
    justify-content: space-between;
}
.cfbox .foot-box {
    width: 50%;
}
.cfbox .foot-box:nth-child(2) {
    max-width: 362px;
}
.cfbox h3, .f-mid .foot-box:nth-child(2) a {
    color: white;
    font-size: 20px;
    letter-spacing: 0.1px;
    line-height: 24px;
}
.con-contact-reserv p {
    font-size: 14px;
    letter-spacing: 0.1px;
    line-height: 25px;
    color: white;
}
.con-contact-reserv strong {
    font-size: 13px;
    line-height: 15px;
    margin-bottom: 10px;
    text-transform: uppercase;
}
.con-contact-reserv span {
    font-weight: 200;
    padding-bottom: 25px;
}
.f-sosmed img {
    width: auto;
    height: 16px;
    margin-right: 30px;
    opacity: 0.35;
    transition: opacity 0.2s ease-in-out;
}
.con-contact-reserv {
    margin-top: 12.2px;
    margin-bottom: 10px;
    align-items: flex-start;
    justify-content: space-between;
}
.f-mid {
    padding: 43.5px 0;
}
.f-top ul {
    display: flex;
    flex-wrap: wrap;
    margin: 20px 0;
    padding: 10px 0;
}
.f-top li {
    color: white;
    list-style: none;
    font-size: 11px;
    font-weight: 400;
    letter-spacing: 1px;
    line-height: 13px;
    width: calc(100% / 3);
    margin-bottom: 19px;
    opacity: 0.62;
    transition: opacity 0.2s ease-in-out;
}
.f-top .foot-box:nth-child(2) span {
    font-size: 13px;
    line-height: 20px;
    letter-spacing: 0.1px;
    font-weight: 200;
}
.ft-arw-up {
    position: absolute;
    top: 89px;
    font-weight: 500;
    color: white;
    font-size: 11px;
    letter-spacing: 1px;
    opacity: 0.58;
    padding-left: calc(42px + 18.5px);
    right: 41px;
    transform-origin: right;
    transform: rotate(90deg) translateX(100%);
}
.ft-arw-up::before, .ft-arw-up::after {
    content: '';
    position: absolute;
    left: 0;
    transform: translateY(-50%);
    top: 50%;
    display: inline-block;
    border-top: 1px solid white;
    width: 42px;
}
.ft-arw-up::after {
    width: 8px;
    transform-origin: left;
    transform: rotate(-45deg) translateY(-50%);
}
.chatfooter{
	background: #fff;
    border: 1px solid #ccc;
    box-shadow: 0 2px 4px 0 rgba(27,27,27,.2);
    border-radius: 8px 8px 0 0;
    bottom: 0;
    display: block;
    position: fixed;
    right: 10px;
    width: 320px;
    z-index: 90;
    overflow:hidden;
}
.chatfooter h4{font-size:16px}
.chatfooter .chatheader{
    align-items: center;
    color: #1a73e8;
    cursor: pointer;
    display: flex;
    padding: 15px 20px;
}
.lelang-btn {
    margin-top: 10px;
    background: #39a22e;
    padding: 8px 14px;
    border-radius: 3px;
}
.color-white {
    color: #fff !important;
}
.chatfooter h4{
    font-weight: 500;
    margin: 0;
    padding: 0;
}
.chatfooter .chatheader i {
    fill: #1a73e8;
    height: 12px;
    margin-left: auto;
    width: 18px;
}
.chatfooter ul {
	margin: 0 0 20px 20px;;
    padding: 0 0 0 20px;
}
.chatfooter ul li {
    line-height: 25px;
    padding-bottom: 6px;
	font-size:16px;
}
.chatfooter .notelp i {
    height: 22px;
    margin-right: 10px;
    margin-top: -3px;
    width: 22px;
}
.chatfooter .notelp{font-size: 22px;padding: 20px;color:#083d77;cursor:pointer;}
.chatfooter .small{padding: 0 20px 0 55px;}
.tombollivechat {
    display: block!important;
    margin: 20px auto 5px!important;
    width: 80%;	
}
</style>
<div id="hilangsewa" class="chatfooter">
	<div class="chatheader" style="background:#23a2f4;">
		<h4 style="color:#fff;"> Online Chat - Butuh Bantuan ??</h4> 
		<i class=" turunchat fa fa-chevron-down"></i>
	</div>
	<div id="chatbody" class="chatbody" style="display:none">
		<div class="isichat">
			<ul>
				<li>Informasi Mesin Fotocopy</li>
				<li>Konsultasi Mesin Fotocopy</li>
				<li>Cara Pemesanan di <?php echo $site_name;?></li>
				<li>Kebutuhan Informasi Lainnya</li>
			</ul>
		</div>
		<div class="tombolchatfooter2">
			<b><span id="tombolchatfooter" class="notelp" >
				<i class="fa fa-phone"></i><span> <?php echo "$d_telp";?> *</span>
			</span></b>
		</div>
		<span id="kontakutama2" class="kontakutama2"></span>
		<p class="small">SMS - Telp - Whatsapp : 08.00 - 17.00 WIB</p>
		<span id="tombollivechat" class="tombollivechat btn color-white lelang-btn search-button"> <i class="fa fa-whatsapp btn-link-icon"></i> Chat Whatsapp Penjual </span>
	</div>
</div>  
<script async >
	$(".kontakutama2").load("<?php echo $c_url;?>/ajaxp-nojo");	
	$(".chatheader").click(function(){
		var arahpanah = document.getElementById('chatbody');
		if (arahpanah.style.display === 'none') {
			$(".turunchat").css("transform","rotate(0deg)");
			$(".chatheader").css("background","none");
			$(".chatheader h4").css("color","#000");
		} else {
			$(".turunchat").css("transform","rotate(180deg)");
			$(".chatheader").css("background","#23a2f4");
			$(".chatheader h4").css("color","#fff");			
		}	
		$(".chatbody").toggle();
	});
	
	$(".toup").click(topFunction);
	
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}	
</script>	
   <footer>
      <div class="container">
        <!-- NOTE: rooftop footer -->
        <div class="cfbox f-top flex">
          <div class="foot-box">
			<h3>FOR RESERVATIONS</h3>
            <ul class="theMenu" id="navMenu-1588494017" >
				<li class=' accommodation'><a href="accommodation/index.html" class=''>ACCOMMODATION</a></li>
				<li class=' dining'><a href="dining/index.html" class=''>DINING</a></li>
				<li class=' spa'><a href="spa/index.html" class=''>SPA</a></li>
				<li class=' facilities'><a href="facilities/index.html" class=''>FACILITIES</a></li>
				<li class=' activities'><a href="activities/index.html" class=''>ACTIVITIES</a></li>
				<li class=' about'><a href="about/index.html" class=''>ABOUT</a></li>
				<li class=' gallery'><a href="gallery/index.html" class=''>GALLERY</a></li>
				<li class=' offers'><a href="special-offers/index.html" class=''>OFFERS</a></li>
				<li class=' contact'><a href="contact-information/index.html" class=''>CONTACT</a></li>
				<li class=' information'><a href="contact-information/index.html" class=''>INFORMATION</a></li>
				<li class=' policies'><a href="policies/index.html" class=''>POLICIES</a></li>
			</ul>
          </div>
          <div class="foot-box k123">
           <h3>FOR RESERVATIONS</h3>
           <div class="con-contact-reserv flex center-flex">
              <p class="alamatfooter">
                <strong><?php echo $site_name;?></strong><br>
                <span><a href="<?php echo strtolower($d_mapurl); ?>" target="_blank"><?php echo ucwords(strtolower($d_alamat1));?></a></span><br>
                P: <a href="tel:+<?php echo $d_telp; ?>"><?php echo $d_telp;?></a> <br>
                P: <a href="tel:+<?php echo $d_telp2; ?>"><?php echo $d_telp2;?></a> <br>
                E: <a href="mailto:<?php echo $c_email_admin; ?>"><?php echo $c_email_admin; ?></a>
              </p>
           </div>
            <div class="f-sosmed">
					<a href="https://www.instagram.com/<?php echo strtolower($d_instagram);?>/" target="_blank"><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $c_cdn;?>/assets/images/ig.svg"></a>
					<a href="<?php echo strtolower($d_facebook);?>" target="_blank"><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $c_cdn;?>/assets/images/fb.svg"></a>
					<a href="<?php echo strtolower($d_twitter);?>" target="_blank"><img src='<?php echo $c_url;?>/compressed/loading2.svg'  data-src="<?php echo $c_cdn;?>/assets/images/twitter.svg"></a>
              </div>		   
          </div>
        </div>
      </div>

      <a class="ft-arw-up toup">BACK TO TOP</a>
    </footer>
    <!-- END FOOTER -->