	<style amp-custom="">
@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(<?php echo $c_cdn;?>/new/css/fonts/MaterialIcons-Regular.eot);src:url(<?php echo $c_cdn;?>/new/css/fonts/MaterialIcons-Regular.woff2) format('woff2'),url(<?php echo $c_cdn;?>/new/css/fonts/MaterialIcons-Regular.woff) format('woff'),url(<?php echo $c_cdn;?>/new/css/fonts/MaterialIcons-Regular.ttf) format('truetype')}
@font-face{font-family:gotham;font-style:normal;font-weight:400;src:url(<?php echo $c_cdn;?>/new/css/fonts/gotham-medium-webfont.eot);src:url(<?php echo $c_cdn;?>/new/css/fonts/gotham-medium-webfont.woff2) format('woff2'),url(<?php echo $c_cdn;?>/new/css/fonts/gotham-medium-webfont.woff) format('woff'),url(<?php echo $c_cdn;?>/new/css/fonts/gotham-medium-webfont.ttf) format('truetype')}
@font-face{font-family:gotham;font-style:normal;font-weight:700;src:url(<?php echo $c_cdn;?>/new/css/fonts/gotham-bold-webfont.eot);src:url(<?php echo $c_cdn;?>/new/css/fonts/gotham-bold-webfont.woff) format('woff')}
@font-face{font-family:niveau;font-style:normal;font-weight:300;src:url(<?php echo $c_cdn;?>/new/css/fonts/light.woff2) format('woff2'),url(<?php echo $c_cdn;?>/new/css/fonts/light.woff) format('woff')}
@font-face{font-family:niveau;font-style:normal;font-weight:400;src:url(<?php echo $c_cdn;?>/new/css/fonts/regular.woff2) format('woff2'),url(<?php echo $c_cdn;?>/new/css/fonts/regular.woff) format('woff')}
@font-face{font-family:niveau;font-style:normal;font-weight:700;src:url(<?php echo $c_cdn;?>/new/css/fonts/bold.woff2) format('woff2'),url(<?php echo $c_cdn;?>/new/css/fonts/bold.woff) format('woff')}
@font-face{font-family:'Glyphicons Halflings';src:url(<?php echo $c_cdn;?>/new/css/fonts/glyphicons-halflings-regular.eot);src:url(<?php echo $c_cdn;?>/new/css/fonts/glyphicons-halflings-regular.eot?#iefix) format('embedded-opentype'),url(<?php echo $c_cdn;?>/new/css/fonts/glyphicons-halflings-regular.woff2) format('woff2'),url(<?php echo $c_cdn;?>/new/css/fonts/glyphicons-halflings-regular.woff) format('woff'),url(<?php echo $c_cdn;?>/new/css/fonts/glyphicons-halflings-regular.ttf) format('truetype'),url(<?php echo $c_cdn;?>/new/css/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular) format('svg')}.glyphicon{position:relative;top:1px;font-family:'Material icons';font-style:normal;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.glyphicon-time:before{content:"access_time"}.glyphicon-chevron-left:before{content:"keyboard_arrow_left"}.glyphicon-chevron-right:before{content:"keyboard_arrow_right"}.glyphicon-chevron-up:before{content:"keyboard_arrow_up"}.glyphicon-chevron-down:before{content:"keyboard_arrow_down"}.glyphicon-calendar:before{content:"perm_contact_calendar"}
hr{border: 2px solid #083d77;}
.ampTabContainer {display: flex;flex-wrap: wrap;}
.tabButton[selected] {outline: none;}
amp-selector [option][selected]{outline:none;}
.tabButton {list-style: none;flex-grow: 1;text-align: center;cursor: pointer;}	
#masterLogo {
    background-image: url(<?php echo $c_cdn_img;?>/mobile/vanectro-logo-web-mobile.png);
    height: 49px;
    width: 57%;
    background-position: center 49%;
    background-repeat: no-repeat;
    background-size: auto 55%;
	display: inline-block;
}	
.tabButton .subkebutuhan amp-img{width: 80px;}
.tabContent .capronego, .tabContent .capro{background:#fff;}
.tabContent .spartan amp-img{width:40px;height:auto;}
amp-selector [option][selected] .subkebutuhan{background:rgba(8, 61, 119, 0.49);}
amp-selector [option][selected] .subkebutuhan h5{color: #fff;font-weight: bold;}
.tabContent {display: none;width: 100%;padding-top: 50px;order: 1; }
.pekat .tabContent {padding-top: 5px;}
.tabButton[selected]+.tabContent {display: block;}
amp-selector {padding: 0;margin: 0;}
figure{margin: 0}
fieldset{border:none;padding:0;margin: 0}
*{box-sizing: border-box}
button{background: none; border: none}
a{text-decoration: none}
:focus{outline: 0;}
ul{padding-left: 20px}

		html{font-size: 62.5%; box-sizing: border-box;}
		body{font-size: 1.3rem; line-height: 1.8; -webkit-font-smoothing: antialiased; color: #3e3e3e;}
		.font-1, html{font-family: Ubuntu; font-weight: 300}
		.font-2{font-family: Ubuntu;}
		.minus-margin-top-bottom-15{margin-top: -15px; margin-bottom: -15px}
		[class*="col-"].margin-bottom-0{margin-bottom: 0}
		.margin-top-80{margin-top: 80px}
		.margin-top-50{margin-top: 50px}
		.margin-top-minus-30{margin-top: -30px}
		.space{height: 10px;}
		.space-2{height: 20px;}
		.space-3{height: 30px;}
		.divider{margin: 13px 0;}
		.divider-30{margin: 30px 0;}
		.divider.colored{height: 1px; background: rgba(0,0,0,.12)}
		.divider-30.colored{height: 1px; background: rgba(0,0,0,.12)}
		.width-100{width: 100%}
		.width-90{width: 90%}
		.width-80{width: 80%}
		.width-70{width: 70%}
		.pull-left{float: left}
		.pull-right{float: right}
		.d-block{display: block}
		.d-inline-block{display: inline-block}
		.d-inline{display: inline}
		.clear-both{clear:both}
		.clearfix:after,
		.clearfix:before {display: table;content: "";line-height: 0} .clearfix:after {clear: both}
		h2{margin-bottom: 7.5px}
		p{margin: 7.5px 0 0;}
		small{font-size: 1rem; line-height: 1}
		strong,b{font-weight: 700}
		h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{ color: #083d77;font-weight: bold;font-family: Ubuntu;}
		.thin{font-weight: 300}
		.thicc{font-weight: 700}
		h1{font-size: 16px}
		h2{font-size: 16px;border-bottom: 2px solid #083d77;}
		h3{font-size: 1.7rem}
		h4{font-size: 1.4rem}
		h5{font-size: 1.2rem}
		h6{font-size: 1rem}
		.h1{font-size: 2.7rem}
		.h2{font-size: 2.1rem}
		.h3{font-size: 1.7rem}
		.h4{font-size: 1.4rem}
		.h5{font-size: 1.2rem}
		.h6{font-size: 1rem}
		[dir="rtl"] .pull-left{float: right}
		[dir="rtl"] .pull-right{float: left}
		body {text-align: left}
		body[dir="rtl"] {text-align: right}
		h2:only-child{margin: 0}
		header{
			min-height: 51px;
			padding: 0 5px;
			background: #083d77;
			width: 100%;
			position: fixed;
			display: block;
			z-index: 100;
		}

		header .fa{
			color: #FFF;
			opacity: .87;
			font-size: 17px;
			line-height: 52px;
			height: 51px;
			padding: 0 15px;
			margin: 0;
		}

		header a:last-child{
			position: relative;
		}

		header a:last-child span{
			position: absolute;
			top: 11px;
			right: 17px;
			font-size: 12px;
			color: #FFF;
			font-weight: 400;
		}

		.toast {
			display: block;
			position: relative;
			height: 51px;
			padding-left: 15px;
			padding-right: 15px;
			width: 49px;
		}

		.toast:after,
		.toast:before,
		.toast span {
			position: absolute;
			display: block;
			width: 19px;
			height: 3px;
			border-radius: 2px;
			background-color: #FFF;
			-webkit-transform: translate3d(0,0,0) rotate(0deg);
			transform: translate3d(0,0,0) rotate(0deg);
		}

		.toast:after,
		.toast:before {
			content: '';
			width: 16px;
			left: 15px;
			-webkit-transition: all ease-in .4s;
			transition: all ease-in .4s;
		}

		.toast span {
			opacity: 1;
			top: 24px;
			-webkit-transition: all ease-in-out .4s;
			transition: all ease-in-out .4s;
		}

		.toast:before {
			top: 17px;
		}

		.toast:after {
			top: 31px;
		}


		/**---------------------
		  *
		  * Sidebar Styles
		  *
		  *---------------------**/
		#mainSideBar{
			min-width: 300px;
			padding-bottom: 30px;
			background: #fff;
			color: #000;
		}

		#mainSideBar amp-img{width:100%;height:24%;margin: auto 5px;}
		#mainSideBar > div:not(.divider){
			padding: 17px 20px;
		}

		#mainSideBar figure{
			width: 300px;
			max-width: 100%;
			padding: 20px;
			position: relative;
		}

		#mainSideBar button{
			position: absolute;
			right: 20px;
			top: 20px;
		}


		#mainSideBar h3,
		#mainSideBar h5{
			margin: 0;
			line-height: 1.5;
		}

		#menu{margin-top: 15px}
		#menu div{padding: 0}

		#menu h6,
		#menu a{
			color: inherit;
			font-size: 1.3rem;
			font-weight: 300;
			padding:0;
			border: none;
			font-family: Ubuntu;
			font-weight: 300;
			background: #fff;color: #000;
		}

		#menu a,
		#menu span{
			padding: 14px 20px 14px 53px;
			display: block;
			color: inherit;
			position: relative;

			-webkit-transition: all ease-in-out .2s;
			transition: all ease-in-out .2s;
		}

		#menu section[expanded] > h6 span{
			background-color: rgba(0,0,0,.06);
			color: #083d77;
		}

		#menu h6 span:after{
			position: absolute;
			right: 20px;
			top: 0;
			font-family: 'FontAwesome';
			font-size: 12px;
			line-height: 47px;
			content: '\f0dd';
		}

		#menu i,
		#mainSideBar li i{
			font-size: 1.7rem;
			position: absolute;
			left: 20px;
		}

		/**---------------------
		  *
		  * Shopping Line Icons
		  *
		  *---------------------**/
		@font-face{font-family:shopping;src:url(<?php echo $c_cdn;?>/new/css/assets/fonts/shopping.eot);src:url(<?php echo $c_cdn;?>/new/css/assets/fonts/shoppingd41d.eot?#iefix) format("embedded-opentype"),url(<?php echo $c_cdn;?>/new/css/assets/fonts/shopping.woff) format("woff"),url(<?php echo $c_cdn;?>/new/css/assets/fonts/shopping.ttf) format("truetype"),url(<?php echo $c_cdn;?>/new/css/assets/fonts/shopping.svg#shopping) format("svg");font-weight:400;font-style:normal}@media screen and (-webkit-min-device-pixel-ratio:0){@font-face{font-family:shopping;src:url(<?php echo $c_cdn;?>/new/css/assets/fonts/shopping.svg#shopping) format("svg")}}[class*=" shopping-"]:before,[class^=shopping-]:before{font-family:shopping;font-size:inherit;font-style:normal}.shopping-alcohol-bottle:before{content:"\f100"}.shopping-ascending-line-chart:before{content:"\f101"}.shopping-atm-machine:before{content:"\f102"}.shopping-bag-for-woman:before{content:"\f103"}.shopping-baseball-cap:before{content:"\f104"}.shopping-big-barcode:before{content:"\f105"}.shopping-big-cargo-truck:before{content:"\f106"}.shopping-big-diamond:before{content:"\f107"}.shopping-big-diamond-1:before{content:"\f108"}.shopping-big-gift-box:before{content:"\f109"}.shopping-big-glasses:before{content:"\f10a"}.shopping-big-license:before{content:"\f10b"}.shopping-big-paper-bag:before{content:"\f10c"}.shopping-big-piggy-bank:before{content:"\f10d"}.shopping-big-search-len:before{content:"\f10e"}.shopping-big-shopping-trolley:before{content:"\f10f"}.shopping-big-television-with-two-big-speakers:before{content:"\f110"}.shopping-big-wall-clock:before{content:"\f111"}.shopping-blank-t-shirt:before{content:"\f112"}.shopping-bra:before{content:"\f113"}.shopping-calculator-symbols:before{content:"\f114"}.shopping-car-facin-left:before{content:"\f115"}.shopping-cash-bill:before{content:"\f116"}.shopping-cash-machine:before{content:"\f117"}.shopping-cash-machine-open:before{content:"\f118"}.shopping-check-machine:before{content:"\f119"}.shopping-checklist-and-pencil:before{content:"\f11a"}.shopping-cloakroom:before{content:"\f11b"}.shopping-closed-package:before{content:"\f11c"}.shopping-consultation:before{content:"\f11d"}.shopping-credential:before{content:"\f11e"}.shopping-cut-credit-card:before{content:"\f11f"}.shopping-delivery-trollery:before{content:"\f120"}.shopping-delivery-truck-facing-right:before{content:"\f121"}.shopping-disco-light:before{content:"\f122"}.shopping-discount-badge:before{content:"\f123"}.shopping-dollar-bag:before{content:"\f124"}.shopping-dollar-bill-from-automated-teller-machine:before{content:"\f125"}.shopping-electric-scalator:before{content:"\f126"}.shopping-fork-plate-and-knife:before{content:"\f127"}.shopping-gold-stack:before{content:"\f128"}.shopping-hambuger-with-soda:before{content:"\f129"}.shopping-hanger-with-towel:before{content:"\f12a"}.shopping-heart-with-line:before{content:"\f12b"}.shopping-high-hills-shoe:before{content:"\f12c"}.shopping-horn-with-handle:before{content:"\f12d"}.shopping-inclined-comb:before{content:"\f12e"}.shopping-inclined-open-umbrella:before{content:"\f12f"}.shopping-ladies-purse:before{content:"\f130"}.shopping-lipstick-with-cover:before{content:"\f131"}.shopping-long-dress:before{content:"\f132"}.shopping-long-pants:before{content:"\f133"}.shopping-manager-profile:before{content:"\f134"}.shopping-mannequin-with-necklace:before{content:"\f135"}.shopping-map-with-placeholder-on-top:before{content:"\f136"}.shopping-market-shop:before{content:"\f137"}.shopping-megaphone-facing-right:before{content:"\f138"}.shopping-men-shorts:before{content:"\f139"}.shopping-necklace:before{content:"\f13a"}.shopping-one-shoe:before{content:"\f13b"}.shopping-open-box:before{content:"\f13c"}.shopping-open-sign:before{content:"\f13d"}.shopping-parking-sign:before{content:"\f13e"}.shopping-perfume-bottle-with-cover:before{content:"\f13f"}.shopping-phone-ringing:before{content:"\f140"}.shopping-purse-with-bills:before{content:"\f141"}.shopping-purse-with-bills-1:before{content:"\f142"}.shopping-recepcionist:before{content:"\f143"}.shopping-recorder-machine:before{content:"\f144"}.shopping-road-banner:before{content:"\f145"}.shopping-round-bag:before{content:"\f146"}.shopping-round-bracelet:before{content:"\f147"}.shopping-sale-label:before{content:"\f148"}.shopping-security-cam:before{content:"\f149"}.shopping-shirt-and-tie:before{content:"\f14a"}.shopping-shopping-on-computer:before{content:"\f14b"}.shopping-shopping-on-smarphone:before{content:"\f14c"}.shopping-shopping-on-tablet:before{content:"\f14d"}.shopping-shopping-paper-bag:before{content:"\f14e"}.shopping-shopping-trolley-full:before{content:"\f14f"}.shopping-short-bag:before{content:"\f150"}.shopping-short-skirt:before{content:"\f151"}.shopping-sign-check:before{content:"\f152"}.shopping-small-sofa:before{content:"\f153"}.shopping-store-purchase:before{content:"\f154"}.shopping-supermarket-basket:before{content:"\f155"}.shopping-three-alcoholic-bottles:before{content:"\f156"}.shopping-three-coins:before{content:"\f157"}.shopping-three-ties:before{content:"\f158"}.shopping-two-boots:before{content:"\f159"}.shopping-two-credit-cards:before{content:"\f15a"}.shopping-two-earrings:before{content:"\f15b"}.shopping-two-hangers:before{content:"\f15c"}.shopping-two-rings:before{content:"\f15d"}.shopping-two-socks:before{content:"\f15e"}.shopping-wc-sign:before{content:"\f15f"}.shopping-wide-calculator:before{content:"\f160"}.shopping-women-hat:before{content:"\f161"}.shopping-women-shirt-with-sun:before{content:"\f162"}.shopping-women-swimsuit:before{content:"\f163"}
		/**---------------------
		  *
		  * Grid
		  *
		  *---------------------**/
		[class*="col-"]{margin-bottom: 10px;}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.row:after,.row:before{display:table;content:" "}.row:after{clear:both}.container-full,.container-full [class*="col-"]{padding-left: 0; padding-right: 0;}.container-full .row{margin-left:0; margin-right:0;}.no-gap [class*="col-"]{padding-right: 0;padding-left: 0;margin-bottom: 0;}.no-gap.row{margin-right: 0; margin-left: 0;}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}}

		.pt25{padding-top:38px;}


        /**---------------------
		  *
		  * Comment Items
		  *
		  *---------------------**/
		.button-row .button{
			float: left;
		}

		.button{
			overflow: hidden;

			font-family: Ubuntu;
			background-color: #083d77;
			color: #FFF;

			margin: 10px;
			padding: 10px 20px;

			cursor: pointer;
			user-select: none;
			transition: all 60ms ease-in-out;
			text-align: center;
			white-space: nowrap;
			text-decoration: none;
			text-transform: capitalize;

			border: 0 none;
			border-radius: 0;

			font-size: 1.3rem;
			font-weight: 500;
			line-height: 1.3;

			-webkit-appearance: none;
			-moz-appearance:    none;
			appearance:         none;
		}

		.button-bordered{
			background-color: transparent;
			border: 2px solid #083d77;
			color: #1a1a1a;
		}
		.button-full{width:100%; margin-left: 0; margin-right: 0; display: block}
		.full {width:100%;}
		.button.primary-bg{background-color: #083d77}
		.button.secondary-bg{background-color: #e7a900}
		.button.light-bg{background-color: #fff;}
		.button.dark-bg{background-color: #333030;}
		.button.flower-bg{background-color: #353866;display: inline-flex;line-height: 2.8;padding: 0 20px;}
		.button.grey-bg{background-color: #c4c4c4;}

		.button.margin-left-0{margin-left:0}

		.button-large{
			padding: 10px 20px;
			font-size: 1.7rem;
		}

		.button-small{
			padding: 7px 13px;
			font-size: 1.1rem;
		}

		.button .icon-at-right{
			margin-left: 10px;
			font-size: 1.4rem;
		}

		.clean-btn{
			padding: 0;
		}
.putih{background:#fff;padding: 10px;}
.accordion section[expanded] > .accordion-title:after {content: '\f106';}
.accordion section > .accordion-title:after {
    content: '\f107';
    position: absolute;
    right: 15px;
    top: 50%;
    margin-top: -9px;
    display: block;
    font-family: FontAwesome;
    line-height: 1;
    font-size: 1.9rem;
}
.pt20{padding-top:10px;}
.pt51 {padding-top: 95px;}
.p20{width: 95%; margin: auto;}
.chat, .chat2 {
	width: 90%;
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.12);
    border-radius: 5px;
    padding: 5px 5%;
    margin: 5px 8px;
    display: flex;
    position: relative;
    line-height: 2.3;
    background: linear-gradient(268deg,#083d77 -19%,#4a85c2 100%);
}
.chat2 {display: block;}
.middle{width: 90%;margin: auto;display: block;}

amp-lightbox#dllth {overflow:scroll;}
#masterBottomLink {color: #1d3bef;padding: 5px 15px;font-size: .9em;}
#masterBottomLink a {color: #1d3bef;text-decoration: none;}
#masterPhone, #master_bbm  {font-size: 1.5em;font-weight: bold;margin: 10px 0;cursor: pointer;font-family: Helvetica,ubuntu;}
#masterPhone a {color: #3a3a3a;text-decoration: none;}
#masterPhoneIcon {background-image: url(<?php echo $c_cdn_img;?>/mobile/mobile240/master-phone-iconb275.png);}
#master_bbm {font-size: 12px;}
.txtNotLink {text-decoration: none;color: #3a3a3a;}
#masterPhoneIcon {height: 1em;width: 22px;display: inline-block;-moz-background-size: 100% auto;-webkit-background-size: 100% auto;-o-background-size: 100% auto;background-size: 100% auto;background-repeat: no-repeat;background-position: center center;vertical-align: middle;}
.mt40{margin-top:20px;}
		.social-ball{
			font-size: 1.6rem;
			display: inline-block;
			text-align: center;
			line-height: 30px;
			height: 30px;
			width: 30px;
			border-radius: 50%;
			color: #FFF;
			margin-right: 5px;
		}
		.social-ball.fa-facebook{background-color: #4867AA}
		.social-ball.fa-google-plus{background-color: #dc4e41;}
		.social-ball.fa-telegram{background-color: #179cde;}
		.social-ball.fa-whatsapp{background-color: #189d0e;}
		.social-ball.fa-youtube{background-color: #c90d0e;}
		.social-ball.fa-twitter{background-color: #00ACED}
		.social-ball.fa-linkedin{background-color: #0177B5}
		.social-ball.fa-behance{background-color: #010103}
		.social-ball.fa-dribbble{background-color: #E04C86}
.centerAligned {text-align: center;}

        /**---------------------
          *
          * Blog Carousel
          *
          *---------------------**/
		.blog-carousel-item amp-img{
			display: block;
		}

		.blog-carousel-item{
			position: relative;
			margin: 3px;
			border-radius: 3px;
			overflow: hidden;
			box-shadow: 0 0 3px 0 rgba(0,0,0,.40);
		}

		.blog-carousel-item-caption{
			position: absolute;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: #FFF;
			padding: 10px 5px;
			line-height: 1;
		}

		.blog-carousel-item-caption h5{
			text-overflow: ellipsis;
			overflow: hidden;
			white-space: nowrap;
			width: 100%;
			line-height: 1.3;
			font-size: 1.2rem;
		}
		.rating.active, .rating:not(.text-muted) {
			color: #fdb913;
		}
		.rating {
			line-height: 1;
			font-size: 11px;
			margin-right: 2px;
			color: #b6b6b6;
		}
.capro2{height:100px;width: 120px;}
.capro24{width: 80%;}
.capro23{height:189px;width: 95%;}
.capro3{background: #f71f44;width: 40%;}
.apakahusaha {box-sizing:border-box;display:flex;flex-wrap:nowrap;flex:0 0 auto;justify-content:space-between;align-content:space-between;align-items:stretch;flex-direction:row;margin-top:8px;}
.subkebutuhan{
	padding-bottom:10px;
    background: #fff;
    margin-left: 10px;
    margin-right: 10px;
	border-radius:5px;
	width:93%;
	box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.12);
}
.subkebutuhan h5{text-align:center;margin: 5px auto 0;color: #30475A;    margin-bottom: 10px;}
.subkebutuhan .tombol {
    border-radius: 2px;
    background-color:#083d77;
    font-size: 13px;
    text-align: center;
    padding: 8px;
    width: 100%;
    bottom: 20px;
    font-weight: bold;
    color: #fff;
    display: block;
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.12);
    margin-top: 3px;
}
.subkebutuhan .wa {background-color: #1f9e05;font-size: .8em;	}
.capro2 amp-img, .capronego amp-img, .capro amp-img{width: 100%;height: auto;margin:auto;}
.capro23 amp-img{width: 100%;height: auto;margin:auto;}
.zoom amp-img{zoom: 0.8;margin: 10% auto;}
.hala .halb amp-selector [option]{position:absolute;}
.tvlayer{height: 190px;}
.tvlayer amp-img{width: 100%;height: 200px;margin-top: -25px;background: #000;}
.capro2 h5, .capro23 h5,.capronego h5, .capro h5 {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
	font-size: 12px;
    line-height: 1.25em;
    height: 20px;
	color: #fff;
	padding: 0 10px;
}
.capro h5, .capronego h5, .infopro small {color: #083d77;}
.infopro2, .infopro {
    position: absolute;
    background-color: #083d77;
    padding: 5px;
    line-height: 1;
    text-align: center;
    width: 100%;
    color: #fff;
    font-weight: bold;
}
.more-info__link {
    position: relative;
    display: block;
    margin: 0;
    padding: 13px 10px;
    border-bottom: 1px solid #e0e0e0;
    color: #000000;
    color: rgba(0, 0, 0, .7);
    font-weight: normal;
    font-size: 12px;
}
.u-list-reset {list-style:none;padding:0;margin: 0;}
.u-list-reset .inext{position: absolute;top: 15px;right: 9px;width: 15px;height: 20px;background: url(<?php echo $c_cdn;?>/new/images/amp/next.png) no-repeat transparent;background-size: 7px;opacity: 0.7;}
.bulletpoint{color:#355482;background:#fff;background: #ededed;border-top: 1px solid;}
.bulletpoint h5{color:#f8011e;font-size: 12px;line-height: 1em;height: 18px;}
.spartan{line-height: 1.2;}
.spartan h4{font-size:12px; font-weight:bold;margin:3px 0;}
.spartan p{font-size:1em;margin:0;}
.spartanbtn a {width: 100%;font-size: 10px;border-radius: 100px;}
.col-xs-1.spartan{width: 16.66666667%;margin: 10px 0 ;}
.col-xs-6.spartan{margin:10px 0;width: 50%;}
.col-xs-2.spartan{width: 28.33333333%;margin: 10px 0;}
.capronego{width:45%; height:288px;}
.capronego34{width:46%; height:308px;}
.plkpn{height:190px;}
.plkpn amp-img{height: 99px;zoom: 0.8;margin-top: 10px;}
.capro{width:45%; height:228px;}
.capronego h5, .capro h5 {height: 20px;}
.infopro {background-color: #FFF;}
.pricepro{height: 35px;text-align: center;}
.productLineThrough {text-decoration: line-through;height: 1.5em;color: #9b9b9b;font-size: .9em;display: block;}
.fotoslide {width: 100%;height: 100%;margin: auto;}
.divDetailProductItemPrice {
    color: #000;
    display: block;
    font-weight: bold;
    font-size: 1em;
    padding: 10px 20px 0;
}
.footer-shortcut--container {
    width: 100%;
    height: 55px;
    position: fixed;
    z-index: 1;
    bottom: 0;
    background-color: #fafafa;
    -webkit-box-shadow: inset 0 0.5px 0 0 #e0e0e0;
    box-shadow: inset 0 0.5px 0 0 #e0e0e0;
}
.footer-shortcut--container .icon-content {
    padding: 5px;
    width: 20%;
    height: 49px;
    float: left;
    text-align: center;
    cursor: pointer;
	z-index: 100;
}
.footer-shortcut--container .icon-content .icon-content--img {height: 45px;position: relative;}
.footer-shortcut--container .icon-content img {height: 25px;}
.footer-shortcut--container .icon-content .icon-content--img p {
    font-size: 10px;
    text-align: center;
    color: rgba(0,0,0,.54);
    margin: 0;
}
.feed__container img {
    height: auto;
    vertical-align: middle;
    border: 0;
    max-width: 100%;
    -ms-interpolation-mode: bicubic;
}
.sbawah .Mesin_Fotocopy_Paling_LARIS {margin-left: 20px;display:inline;}
.inline .Mesin_Fotocopy_Paling_LARIS {display:inline;}
.Mesin_Fotocopy_Paling_LARIS {font-weight: 700;font-size: 14px;color: #083d77;padding-top: 5px;padding-bottom: 0px;}
.pekat2 {background-color: #eee;width: 100%;z-index: auto;border-bottom: 1px solid #ccc;border-top: 1px solid #ccc;}
.pekat2 .Mesin_Fotocopy_Paling_LARIS {
	font-weight: 700;
    font-size: 14px;
    color: #083d77;
    padding-top: 5px;
    margin: 0 0 0 30px;
    text-align: right;
    padding-right: 10px;
    padding-bottom: 0px;
    border-bottom: 2px solid #083d77;
}
#masterBackToTopIcon {
    height: 40px;
    width: 40px;
    margin-top: 5px;
    margin-bottom: 18px;
    background-image: url(<?php echo $c_cdn_img;?>/mobile/mobile/master-back-to-top9924.png);
    background-position: center center;
    background-repeat: no-repeat;
}
#masterBackToTop {
    font-size: .8em;
    cursor: pointer;
    position: fixed;
    bottom: 45px;
    right: 15px;
    z-index: 101;
}
.back-in-modal, .close-modal {
    font-weight: 700;
    color: #7F7F7F;
    z-index: 1;
}
.brush {position: relative;z-index: 0;}
.brush:before {
    content: "";
    position: absolute;
    background-image: url(<?php echo $c_cdn;?>/new/images/crossed.png);
    background-size: 100% 100%;
    bottom: -5px;
    top: -5px;
    left: -5px;
    right: -10px;
    z-index: -1;
}
header.accordion-title.h4 {
    background: #fff;
    border: none;
    padding: 10px;
    color: #083d77;
	z-index: 2;
}
.social .borderbulat{width: 31px;height: 31px;display:inline-block;margin:.3em;}
.pageHeader {background-color: #eee;padding: 12px 20px;}
.pekat{background-color: #ededed;position: relative;width: 100%;padding:10px;z-index: auto;	}
.pointkeunggulan {margin: 0px;font-size: 13px;color: rgb(75, 75, 75);line-height: 20px; font-weight:600;}
.alamat{font-size: .8em;}
.light-color i{margin-right:20px;}
.mt30 .button{border-radius: 5px;font-weight: 400;margin: 0;    margin-left: 3px;display: inline;}
.pagination {text-align: center;margin-top:10px;}
.pagination a {display: inline-block;margin: 0;border-radius: 50%;color: #212121;min-width: 30px;min-height: 30px;line-height: 30px;}
.pagination a.active {color: #FFF;background-color: #f82e56}
.box-point{border-bottom: 1px solid #eee;box-sizing: border-box; display: flex; flex-flow: column nowrap; flex: 0 0 auto; place-content: center; align-items: stretch; width: 70%;}
.subkebutuhan amp-img{margin: auto;}
		/**---------------------
		  *
		  * AMP Lightbox
		  *
		  *---------------------**/
		amp-lightbox{background-color: rgba(0,0,0,.87)}
		amp-lightbox.light{background-color: rgba(255,255,255,.87)}

		amp-lightbox > .lightbox{
			position: absolute;
			bottom: 0;
			top: 0;
			right: 0;
			left: 0;
		}

		amp-lightbox .middle{
			width: 80%;
			position: absolute;
			top: 50%;
			left: 50%;
			margin-top: 10px;
			-webkit-transform: translate(-50%, -50%);
			-moz-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			-o-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}

		amp-lightbox .message{
			text-align: center;
		}

		amp-lightbox h1,
		amp-lightbox small{
			color: #FFF
		}

		amp-lightbox.light h1,
		amp-lightbox.light small{
			color: #212121
		}

		amp-lightbox small{
			font-size: 1.2rem;
		}

        /**---------------------
          *
          * Table Responsive
          *
          *---------------------**/
		table {
			border-spacing: 0;
			border-collapse: collapse;
			width: 100%;
			max-width: 100%;
			margin-bottom: 1rem;
			background-color: transparent;
			white-space: normal;
			color: #000;
			font-weight: bold;	
			text-align : left;
		}

		td, th { padding: 0; }

		th{ text-align: left; }

		table td,
		table th {
			padding: .75rem;
			line-height: 1.5;
			vertical-align: top;
			border-top: 1px solid #eceeef;
		}

		table thead th {
			vertical-align: bottom;
			border-bottom: 2px solid #eceeef;
		}

		.table-inverse {
			color: #eceeef;
			background-color: #373a3c;
		}

		.table-inverse td,
		.table-inverse th,
		.table-inverse thead th {
			border-right: #55595c;
		}

		.table-inverse td,
		.table-inverse th,
		.table-inverse thead th {
			border-color: #55595c;
		}

		.thead-inverse th {
			color: #fff;
			background-color: #373a3c;
		}

		.thead-default th {
			color: #55595c;
			background-color: #eceeef;
		}

		.table-responsive {
			display: block;
			width: 100%;
			min-height: .01%;
			overflow-x: auto;
		}

		.table-striped tbody tr:nth-of-type(odd) {
			background-color: #f9f9f9;
		}

		.table-bordered td, .table-bordered th {
			border: 1px solid #eceeef;
		}

		.table-hover tbody tr:hover {
			background-color: #f5f5f5;
		}

		.table-active, .table-active>td, .table-active>th {
			background-color: #f5f5f5;
		}

		.table-success, .table-success>td, .table-success>th {
			background-color: #dff0d8;
		}

		.table-info, .table-info>td, .table-info>th {
			background-color: #d9edf7;
		}

		.table-warning, .table-warning>td, .table-warning>th {
			background-color: #fcf8e3;
		}

		.table-danger, .table-danger>td, .table-danger>th {
			background-color: #f2dede;
		}		

.bottom-grid.active {background-color: #083d77;font-size: 25px;}
.bottom-grid.active	a{color:#fff;}
.relative {position: relative;}
.bottom-grid {width: 25%;display: table-cell;font-size: 25px;color:#083d77;}
 /* define some contants */
    .collapsible-captions {
      --caption-height: 32px;
      --image-height: 300px;
      --caption-padding: 1rem;
      --button-size: 28px;
      --caption-color: #f5f5f5;
      --caption-bg-color: #ededed;
      background: var(--caption-bg-color);
    }
    .collapsible-captions * {
      /* disable chrome touch highlight */
      -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
      box-sizing: border-box;
    }
    /* see https://ampbyexample.com/advanced/how_to_support_images_with_unknown_dimensions/ */
    .collapsible-captions .fixed-height-container {
      position: relative;
      width: 100%;
      height: var(--image-height);
    }
    .collapsible-captions amp-img img {
      object-fit: contain;
    }
    .collapsible-captions figure {
      margin: 0;
      padding: 0;
    }
    /* single line caption */
    .collapsible-captions figcaption {
      position: absolute;
      bottom: 0;
      margin: 0;
      width: 100%;
      /* inital height is one line */
      max-height: var(--caption-height);
      line-height: var(--caption-height);
      padding: 0 var(--button-size);
      /* cut text after first line and show an ellipsis */
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      /* animate expansion */
      transition: max-height 200ms cubic-bezier(0.4, 0, 0.2, 1);
      /* overlay the carousel icons */
      z-index: 1;
      /* some styling */
    color: var(--caption-color);
    background: #083d77;   
    }
    /* expanded caption */
    .collapsible-captions figcaption.expanded {
      /* add padding and show all of the text */
      padding: var(--button-size);
      line-height: inherit;
      white-space: normal;
      text-overflow: auto;
      max-height: calc(var(--caption-height) + var(--image-height));
      /* show scrollbar in case caption is larger than image */
      overflow: auto;
    }
    /* don't show focus highlights in chrome */
    .collapsible-captions figcaption:focus {
      outline: none;
      border: none;
    }
    /* the expand/collapse icon */
    .collapsible-captions figcaption span {
      display: block;
      position: absolute;
      top: calc((var(--caption-height) - var(--button-size)) / 2);
      right: 2px;
      width: var(--button-size);
      height: var(--button-size);
      line-height: var(--button-size);
      text-align: center;
      font-size: 12px;
      color: inherit;
      cursor: pointer; 
    }


.mobile-header-block__search input {
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    background: #f8f8f8;
    border: 1px solid #ddd;
    width: 100%;
    padding: 10px 5px;		
}
.mobile-header-block__search {
    position: absolute;
    display: block;
    width: 100%;
    padding: 10px 5px;
    top: 51px;
    z-index: 100;
    background: #083d77;
	
}
.mobile-header-block--fixed .mobile-header-block__search .search {
    right: 5px;
    top: .75em;
    font-size: 1.3em;
}
.mobile-header-block__search .search  {
    color: #999;
    position: absolute;
    right: 20px;
    top: .9em;
    font-size: 1.5em;
}
.cart-quantity {
    margin-left: 0;
    padding: 0;
    width: 17px;
    height: 17px;
    line-height: 17px;
    text-align: center;
    display: inline-block;
    background-color: #f8011e;
    border-radius: 100%;
}
.pricepro .recommendedItemDiscountPercentage{color: #083d77;}
.hala .capro,.hala .capro2{background:#fff;}
header .cart i{padding: 0 33px;}
.halb amp-selector [option][selected]{color:#fff;outline: none;background: #f8011e;border-bottom: 2px solid #f8011e;}
.halb amp-selector [option] {cursor: pointer;border-bottom: 2px solid #ccc;
    position: fixed;
    margin-left: 0;
    width: 33%;
    float: left;
	color:#fff;
	padding: 10px;
    background: #083d77;
	border-bottom: 2px solid #f8011e;
	}
.halb amp-selector [option]:nth-child(1){margin-left: 0%;width: 34%;}	
.halb amp-selector [option]:nth-child(3){margin-left: 33%;}
.halb amp-selector [option]:nth-child(5){margin-left: 66%;width: 34%;}
.halb i{font-size: 16px;display: block;padding-top:10px;}
.rating i{display:inline-flex;padding:0;}
.halb .tabButton{font-weight:500;}
		.social-share-container{height: 30px;}

		.socials-share-title{
			line-height: 30px;
			display: inline-block;
			vertical-align: top;
			margin-right: 10px;
		}

        /**---------------------
		  *
		  * Accordion
		  *
		  *---------------------**/
		.accordion section{
			margin-bottom: 4px;
		}

		.accordion section > .accordion-title{
			padding: 10px 15px 10px 15px;
			background-color: rgba(255,255,255,.02);
            border-bottom-color: rgba(0,0,0,.06);
			z-index: 30;
		}

		.accordion section > .accordion-title:after{
			content: '\f107';
			position: absolute;
			right: 15px;
			top: 50%;
			margin-top: -9px;
			display: block;
			font-family: FontAwesome;
			line-height: 1;
			font-size: 1.9rem;
		}

		.accordion section[expanded] > .accordion-title:after{
			content: '\f106';
		}

		.accordion section > div{
			padding: 10px 15px;
		}

		.accordion section > div.padding-left-0{
			padding-left: 0;
		}

		.accordion section > div.padding-right-0{
			padding-right: 0;
		}
		.text-center{text-align: center}
		.text-right{text-align: right}
		.margin-0{margin: 0}
		.margin-top-0{margin-top: 0}
		.margin-bottom-0{margin-bottom: 0}
		.margin-left-0{margin-left: 0}
		.margin-right-0{margin-right: 0}
		.padding-left-0{padding-left: 0}
		.padding-right-0{padding-right: 0}
        .options > div:first-child span{color: rgba(0,0,0,.54);}
        .options select{margin-left: 7px;}
        .remove-from-cart{
            position: absolute;
            right: 10px;
            top: 0;
            font-size: 1.7rem;
            line-height: 1;
            color: rgba(0,0,0,.54);
        }
        .info-icon{font-size: 2.3rem;opacity: .34;}
.title-popup {
    display: block;
    font-size: 18px;
    text-transform: capitalize;
    border-bottom: 1px solid #282828;
    padding-bottom: 5px;
    color: #282828;
    margin: 0 20px 15px 15px;
}
.close-modal {top: 5px;position: absolute;right: 0;margin: 10px 20px;}
		a,
		.primary-color{color: #083d77}
		.secondary-color{color: #e7a900}
		.light-color{color: #FFF}
		.light-color-2{color: rgba(255,255,255,.54)}
		.dark-color{color: #333030;}


		.primary-bg{background: #083d77}
		.secondary-bg{background: #e7a900}
		.light-bg{background: #fff;}
		.dark-bg{background: #333030;}
		.paddingTop5 {padding-top: 5px;}
		.circle{border-radius: 50%}	
#productDetailBuyContainer {
    box-shadow: 0 0 15px rgba(0,0,0,.4);
    height: 48px;
    position: fixed;
    bottom: 0;
    width: 100%;
    z-index: 3;
}

#lnkCall {
    background-image: url(<?php echo $c_cdn_img;?>/mobile/mobile/detail-phone-icon2c55.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 30px 35px;
    display: inline-block;
    height: 48px;
    width: 20%;
    left: 0;
    bottom: 0;
}
.productDetailBuyButton {margin: 0;height: 48px;text-decoration: none;text-align: center;text-transform: uppercase;}
.btnBuyFixed {padding: 14px 0 ;position: fixed;bottom: 0;display: inline-block;width: 60% ;}
.lnkChat {
    background-image: url(<?php echo $c_cdn_img;?>/mobile/mobile/chat-with-us-icon.png);
    background-repeat: no-repeat;
    background-position: center;
    background-size: 30px 35px;
    float: right;
    height: 48px;
    width: 20%;
    right: 0;
    bottom: 0;
}
.clearfix:after, .clearfix:before, .dp__stat:after, .dp__stat:before {
    content: " ";
    display: table;
}
.ci__shipment__box input:checked+.ci__shipment__item:before, .dp__pd__empty, .dp__pd__expand, .dp__recent__title, .dp__spec__empty, .flex--center, .header__component__count, .header__component__pp, .header__phone__content, .header__phone__form, .header__phone__label, .header__step__icon, .home__deals__countdowns, .home__deals__subtitle, .home__deals__time, .nl__more, .rs__divider {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
}
.checkbox:checked+span:after, .checkbox:not(:checked)+span:after, .ci__shipment__box input:checked+.ci__shipment__item:before, .dp__video:after, .mi, .pc__categories__item:before, .select2-search--dropdown:after {
    font-style: normal;
    text-transform: none;
    letter-spacing: normal;
    word-wrap: normal;
    white-space: nowrap;
    direction: ltr;
    -webkit-font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    -moz-osx-font-smoothing: grayscale;
}
.checkbox:checked+span:after, .checkbox:not(:checked)+span:after, .ci__shipment__box input:checked+.ci__shipment__item:before, .dp__video:after, .mi, .pc__categories__item:before {
    font-family: 'Material Icons';
    font-weight: 400;
    font-size: 24px;
    display: inline-block;
    width: 1em;
    height: 1em;
    line-height: 1;
    flex-shrink: 0;
    -webkit-font-feature-settings: 'liga';
    font-feature-settings: 'liga';
}
.dp__header--right {-webkit-box-flex: 1;flex-grow: 1;} 
.dp__header__body {display: block;-webkit-box-align: start;align-items: flex-start;}
.dp__header__info {-webkit-box-flex: 1;flex-grow: 1;}
.dp__price__wrapper {background: rgba(216,216,216,.2);border-top: 1px solid #ddd;padding: 15px;}
.dp__price__col, .dp__v__option {position: relative;}
.dp__price__hot {color: #94919f;font-size: 12px;line-height: 1.2;margin-bottom: 10px;}
.dp__hot {display: inline-flex;-webkit-box-align: center;align-items: center;vertical-align: top;color: #ff5100;margin-right: 5px;}
.mi.mi-12 {font-size: 12px;}
.mi.mi-24 {font-size: 24px;}
.dp__action .wl__add .popover__trigger i {font-size: 24px;margin-right: 0;}
.dp__si__block {border-top: 1px solid #ddd;}
.dp__si__header--active>.mi {-webkit-transform: rotate(180deg);transition: .2s;transform: rotate(180deg);}
.mi.mi-18 {font-size: 18px;}
.dp__action .wl__link, .dp__price__label, .dp__title__row .link {display: none;}
.wl__link {color: #f8011e;margin-left: 5px;}
.marr--md {margin-right: 10px;}
.marr--sm {margin-right: 5px}
.dp__hot span, .dp__price__time span.underline, .dp__si__name:hover {text-decoration: underline;}
.cart__col__content, .cart__jw__amount, .cart__jw__title, .cart__title, .cart__total__content, .ci__footer__price, .ci__footer__weight, .ci__shipment__total, .cp__row--active .cp__title, .dp__hot span, .dp__name, .dp__price__disc, .dp__price__time span, .dp__shipment__save, .dp__si__desc, .dp__si__title, .dp__stat__heading, .dp__stock, .dp__v__content--qty input, .pc__categories__content>li>.pc__categories__item, .sr__gold>span:nth-child(1), .sr__header__title, .sr__title__top, .wish__make__content .link, .wish__pl__name {font-weight: 700;}
.text--default {color: #4d485f;}
.dp__price__row {margin-top: 3px;}
.dp__price--1 {text-decoration: line-through;color: #94919f;}
.dp__price__row--mid {display: block;}
.dp__price__row {margin-top: 3px;-webkit-box-align: center;align-items: center;}
.cart__number, .cf__bank__no, .cf__member__header, .cf__summary__title, .cf__top__col__subtitle, .dp__price, .dp__stat__col b, .dp__title__star span, .dp__v__content .input__group__label, .spf__rating__avg, .wish__brand__content>div, .wish__card__content section>div, .wish__header__tagline, .wish__latest__tagline, .wish__list__date, .wish__list__name, .wish__product__action, .wish__submitted__total, .wish__title {font-family: gotham,'times new roman',serif;}
.dp__price--2 {color: #f8011e;}
.dp__price--2 span {font-size: 20px;}
.dp__price__row--mid .dp__price__disc {display: inline-block;margin: 3px 0;color: #ff1e1e;line-height: 1;font-size: 11px;flex-shrink: 0;}
.dp__price__disc span {-webkit-box-align: center;display: inline-flex;align-items: center;height: 20px;background: #fff;padding: 0 10px;border: 1px solid #ff1e1e;border-radius: 2px;}
.dp__shipment__info {border-bottom: 1px solid #ddd;}
.dp__shipment__additional .dp__shipment__col:first-child {border-left: none;}
.dp__shipment__col {padding: 6px 15px;font-size: 11px;color: #94919f;}
.dp__shipment__additional {border-top: 1px solid #ddd;display: flex;}
.dp__shipment__additional .dp__shipment__col {width: 50%;}
.dp__shipment__additional .dp__shipment__col {border-left: 1px solid #ddd;}
.dp__action, .dp__price__bulk {margin-left: 0;}
.dp__action, .dp__si, .dp__v__row {padding: 0 10px;}
.dp__action {margin-top: 20px;display: flex;-webkit-box-align: center;align-items: center;}
.dp__action .button {-webkit-box-flex: 1;flex-grow: 1;}
.button__group {display: flex;align-items: center;-webkit-box-pack: center;justify-content: center;line-height: 1;}
.button__group, .tl__notice {-webkit-box-align: center;}
.dp__action .wl__add {margin: 0 15px 0 20px;}
.popover, .tooltip {position: relative;display: inline-block;}
.crumb__arrow, .faq__toggle, .popover__trigger {line-height: 0;}
.button--lg {padding: 12px 20px;font-size: 16px;}
.button--cta {
    background: #163a80;
    color: #fff;
    box-shadow: 0 5px 25px rgba(14, 15, 230, 0.3);
    border-radius: 2px;
}
.dp__action, .dp__si, .dp__v__row {padding: 0 10px;margin: 20px 0 0;width: 100%;flex-shrink: 0;}
.dp__si__wrapper {border: 1px solid #ddd;}
.dp__si__header {
    display: -webkit-box;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.dp__si__header {padding: 5px 10px;font-size: 12px;color: #94919f;}
.hidden--small, .outdated--small {display: none;}
.crumb__dropdown__header, .dp__header__additional, .dp__price__row, .dp__si__title, .dp__video, .flex--simple, .header__notif__empty, .header__profile a, .header__profile button, .header__step, .modal__wrapper, .nl__main, .paging, .paging a, .pc__filter__expander, .pc__filter__header, .pc__filter__item label, .pc__filter__remover, .pc__filter__reset, .pc__filter__row, .pc__footer .container, .pc__sort, .pl__filter .container, .sr__modal__bottom {display: flex;-webkit-box-align: center;align-items: center;}
.dp__si__top {display: flex;padding: 10px;}
.dp__si__pp .profile__picture {
    width: 60px;
    height: 60px;
    font-size: 12px;
}
.profile__picture--store {border-radius: 7%;}
.profile__picture {
    position: relative;
    border-radius: 50%;
    background: #fff;
    display: flex;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
    text-shadow: 0 5px 10px rgba(0,0,0,.2);
    box-shadow: inset 0 0 0 2px rgba(0,0,0,.1);
    transition: all .1s ease-in-out;
}
.dp__si__desc {margin-left: 10px;}
.dp__si__desc>:not(:last-child) {padding-bottom: 3px;}
.dp__si__pm {
    color: #00b5ff;
    font-size: 10px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    transition: .2s;
}
.dp__si__block {border-top: 1px solid #ddd;}
.dp__stat {padding: 10px 0;}
.dp__si__block:only-child, .dp__stat {width: 100%;}
.dp__stat__heading {margin-bottom: 10px;text-align: center;font-size: 12px;}
.dp__stat__col {width: 50%;text-align: center;}
.dp__si__doc {font-size: 13px;padding: 10px 20px;}
.dp__si__doc button {padding: 4px 0;}
.dp__stat__col span {font-size: 12px;}
.dp__stat__col, .pl__filter__check .icheck__check, .wl__amount, .wl__headline {float: left;}
.dp__stat__col b {color: #ff5100;display: block;}
.dp__stat__col b, .dp__tab {font-size: 16px;font-weight: 700;}
.text--red {color: #f8011e;}
.dp__tab__content__row {padding: 10px 25px;background: #eee;}
.dp__tab__content__label {width: 100px;display: inline-block;color: #716d7f;}
.dp__tab__content__content {font-weight: 700;color: #000;}
.dp__tab__content__col {width: 100%;}
.dp__tab__content__col {padding: 5px 0;display: inline-block;}
.product__shipping{position: absolute;right: 20px;margin-top: -90px;}
.spacer, .clearline{height: 0;}
.artikelpilihan p {background: url(<?php echo $c_cdn;?>/new/images/quotes.png) no-repeat 0 0;padding-left: 105px;}
.rate {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
	-webkit-box-align: center;
    flex-direction: column;
    padding: 10px;
}
.preview2 {height: 110px;overflow: hidden;border-bottom: 2px solid #eee;}
.rating {align-items: center;}
.rate .rating__aggregate {text-align: center;}
.rating__aggregate__score {font-size: 36px;}
.home__category__ext__title, .home__category__floor, .home__category__title, .home__deals__tagline, .rating__aggregate__score {font-family: gotham,'times new roman',serif;}
.rating__color--1 .rating__stars, .rating__color--2 .rating__stars, .rating__color--3 .rating__stars, .rating__color--4 .rating__stars, .rating__color--5 .rating__stars {color: inherit;}
.rating__stars {display: inline-flex;align-items: center;line-height: 0;font-size: 12px;margin: 3px 0;}
.rating__count {color: #4d485f;}
</style>
<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>