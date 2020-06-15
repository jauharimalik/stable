<style amp-custom="">
	hr{border: 2px solid #00205B;}
    .ampTabContainer {display: flex;flex-wrap: wrap;}
    .tabButton[selected] {outline: none;}
	amp-selector [option][selected]{outline:none;}
    .tabButton {
        list-style: none;
        flex-grow: 1;
        text-align: center;
        cursor: pointer;
    }
	
    .tabButton .subkebutuhan amp-img{width: 80px;}
	.tabContent .capronego, .tabContent .capro{background:#fff;}
	.tabContent .spartan amp-img{width:40px;height:auto;}
	amp-selector [option][selected] .subkebutuhan{background:rgba(8, 61, 119, 0.49);}
	amp-selector [option][selected] .subkebutuhan h5{color: #fff;font-weight: bold;}
    .tabContent {
        display: none;
        width: 100%;
		padding-top: 50px;
        order: 1; /* must be greater than the order of the tab buttons to flex to the next line */
    }
    .pekat .tabContent {padding-top: 5px;}
    .tabButton[selected]+.tabContent {display: block;}
    .itemCustom {
        border: 1px solid #000;
        height: 280px;
        width: 380px;
        margin: 10px;
        text-align: center;
        padding-top: 140px;
    }
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
		.padding-0{padding:0}
		.margin-top-80{margin-top: 80px}
		.margin-top-50{margin-top: 50px}
		.margin-top-minus-30{margin-top: -30px}
		.space{height: 10px;}
		.space-1{height: 1px;}
		.space-2{height: 20px;}
		.space-3{height: 30px;}
		.space-4{height: 60px;}
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
		.clearfix:before {display: table;content: "";line-height: 0} 
		.clearfix:after {clear: both}
		h2{margin-bottom: 7.5px}
		.section-title, p{margin: 7.5px 20px 0;}
		small{font-size: 1rem; line-height: 1}
		strong,b{font-weight: 700}

		h1,h2,h3,h4,h5,h6,
		.h1,.h2,.h3,.h4,.h5,.h6{
			font-weight: 400;
			color: #212121;
			font-family: Ubuntu;
		}

		.thin{font-weight: 300}
		.thicc{font-weight: 700}

		h1{font-size: 16px}
		h2{font-size: 2.1rem}
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
		code {
			padding: .2rem .4rem;
			font-size: 90%;
			color: #bd4147;
			background-color: #f7f7f9;
			border-radius: .25rem;
		}
		h2:only-child{margin: 0}
		header{
    position: fixed;
    min-height: 51px;
    padding: 0 5px;
    background: #00205B;
    width: 100%;
    top: 0;
	z-index:2;
		}
		#main{margin-top:51px;}
.kotakisi {
    padding: 10px 0;
    margin: 10px 0;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    width: 100%;
    background: #fff;
    text-align: left;
    overflow: hidden;
}		
.mobmenu ul li .gbbgs {
    width: 100%;
    height: 100%;
    object-fit: cover;
    max-width: 100%;
}
.mobmenu ul li .solay {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    background: #324e70;
    opacity: .8;
}
.mobmenu ul li .scont {position: absolute;
    bottom: 0;
    padding: 5px;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    text-align: left;
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
		#logo{
			display: block;
            line-height: 1;

			position: absolute;
			left: 50%;
			top: 50%;

			-webkit-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
		}

		#logo img{
			display: block;
		}

		/**---------------------
		  *
		  * Sidebar Styles
		  *
		  *---------------------**/
		#mainSideBar{
			min-width: 300px;
			padding-bottom: 30px;
		}

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

		#mainSideBar amp-img{
			margin-bottom: 5px;
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
			color: #FF6D15;
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

		.sample-icons [class*="shopping-"]{
			font-size: 2.7rem;
		}

		.sample-icons .class-name{
			font-size: 1.1rem;
		}

		.sample-icons .col-xs-3:nth-child(4n + 1){
			clear: left
		}

		.social-ball.fa-facebook{background-color: #4867AA}
		.social-ball.fa-twitter{background-color: #00ACED}
		.social-ball.fa-instagram{background-color: #FE1C4B}
		.social-ball.fa-google-plus{background-color: #DC4A38}
		.social-ball.fa-youtube{background-color: #CE201F}

		/**---------------------
		  *
		  * Badges
		  *
		  *---------------------**/
		.badge{
			font-weight: 400;
			font-size: 1.2rem;
			color: #FFF;
			line-height: 1.8rem;
			height: 1.8rem;
			padding: 0 5px;
			display: inline-block;
		}

		/**---------------------
		  *
		  * Background Row
		  *
		  *---------------------**/
		.background-row{
			background-image: url('https://m.plazafotocopy.com/assets/img/bg-canon-advance.jpg');
			background-size: cover;
			background-position: center center;
			padding: 60px 0;
		}

		.colored-row{
			background-color: #f4f2f3
		}

		.inside-out-long-img{
			margin-right: 25px;
		}

		.inside-out-long-img amp-img{
			margin-bottom: -90px;
            margin-top: 10px;
		}

		.background-row-content{
			background-color: rgba(255,255,255,.87);
			display: inline-block;
			outline: 1px solid rgba(255,255,255,.87);
		    outline-offset: 3px;
            padding: 25px;
		}

		.background-row-content .row-1,
		.background-row-content .row-2,
		.background-row-content .row-3{
			margin: 0;
			font-weight: 600;
            line-height: 1;
		}

		.background-row-content .row-1{
			font-size: 17px;
		}

		.background-row-content .row-2{
			font-size: 25px;
			margin: 20px 0;
		}

		.background-row-content .row-3{
			font-size: 12px;
			font-weight: 400
		}

		/**---------------------
		  *
		  * Shopping Line Icons
		  *
		  *---------------------**/
		@font-face{font-family:shopping;src:url(assets/fonts/shopping.eot);src:url(assets/fonts/shoppingd41d.eot?#iefix) format("embedded-opentype"),url(assets/fonts/SamsungSans-Medium.woff) format("woff"),url(assets/fonts/shopping.ttf) format("truetype"),url(assets/fonts/shopping.svg#shopping) format("svg");font-weight:400;font-style:normal}@media screen and (-webkit-min-device-pixel-ratio:0){@font-face{font-family:SamsungSans-Medium;src:url(assets/fonts/shopping.svg#shopping) format("svg")}}[class*=" shopping-"]:before,[class^=shopping-]:before{font-family:SamsungSans-Medium;font-size:inherit;font-style:normal}.shopping-alcohol-bottle:before{content:"\f100"}.shopping-ascending-line-chart:before{content:"\f101"}.shopping-atm-machine:before{content:"\f102"}.shopping-bag-for-woman:before{content:"\f103"}.shopping-baseball-cap:before{content:"\f104"}.shopping-big-barcode:before{content:"\f105"}.shopping-big-cargo-truck:before{content:"\f106"}.shopping-big-diamond:before{content:"\f107"}.shopping-big-diamond-1:before{content:"\f108"}.shopping-big-gift-box:before{content:"\f109"}.shopping-big-glasses:before{content:"\f10a"}.shopping-big-license:before{content:"\f10b"}.shopping-big-paper-bag:before{content:"\f10c"}.shopping-big-piggy-bank:before{content:"\f10d"}.shopping-big-search-len:before{content:"\f10e"}.shopping-big-shopping-trolley:before{content:"\f10f"}.shopping-big-television-with-two-big-speakers:before{content:"\f110"}.shopping-big-wall-clock:before{content:"\f111"}.shopping-blank-t-shirt:before{content:"\f112"}.shopping-bra:before{content:"\f113"}.shopping-calculator-symbols:before{content:"\f114"}.shopping-car-facin-left:before{content:"\f115"}.shopping-cash-bill:before{content:"\f116"}.shopping-cash-machine:before{content:"\f117"}.shopping-cash-machine-open:before{content:"\f118"}.shopping-check-machine:before{content:"\f119"}.shopping-checklist-and-pencil:before{content:"\f11a"}.shopping-cloakroom:before{content:"\f11b"}.shopping-closed-package:before{content:"\f11c"}.shopping-consultation:before{content:"\f11d"}.shopping-credential:before{content:"\f11e"}.shopping-cut-credit-card:before{content:"\f11f"}.shopping-delivery-trollery:before{content:"\f120"}.shopping-delivery-truck-facing-right:before{content:"\f121"}.shopping-disco-light:before{content:"\f122"}.shopping-discount-badge:before{content:"\f123"}.shopping-dollar-bag:before{content:"\f124"}.shopping-dollar-bill-from-automated-teller-machine:before{content:"\f125"}.shopping-electric-scalator:before{content:"\f126"}.shopping-fork-plate-and-knife:before{content:"\f127"}.shopping-gold-stack:before{content:"\f128"}.shopping-hambuger-with-soda:before{content:"\f129"}.shopping-hanger-with-towel:before{content:"\f12a"}.shopping-heart-with-line:before{content:"\f12b"}.shopping-high-hills-shoe:before{content:"\f12c"}.shopping-horn-with-handle:before{content:"\f12d"}.shopping-inclined-comb:before{content:"\f12e"}.shopping-inclined-open-umbrella:before{content:"\f12f"}.shopping-ladies-purse:before{content:"\f130"}.shopping-lipstick-with-cover:before{content:"\f131"}.shopping-long-dress:before{content:"\f132"}.shopping-long-pants:before{content:"\f133"}.shopping-manager-profile:before{content:"\f134"}.shopping-mannequin-with-necklace:before{content:"\f135"}.shopping-map-with-placeholder-on-top:before{content:"\f136"}.shopping-market-shop:before{content:"\f137"}.shopping-megaphone-facing-right:before{content:"\f138"}.shopping-men-shorts:before{content:"\f139"}.shopping-necklace:before{content:"\f13a"}.shopping-one-shoe:before{content:"\f13b"}.shopping-open-box:before{content:"\f13c"}.shopping-open-sign:before{content:"\f13d"}.shopping-parking-sign:before{content:"\f13e"}.shopping-perfume-bottle-with-cover:before{content:"\f13f"}.shopping-phone-ringing:before{content:"\f140"}.shopping-purse-with-bills:before{content:"\f141"}.shopping-purse-with-bills-1:before{content:"\f142"}.shopping-recepcionist:before{content:"\f143"}.shopping-recorder-machine:before{content:"\f144"}.shopping-road-banner:before{content:"\f145"}.shopping-round-bag:before{content:"\f146"}.shopping-round-bracelet:before{content:"\f147"}.shopping-sale-label:before{content:"\f148"}.shopping-security-cam:before{content:"\f149"}.shopping-shirt-and-tie:before{content:"\f14a"}.shopping-shopping-on-computer:before{content:"\f14b"}.shopping-shopping-on-smarphone:before{content:"\f14c"}.shopping-shopping-on-tablet:before{content:"\f14d"}.shopping-shopping-paper-bag:before{content:"\f14e"}.shopping-shopping-trolley-full:before{content:"\f14f"}.shopping-short-bag:before{content:"\f150"}.shopping-short-skirt:before{content:"\f151"}.shopping-sign-check:before{content:"\f152"}.shopping-small-sofa:before{content:"\f153"}.shopping-store-purchase:before{content:"\f154"}.shopping-supermarket-basket:before{content:"\f155"}.shopping-three-alcoholic-bottles:before{content:"\f156"}.shopping-three-coins:before{content:"\f157"}.shopping-three-ties:before{content:"\f158"}.shopping-two-boots:before{content:"\f159"}.shopping-two-credit-cards:before{content:"\f15a"}.shopping-two-earrings:before{content:"\f15b"}.shopping-two-hangers:before{content:"\f15c"}.shopping-two-rings:before{content:"\f15d"}.shopping-two-socks:before{content:"\f15e"}.shopping-wc-sign:before{content:"\f15f"}.shopping-wide-calculator:before{content:"\f160"}.shopping-women-hat:before{content:"\f161"}.shopping-women-shirt-with-sun:before{content:"\f162"}.shopping-women-swimsuit:before{content:"\f163"}

		/**---------------------
		  *
		  * Products Grid
		  *
		  *---------------------**/
		.bones-products-grid{margin: -7.5px;position: relative;}
		.bones-products-grid:after{content: '';display: table;clear: both;}
		.bones-products-grid > div{float: left;padding: 7.5px;}
		.bones-products-grid.cols-2 > div{width: 50%;}
		.bones-products-grid.cols-3 > div{width: 33.333333333333333%;}
		.bones-products-grid.cols-4 > div{width: 25%;}
		@media all and (min-width: 376px) {
			.bones-products-grid.cols-2 > div{width: 33.333333333333333%;}
			.bones-products-grid.cols-3 > div{width: 25%;}
			.bones-products-grid.cols-4 > div{width: 20%;}
		}
		@media all and (min-width: 768px) {
			.bones-products-grid.cols-2 > div{width: 25%;}
			.bones-products-grid.cols-3 > div{width: 20%;}
			.bones-products-grid.cols-4 > div{width: 16.666666666666667%;}
		}

		/**---------------------
		  *
		  * Grid
		  *
		  *---------------------**/
		[class*="col-"]{margin-bottom: 30px;}.container-mogok{background-color: #f6f6f6;padding-top:10px;padding-right:7px;padding-left:7px;margin-right:auto;margin-left:auto}.container-fluid{padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.row{margin-right:-15px;margin-left:-15px}.row:after,.row:before{display:table;content:" "}.row:after{clear:both}.container-full,.container-full [class*="col-"]{padding-left: 0; padding-right: 0;}.container-full .row{margin-left:0; margin-right:0;}.no-gap [class*="col-"]{padding-right: 0;padding-left: 0;margin-bottom: 0;}.no-gap.row{margin-right: 0; margin-left: 0;}.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-right:15px;padding-left:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}}


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

                /* /GLOBAL STYLES */

                /* INDEX PAGE STYLES */

                /**---------------------
		  *
		  * Title
		  *
		  *---------------------**/
		.bordered-title{
			border-bottom: 1px solid rgba(0,0,0,.12);
			margin: 0 -15px;
			padding: 0 15px 8px;
		}
		.border3 {border:3px solid;}
		.border-bottom{border-bottom: 2px solid #eee;}
		.border-right{border-right: 2px solid #e6e7e7;}
		.bordered-title h3,.bordered-title .h3{margin: 0;line-height: 1.4;}
		.bordered-title h5,.bordered-title .h5{opacity: .54;margin: 0;}
		.icon-info-box-2 .icon-wrap{
			width: 40px;
			height: 40px;
			border: 1px solid #00205B;
			float: left;
            margin-top: 3px;
		}
		.icon-info-box-2 i{
			font-size: 26px;
			color: #00205B;
			background-color: #fff;
			width: 40px;
			height: 40px;
			line-height: 40px;
			text-align: center;
		    display: block;
			font-weight:700px;
		    position: relative;
		    right: -3px;
		    top: -5px;
		}
		.icon-info-box-2 .contents{margin-left: 65px;}
		.icon-info-box-2 h4,
		.icon-info-box-2 h5{margin: 0;}
		.icon-info-box-2 h5{opacity: .24;}
		.bones-product-list-item,
		.bones-product-list-item .preview{position: relative;display: block;}
		.bones-product-list-item .preview amp-img{position: relative;z-index: 1;}
		.bones-product-list-item .preview .badge{position: absolute;z-index: 2;top: 5px;left: 5px}
		.bones-product-list-item .preview .badge:last-child{left: auto;right: 5px;}
		.bones-product-list-item .categories{padding: 7px 0 0;}
		.bones-product-list-item .categories a{color: rgba(41,37,42,.54);font-size: 1.1rem;font-weight: 400;}
		.bones-product-list-item .categories a:not(:last-child):after{content: ', ';display: inline;}
		.bones-product-list-item > a h2{font-size: 1.2rem;margin: 0;}
		.bones-product-list-item .prices .old{font-size: 1rem;font-weight: 700;vertical-align: bottom;opacity: .24;text-decoration: line-through;}
		.bones-product-list-item .prices .current{font-size: 1.4rem;font-weight: 700;vertical-align: bottom;}
		.lightbox-item-with-caption figcaption{display: none;}
		.lightbox-item-with-caption amp-img{display: block;}
		.amp-image-lightbox-caption{padding: 15px}
		.bones-products-grid.cols-2 > div.bones-h-product-list-item{width: 100%;position: relative;}
		.bones-products-grid.cols-2 > div.bones-h-product-list-item:not(:last-child){margin-bottom: 30px;}
		.bones-h-product-list-item .preview{
			width: 28.99%;
		    display: block;
		    float: left;
            margin-right: 15px;
			background-color: #f4f2f3;
			border-radius: 0 100% 0 0;
		}
		.bones-h-product-list-item .preview amp-img{
			position: relative;
			z-index: 1;
			margin: auto;
			width: 63%;
			height: auto;
		}
		.bones-h-product-list-item .preview .badge{position: absolute;z-index: 2;bottom: 15px;right: 5px}
		.bones-h-product-list-item .preview .badge:last-child{left: auto;right: 5px;bottom: auto;top: 5px;}
		.bones-h-product-list-item .categories a{color: rgba(41,37,42,.54);font-size: 1.1rem;font-weight: 400;}
		.bones-h-product-list-item .categories a:not(:last-child):after{content: ', ';display: inline;}
		.bones-h-product-list-item > a h2{font-size: 1.3rem;margin: 0;}
		.bones-h-product-list-item .prices .old{
			font-size: 1rem;
			font-weight: 700;
			vertical-align: bottom;
			opacity: .24;
			text-decoration: line-through;
		}
		.bones-h-product-list-item .stars{display: block;margin: 5px 0 0;line-height: 1;}
		.bones-h-product-list-item .prices .current{font-size: 1.4rem;font-weight: 700;vertical-align: bottom;}
		.bones-h-product-list-item.sold-out:after{
			content: '';
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			background-color: rgba(255,255,255,.54);
			z-index:5;
		}
		.button-row .button{float: left;}
		.button{
    overflow: hidden;
    font-family: Ubuntu;
    background-color: #00205B;
    color: #FFF;
    margin: 10px;
    padding: 10px 20px;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    text-transform: capitalize;
    border: 0 none;
    border-radius: 4px;
    font-size: 1.3rem;
    font-weight: bold;
    display: block;
    line-height: 1.3;
		}
		
		.button-bordered{background-color: transparent;border: 2px solid #00205B;color: #1a1a1a;}
		.button-full{width:100%; margin-left: 0; margin-right: 0; display: block}
		.button.primary-bg{background-color: #00205B}
		.button.nego-bg{background-color: #32cb78}
		.button.konsul-bg{background-color: #ffbe1c}
		.button.call-bg{background-color: #ff6d15}
		.button.biru-bg{background-color: #518EF8}
		.button.hijau-bg{background-color: #28B446}
		.button.kuning-bg{background-color: #FFD837}
		.button.secondary-bg{background-color: #e7a900}
		.button.light-bg{background-color: #fff;}
		.button.dark-bg{background-color: #333030;}
		.button.ocean-bg{background-color: #2b90d9;}
		.button.grass-bg{background-color: #4A82D8;}
		.button.salmon-bg{background-color: #ff7473;}
		.button.sun-bg{background-color: #feee7d;}
		.button.alge-bg{background-color: #79a8a9;}
		.button.flower-bg{background-color: #353866;display: inline-flex;line-height: 2.8;padding: 0 20px;}
		.button.blue-bg{background: #23a2f4;color: #fff;}
		.button.margin-left-0{margin-left:0}
		.button-large{padding: 10px 20px;font-size: 1.7rem;}
		.button-small{padding: 7px 13px;font-size: 1.1rem;}
		.blog-carousel .button-small{width: 95%;}
		.button .icon-at-right{margin-left: 10px;font-size: 1.4rem;}
		.clean-btn{padding: 0;}
	.input{
		border: none;
		border-bottom: 1px solid rgba(0,0,0,.12);
		background: transparent;
		outline: none;
		display: block;
		width: 100%;
		line-height: 30px;
		height: 35px;
		margin-bottom: 20px;
		font-family: inherit;
	}
	textarea.input{height: auto;min-height: 35px;}
	.single-line-form *:first-child{width:70%;}
	.single-line-form *:last-child{width: 30%;margin: 0;height: 50px;line-height: 50px;padding: 0;}
	select.modern-select{height: 35px;border: none;border-bottom: 1px solid rgba(0,0,0,.12);}
	.alert-box{padding: 15px 20px;}
	.alert-box p{display: inline-block;margin: 0 0 0 5px;font-weight: 600;}
	.alert-box i{ border: 2px solid;border-radius: 50%;width: 30px;height: 30px;line-height: 28px;padding: 0;text-align: center;}
	.alert-box-success{background-color: #BFF9D0;color: #299c77;}
	.alert-box-success i{border-color: #299c77}
	.alert-box-info{background-color: #c3ebff;color: #65a6c7;}
	.alert-box-info i{border-color: #65a6c7}
	.alert-box-error{background-color: #ffd0d0;color: #d45757;}
	.alert-box-error i{border-color: #d45757}
	.alert-box-warning{background-color: #fff4b8;color: #e6ae15;}
	.alert-box-warning i{border-color: #e6ae15}
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
.pt50 {padding-top: 50px;}
.p20{width: 95%; margin: auto;}
.chat, .chat2 {
	width: 90%;
    box-shadow: 0 1px 6px rgba(0, 0, 0, 0.12), 0 1px 4px rgba(0, 0, 0, 0.12);
    border-radius: 5px;
    padding: 2px 5%;
    margin: 15px 8px;
    display: flex;
    position: relative;
    line-height: 2.5;
}
.chat2 {display: block;}
.middle{width: 90%;margin: auto;display: block;}
.left {width: 100%;border-bottom: 1px dashed #ccc;display: block;height: auto;position: relative;}
.left .rfq-back-img {margin-top: 0;margin-left: 0;left: -62px;bottom: -75px;position: absolute;transform: scale(.55);}
.left .rfq-description-container {margin-left: 20px;margin-top: 0;margin-top: 20px;margin-right: 8px;}
.left .rfq-description-container .rfq-description-container{margin-left: 140px;margin-top: 0;margin-top: 20px;margin-right: 8px;}
.left .rfq-description-container .go-to-form-btn {left: 80px;}
.left .rfq-description-container .go-to-form-btn {margin-top: 20px;margin-bottom: 30px;}
.left .rfq-description-container .rfq-title {font-size: 15px;font-weight: 700;display: inline-block;line-height: 40px;}
.rfq-model {width: 255px;height: 255px;}
.sprite {
    display: inline-block;
    background: url(https://m.plazafotocopy.com/assets/img/toa.png) no-repeat;
    overflow: hidden;
    text-indent: -9999px;
    text-align: left; margin-left: 20px;
}

.left2 amp-img{width: 35%;height: auto;float: left;}
amp-lightbox#dllth {overflow:scroll;}
#masterBottomLink {color: #3e3e3e;padding: 5px 15px;font-size: .9em;}
#masterBottomLink a {color: #00205B;text-decoration: none;}
#masterPhone, #master_bbm  {font-size: 1.5em;font-weight: bold;margin: 10px 0;cursor: pointer;font-family: Helvetica,ubuntu;}
#masterPhone a {color: #3a3a3a;text-decoration: none;}
#master_bbm {font-size: 12px;}
.txtNotLink {text-decoration: none;color: #3a3a3a;}
#masterPhoneIcon {height: 1em;width: 22px;display: inline-block;-moz-background-size: 100% auto;-webkit-background-size: 100% auto;-o-background-size: 100% auto;background-size: 100% auto;background-repeat: no-repeat;background-position: center center;vertical-align: middle;}
.mt40{margin-top:20px;}
.pabs{position:absolute;}
.z1{z-index:1;}
.centerAligned {text-align: center;}
.blog-carousel-item amp-img{display: block;}
.blog-carousel-item{position: relative;margin: 3px;border-radius: 3px;overflow: hidden;box-shadow: 0 0 3px 0 rgba(0,0,0,.40);}
.blog-carousel-item-caption{position: absolute;bottom: 0;left: 0;right: 0;background-color: #FFF;padding: 10px 5px;line-height: 1;}
.blog-carousel-item-caption h5{text-overflow: ellipsis;overflow: hidden;white-space: nowrap;width: 100%;line-height: 1.3;font-size: 1.2rem;}
.rating.active, .rating:not(.text-muted) {color: #fdb913;}
.rating {line-height: 1;font-size: 11px;margin-right: 2px;color: #b6b6b6;}
.capro2{height:100px;width: 120px;}
.capro24{width: 278px;}
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
.subkebutuhan h5{text-align:center;margin: 5px auto 0;color: #30475A;    margin-bottom: 10px;}
.subkebutuhan .tombol {
    border-radius: 2px;
    background-color:#00205B;
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
.capro2 amp-img, .capronego amp-img, .lightbox amp-img , .capro amp-img{width: 100%;height: auto;}
.slidecar .capronego amp-img{width: 150px;height: auto;}
.capro2 amp-img, .lightbox amp-img , .capro amp-img{margin:auto;}
.capro23 amp-img{width: 100%;height: auto;margin:auto;}
.zoom amp-img{zoom: 0.8;margin: 10% auto;}
.hala .halb amp-selector [option]{position:absolute;}
.tvlayer{height: 190px;}
.tvlayer amp-img{width: 278px;height: 186px;margin-top: -25px;background: #000;}
.capro2 h5, .capro23 h5,.capronego h5, .capro h5 {
    white-space: normal;
    width: 100%;
	font-size: 11px;
    line-height: 1.25em;
    height: 20px;
	color: #fff;
}
.capro h5, .capronego h5, .infopro small {color: #00205B;}
.infopro2, .infopro {
    background-color: #00205B;
    padding: 5px 0;
    line-height: .8;
    text-align: center;
    width: 100%;
    color: #fff;
}

.service__box {border: 2px solid #ccc;display: inline-block;vertical-align: top;margin: 10px;padding: 10px;}
.text-center {text-align: center;}
.service__box__desc {padding: 8px;}
.service__box__title {color: #FB4B2A;font-weight: bold;font-size: 12px;margin-bottom:10px;}
.service__box p{font-size: 10px;line-height: 1.5;font-weight: 100;color: #888;}
.service__detail {border-top: 2px solid #ccc;margin-top: 20px;}
.service__box__price {font-size: 14px;font-weight: bold;color: #FB4B2A;}
.service__detail__col {padding: 10px 0;float: left;line-height: 1;width: 50%;}
.service__box__img img{width:100%;height:auto;border-radius:10px;}
.button--cta {
    background: #2AC2EC;
    color: white;
    -webkit-box-shadow: 0 -2px 0 rgba(0,0,0,0.2) inset;
    box-shadow: 0 -2px 0 rgba(0,0,0,0.2) inset;
}
.capronego .infopro{padding: 5px 0 0 10px;height:130px;text-align:justify;border-top: 1px dashed #ccc;width: 100%;}
.part amp-img{width: 90%; height: auto;margin: 10px;border:3px solid #00205B;}
.part .infopro {height: 130px;}
.part .infopro .capronego h5 {height: 50px;}
.capronego h5 {height:40px; padding: 5px 0;margin: 0;}
.capronego .pricepro {height: 10px;text-align: justify;}
.capronego .productLineThrough {font-size: 9px;display: inline-block;}
.capronego .recommendedItemDiscountPercentage:before {content: '';border: 4px solid #E30C0C;position: absolute;border-left-color: transparent;border-top-color: transparent;border-bottom-color: transparent;left: -8px;top: 50%;margin-top: -4px;}
.capronego .recommendedItemDiscountPercentage {background: #E30C0C;padding:3px;color: white;display: inline-block;font-size: 7px;position: relative;margin-left: 3px;}
.capronego .divDetailProductItemPrice {padding:0; font-size: 12px;}
.infopro small {font-size: .8rem;}
.text-left .input{text-align:left;cursor:pointer}
.bulletpoint{color:#00205B;background:#fff;background: #ededed;border-top: 1px solid;}
.bulletpoint h5, .bulletpoint h6{color:#f8011e;font-size: 12px;line-height: 1em;height: 18px;}
.spartan{line-height: 1.2;}
.spartan h4{font-size:1em; font-weight:bold;margin:3px;}
.spartan p{font-size:1em;margin:0;}
.spartanbtn a {width: 100%;font-size: 8px;padding: 7px;margin: 0;}
.col-xs-1.spartan{width: 16.66666667%;}
.col-xs-6.spartan{margin:10px 0;width: 50%;}
.col-xs-2.spartan{width: 33.33333333%;}
.capronego{width:45%; height:auto;}
.slidecar {height:auto;}
.capronego34{width:48%; height:auto;}
.plkpn {height:137px;}
.plkpn .infopro2 {line-height:0.7;}
.capro2 .infopro2  h5 {white-space: nowrap;}
.capronego .infopro {color: #000;font-size: 10px;line-height: 2;}
.plkpn amp-img{height: 99px;zoom: 0.8;margin: auto; width:100%;}
.capro{width:45%; height:228px;}
.infopro {background-color: #FFF;}
.pricepro{height: 35px;text-align: center;}
.productLineThrough {text-decoration: line-through;height: 1.5em;color: #9b9b9b;font-size: .9em;display: block;}
.fotoslide {width: 100%;height: 100%;margin: auto;}
.divDetailProductItemPrice {color: #FF6D15;display: inline-block;font-weight: bold;font-size: 10px;padding: 10px 20px 0;}
.bottom-menu {width: 100%;height: 50px;position: fixed;z-index: 5;bottom: 0;background-color: #fff;border-top: 1px solid #ddd;border-top-width: 2px;border-top-style: solid;border-top-color: #00205B;}
.bottom-menu .icon-content {padding: 5px;width: 20%;height: 50px;float: left;text-align: center;cursor: pointer;z-index: 100;}
.bottom-menu .icon-content .icon-content--img {height: 45px;position: relative;}
.bottom-menu .icon-content amp-img {height: 25px;margin-top:0;}
.bottom-menu .icon-content .icon-content--img p {font-size: 12px;text-align: center;color: #00205B;margin-top: -5px;}
.feed__container img {height: auto;vertical-align: middle;border: 0;max-width: 100%;-ms-interpolation-mode: bicubic;}
#meshSection2 {background-color: #2d3e50;background-image: linear-gradient(90deg,#4b83bf 0,#2d3e50);color: #fff;clip-path: polygon(100% 100%,100% 0,-850% 0);}
#meshSection1 {background-color: #2d3e50;color: #fff;}
.meshTitle {line-height: 33px;padding-top: 35px;}
#meshSection1 .meshTitle .meshTitlePlaza {text-transform: uppercase;font-size: 35px;line-height: 1em;text-align: center;margin: 0 20px;}
.meshDescription {margin: 0 20px;padding-top: 15px;text-align: center;line-height: 1.4em;font-size:10px;}
.sbawah .Mesin_Fotocopy_Paling_LARIS {margin-left: 20px;display:inline;}
.inline .Mesin_Fotocopy_Paling_LARIS {display:inline;}
.d-inlineblock{display:inline-block;}
.Mesin_Fotocopy_Paling_LARIS {font-weight: 700;font-size: 14px;color: #3e3e3e;padding-top: 5px;padding-bottom: 0px;}
.padding50{padding: 0 0 5rem 0;}
.padding05{padding: 0 0 0.5rem 0;}
.bgformenu {background-color: #F7F7F7;width: 100%;z-index: auto;margin-top:-45px;}
.pekat2 {background-color: #eee;width: 100%;z-index: auto;border-bottom: 1px solid #ccc;border-top: 1px solid #ccc;}
.pekat2 .Mesin_Fotocopy_Paling_LARIS {
	font-weight: 700;
    font-size: 14px;
    color: #3e3e3e;
    padding-top: 5px;
    margin: 0 0 0 30px;
    text-align: right;
    padding-right: 10px;
    padding-bottom: 0px;
    border-bottom: 2px solid #00205B;
}
.back-in-modal, .close-modal {font-weight: 700;color: #7F7F7F;z-index: 1;}
}
header.accordion-title.h4 {background: #fff;border: none;padding: 10px;color: #00205B;z-index: 2;}
.social .borderbulat{width: 31px;height: 31px;display:inline-block;margin:.3em;}
.pageHeader {background-color: #eee;padding: 12px 20px;}
.pekat{background-color: #ededed;position: relative;width: 100%;padding:10px;z-index: auto;	}
.pointkeunggulan {margin: 0px;font-size: 13px;color: rgb(75, 75, 75);line-height: 20px; font-weight:600;}
.light-color i{margin:10px;}
.mt30 .button{border-radius: 5px;font-weight: 400;margin: 0;    margin-left: 3px;display: inline;}
.pagination {text-align: center;margin-top:10px;}
.pagination a {display: inline-block;margin: 0;border-radius: 50%;color: #212121;min-width: 30px;min-height: 30px;line-height: 30px;}
.pagination a.active {color: #FFF;background-color: #FF6D15}
.box-point{border-bottom: 1px solid #eee;box-sizing: border-box; display: flex; flex-flow: column nowrap; flex: 0 0 auto; place-content: center; align-items: stretch; width: 70%;}
.subkebutuhan amp-img{margin: auto;}
		amp-lightbox{background-color: rgba(0,0,0,.87)}
		amp-lightbox.light{background-color: rgba(255,255,255,.87)}
		amp-lightbox > .lightbox{position: absolute;bottom: 0;top: 0;right: 0;left: 0;}
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
		amp-lightbox .message{text-align: center;}
		amp-lightbox h1,amp-lightbox small{color: #00205B}
		amp-lightbox.light h1,
		amp-lightbox.light small{color: #212121}
		amp-lightbox small{font-size: 1.2rem;}
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
		table td, table th {padding: .75rem;line-height: 1.5;vertical-align: top;border-top: 1px solid #eceeef;}
		table thead th {vertical-align: bottom;border-bottom: 2px solid #eceeef;}
		.table-inverse {color: #eceeef;background-color: #373a3c;}
		.table-inverse td,
		.table-inverse th,
		.table-inverse thead th {border-right: #55595c;}
		.table-inverse td,
		.table-inverse th,
		.table-inverse thead th {border-color: #55595c;}
		.thead-inverse th {color: #fff;background-color: #373a3c;}
		.thead-default th {color: #55595c;background-color: #eceeef;}
		.table-responsive {display: block;width: 100%;min-height: .01%;overflow-x: auto;}
		.table-striped tbody tr:nth-of-type(odd) {background-color: #f9f9f9;}
		.table-bordered td, .table-bordered th {border: 1px solid #eceeef;}
		.table-hover tbody tr:hover {background-color: #f5f5f5;}
		.table-active, .table-active>td, .table-active>th {background-color: #f5f5f5;}
		.table-success, .table-success>td, .table-success>th {background-color: #dff0d8;}
		.table-info, .table-info>td, .table-info>th {background-color: #d9edf7;}
		.table-warning, .table-warning>td, .table-warning>th {background-color: #fcf8e3;}
		.table-danger, .table-danger>td, .table-danger>th {background-color: #f2dede;}		
thead{background: #00205B;color: #fff;}
tbody {font-weight: normal;font-size: 12px;}
.bottom-grid.active {background-color: #00205B;font-size: 25px;}
.bottom-grid.active	a{color:#fff;}
.relative {position: relative;}
.bottom-grid {width: 25%;display: table-cell;font-size: 25px;color:#00205B;}
    .collapsible-captions {
      --caption-height: 32px;
      --image-height: 300px;
      --caption-padding: 1rem;
      --button-size: 28px;
      --caption-color: #f5f5f5;
      --caption-bg-color: #ededed;
      background: var(--caption-bg-color);
    }
.collapsible-captions * {-webkit-tap-highlight-color: rgba(255, 255, 255, 0);box-sizing: border-box;}
.collapsible-captions .fixed-height-container {position: relative;width: 100%;height: var(--image-height);}
.collapsible-captions amp-img img {object-fit: contain;}
.collapsible-captions figure {margin: 0;padding: 0;}
.collapsible-captions figcaption {position: absolute;bottom: 0;margin: 0;width: 100%;max-height: var(--caption-height);line-height: var(--caption-height);padding: 0 var(--button-size);white-space: nowrap;overflow: hidden;text-overflow: ellipsis;transition: max-height 200ms cubic-bezier(0.4, 0, 0.2, 1);z-index: 1;color: var(--caption-color);background: #00205B;   }
.collapsible-captions figcaption.expanded {padding: var(--button-size);line-height: inherit;white-space: normal;text-overflow: auto;max-height: calc(var(--caption-height) + var(--image-height));overflow: auto;}
.collapsible-captions figcaption:focus {outline: none;border: none;}
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
.mobmenu{margin-bottom:10px;text-align:center}.mobmenu ul{padding:10px;list-style:none;width:100%}
.mobmenu ul li{border-bottom: 1px solid #ccc;position:relative;
    border-radius: 8px;
    box-shadow: 0 2px 4px 0 rgba(27,27,27,.2);
    overflow: hidden;
    float: left;
    height: 140px;
    margin: 1% 0;
    width: calc((100% - 7%)/3);}
.mobmenu ul li:not(:nth-child(3n)){margin-right:11px}
.meshTitleVanectro{
	font-size: 21px;
    text-align: center;
    margin: 0 20px;
}
.pricepro .recommendedItemDiscountPercentage{color:#fff; background: #f8011e;}
.hala .capro,.hala .capro2{background:#fff;}
.halb amp-selector [option][selected]{color:#00205B;outline: none;border-bottom: 2px solid #00205B;}
.halb amp-selector [option] {cursor: pointer;border-bottom: 2px solid #ccc;
    position: absolute;
    margin-left: 0;
    width: 33%;
    float: left;
    background: #fff;
    z-index: 12;
	}
.halb amp-selector [option]:nth-child(1){margin-left: 0%;width: 34%;}	
.halb amp-selector [option]:nth-child(3){margin-left: 33%;}
.halb amp-selector [option]:nth-child(5){margin-left: 66%;width: 34%;}
.halb .tabButton i{font-size: 16px;display: block;padding-top:10px;}
.rating i{display:inline-flex;}
.halb .tabButton{font-weight:500;}
		.social-share-container{height: 30px;}
		.socials-share-title{
			line-height: 30px;
			display: inline-block;
			vertical-align: top;
			margin-right: 10px;
		}
		.accordion section{margin-bottom: 4px;}
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
		.accordion section[expanded] > .accordion-title:after{content: '\f106';}
		.accordion section > div{padding: 10px 15px;}
		.accordion section > div.padding-left-0{padding-left: 0;}
		.accordion section > div.padding-right-0{padding-right: 0;}
        .cart-product-item{position: relative;}
        .cart-product-item .preview{float: left;width: 80px;margin-right: 10px;display: block;}
        .cart-product-item .price{color: #000;font-size: 1.4rem;font-weight: 600;}
        .cart-product-item .title{font-size: 1.4rem;color: rgba(0,0,0,.54);margin-top: 0;}
        .options > div:not(:last-child){margin-right: 10px;padding-right: 10px;border-right: 1px solid rgba(0,0,0,.06);}
		.text-center{text-align: center}
		.text-right{text-align: right}
		.text-left{text-align: left}
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
		
.time-line-item:before {
    content: '';
    position: absolute;
    left: 14px;
    top: 0;
    bottom: 0;
    width: 4px;
    background-color: #00205B;
}
.time-line-item amp-img {
    position: absolute;
    top: 50%;
    left: 39px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
}
.time-line-item:after {
    content: '';
    position: absolute;
    left: 7px;
    top: 50%;
    width: 10px;
    height: 10px;
    margin-top: -10px;
    border-radius: 50%;
    border: 4px solid #f8011e;
    background-color: #fff;
}
.time-line-item {
    padding-left: 30px;
    padding-top: 15px;
    padding-bottom: 15px;
    position: relative;
}		
.title-popup {
    display: block;
    font-size: 18px;
    text-transform: capitalize;
    border-bottom: 1px solid #282828;
    padding-bottom: 5px;
    color: #282828;
    margin: 0 20px 15px 15px;
}
.close-modal {top: 5px;position: absolute;right: 0;font-size: 20px;margin: 5px 20px;}
.dgb {width: 40%;margin-right: 10px;float:left;}
.gbpos{    
	width: 100%;
    display: block;
    height: 160px;
    float: left;
    overflow: hidden;
    margin-right: 15px;
}
.kotakisi img{object-fit:cover!important;}
.gbpos2 .tg{width:100%;font-size: 35px;}
.gbpos2 .bln{width:100%;font-size: 12px;}
.gbpos2 .tanggal{width: 30%;}
.gbpos2 .tanggal, .gbpos2 .tanggal a{
    display: block;
    float: left;
    background: #D71149;
    color: #fff;
	text-align: center;
    margin-right: 10px;
}

.u-list-reset {list-style:none;padding:0;margin: 0;}
.u-list-reset .inext{position: absolute;top: 15px;right: 9px;width: 15px;height: 20px;background: url(https://m.plazafotocopy.com/assets/img/next.png) no-repeat transparent;background-size: 7px;opacity: 0.7;}
		a,
		.primary-color{color: #3e3e3e}
		.secondary-color{color: #e7a900}
		.light-color{color: #FFF}
		.light-color-2{color: rgba(255,255,255,.54)}
		.dark-color{color: #333030;}
		.ocean-color{color: #2b90d9;}
		.grass-color{color: #4A82D8;}
		.salmon-color{color: #ff7473;}
		.sun-color{color: #feee7d;}
		.alge-color{color: #79a8a9;}
		.flower-color{color: #353866;}
		.grey-color{color: #c4c4c4;}
		.primary-bg{background: #445268}
		.secondary-bg{background: #e7a900}
		.light-bg{background: #fff;}
		.dark-bg{background: #333030;}
		.ocean-bg{background: #2b90d9;}
		.grass-bg{background: #4A82D8;}
		.salmon-bg{background: #ff7473;}
		.sun-bg{background: #feee7d;}
		.alge-bg{background: #79a8a9;}
		.flower-bg{background: #353866;}
		.grey-bg{background: #c4c4c4;}
		.paddingTop5 {padding-top: 5px;}
		.circle{border-radius: 50%}	
		.text--red {color: #ff2179;}
		.padding10{padding: 10px 20px;}		
		.margin-0{margin: 0}
		.margin-top-0{margin-top: 0}
		.margin-bottom-0{margin-bottom: 0}
		.margin-bottom-5{margin-bottom: 5px}
		.margin-left-0{margin-left: 0}
		.margin-right-0{margin-right: 0}
		.padding-left-0{padding-left: 0}
		.padding-right-0{padding-right: 0}	
		.border-top{border-top:1px solid #ccc;}
		.border-r5{border-radius:5px;}
    </style>