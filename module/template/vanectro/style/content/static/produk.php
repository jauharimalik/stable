<style>
.slideshow-container {
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.slideutama {
    display: none;
    opacity: 0;
    z-index: 1;
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;
}
.slidemain img {
    width: 100%;
}
.prevslideswipe:hover, .nextslideswipe:hover {
    background-color: #f1f1f1;
    color: black;
}
.nextslideswipe {
    right: 0;
    border-radius: 3px 0 0 3px;
}
.prevslideswipe, .nextslideswipe {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 14px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}
.showing{
    display: block;
    opacity: 1;
    z-index: +1;	
}
.panel{
display: block;
    margin: 0 10px;	
}
.footer .addtocart{
    width: 90%;
    margin: 0 5%;
    color: #fff;	
}
.cart_container{bottom:0!important;z-index: 5!important;}
 .menunya{display: block;}
 .menuli{font-size: 1.3rem;
    display: block;
    padding: 10px;
    margin: 0;
    border-bottom: 1px solid #eee;
}
 .menuli i{margin-right:10px;}
 .menuli:after {
	content:"";
    background-image: url(<?php echo $c_url; ?>/compressed/amp/pnext.svg);
    width: 8px;
    height: 14px;
    margin-top: 5px;margin-right: 10px;
    float: right;
}
 .menunya .active{color:#083d77;}
 .menunya .active:after{-webkit-transform: rotate(-90deg);}
.panel a{
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
    font-size: 14px;
	padding: 10px;
	display:block;
	color:#000;
	border-bottom:1px solid #eee;
}
.item{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    border-radius: 4px;
	overflow:hidden;
    margin: 5px;
    width: 170px;
    display: inline-block;
	text-align: left;
}
.item img{display:block;width:150px;height:150px; }
.item .khas{padding:5px 10px;}
.item h5 {overflow:hidden;white-space: normal;margin: 0;padding-bottom: 10px;height: 18px;width: 100%;font-size: 12px;}
.item .stok{border-radius: 4px;border: 1px solid;display: inline-flex;width: 90%;}
.item .stok .label{color:#fff;padding: 0 5px;display: inline-flex;background: #083d77;}
.item .stok .jml {padding-left: 20px;display: flex;}
.item .category{color: #000;font-size:12px;}
.item .garistengah, .linethrough {text-decoration: line-through;font-size: 9px;}
.judulmerah, .item .harga {font-size: 14px;color: #f8011e;}  
.item .btn{
	border-radius: 5px;
    width: 100%;
    margin: 10px 0 0;
    border: 2px solid #083c76;
    display: inline-block;
    padding: 0;
    height: 26px;
    line-height: 26px;
	color:#fff;	
}
.gold-col, .rating{font-size: 10px;padding-top: 5px;color: #fdb913;}
.rating span{color: #083d77;}
.kanwil{border-top: 1px solid #eee;width: 90%;font-size: 9px;}
.kotakmar img{width: 60px;height: 60px;float: left;border-radius: 50%;margin: 10px;}
.labelmar{
    margin-bottom: 10px;
    display: inline-block;
    font-size: 12px;
    text-align: left;
    font-weight: normal;
    color: #000;
}
.btnmini{
    border-radius: 8px;
    padding: 8px 10px;
    width: 100%;
    font-size: 12px;
    color: #fff;
    background: #083d77;
	color:#fff;	
}
.ulasan{
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    overflow: hidden;
    border-radius: 4px;
    border: 1px solid;
    margin-bottom: 5px;
    width: 80%;
    color: #eee;
    background: #fff;
    display: inline-block;
    margin-left: 8px;
	text-overflow: ellipsis;white-space: nowrap;overflow: hidden;
}
.ulasan:first-child {margin-left: 0px;}
.tanggal{margin-top: -10px;
    text-align: center;
    margin-right: 10px;
    float: left;
    width: 30%;
    color: #fff;
    background: #083d77;
}
.ulasan .judul{width:60%;font-size:12px;}
.ulasan .categories {font-size:12px;}
.hari{border-bottom: 2px solid #eee;font-size: 39px;width: 100%;}
.bulan{width: 100%;font-size: 14px;}
.ulasan .seri{border-top: 1px solid #eee;font-size: 12px;float: left;width: 65%;}

.cabang{
    margin-left: 8px;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    margin-bottom: 10px;
    width: 80%;
    border-radius: 4px;
    color: #fff;
    display: inline-block!important;
    overflow: hidden;
}
.cabang:first-child{margin-left:0;}
.cabang img{width:100%; height:150px;}
.cabang p{white-space: normal;overflow: hidden;height: 90px;font-size: 12px;}
.overtext {
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden;
}
.h46px{height:46px;}

.capronego .Button__number {
    border-radius: 5px;
    width: 100%;
    margin: 10px 0 0;
    border: 2px solid #083c76;
    display: inline-block;
}
.button_qty {
    width: 30%;
    float: left;
    display: block;
    font-size: 20px;
    background: #083c76;
    color: #fff;
    text-align: center;
}
.qty_value {
    text-align: center;
    width: 38%;
    margin: 0 1%;
    display: inline-block;
    font-size: 8pt;
    float: left;
    line-height: 2.5;
    font-weight: bold;
    align-items: center;
}
.hidden{display:none;}


.h46px{height:46px;}
.h46px .btn{display: inline-block;float: left;}
.capronego .Button__number {
    border-radius: 5px;
    width: 100%;
    margin: 10px 0 0;
    border: 2px solid #083c76;
    display: inline-block;
	float:left;
}
.button_qty {
    width: 30%;
    float: left;
    display: block;
    font-size: 20px;
    background: #083c76;
    color: #fff;
    text-align: center;
}
.qty_value {
    text-align: center;
    width: 38%;
    margin: 0 1%;
    display: inline-block;
    font-size: 8pt;
    float: left;
    line-height: 2.5;
    font-weight: bold;
    align-items: center;
	color:#083c76;
}

.hidden{display:none;}
.scard{
	border-radius: 8px;
    width: 45%;
    overflow: hidden;
    display: inline-block;
    height: 280px;
    margin: 0 .5%;
    position: relative;
}
.scard .gbbgs {
    width: 100%;
    height: 100%;
	opacity: 1;
    object-fit: cover;
}
.scard .scont {
position: absolute;
    bottom: 5px;
    padding: 0 10px;
    color: #fff;
    font-size: 14px;
    font-weight: bold;
    text-overflow: ellipsis;
    white-space: normal;
    overflow: hidden;
}
.scard .solay {
    position: absolute;
    top: 0;
    height: 100%;
    width: 100%;
    background: #324e70;
    opacity: .8;
}
.icostory{
    position: absolute;
    top: 20px;
    left: 10px;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: #fff;
    border: 3px solid #3272d9;
}
.gb_toko{
    margin: 0;
    float: left;
    z-index: -4;
    display: block;
    height: 270px;
    object-fit: cover;
}
.infotoko {
    margin: 0;
    z-index: 99;
    float: left;
    padding: 5px 0 10px 10px!important;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    width: calc(100% - 10px);
    background: #fff;
    overflow: unset;
}
.namatoko{
    width: 100%;
    float: left;
    font-size: 18px;
    line-height: 1.2;
    margin: 10px 0;
}
.hargalama{
width: 100%;
    float: left;	
}
.harga
{
    font-size: 24px;
    color: #f8011e;
    float: left;	
}
.logotoko{
	width: 20%;
    margin-top: -10%;
    background: #fff;
    float: left;
    border-radius: 50%;
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
}
table{width: 100%;margin: 0;font-size: 12px;}
table tr {
    background: #fff;
    border: 1px solid #ddd;
    padding: .35em;
}
table th, table td {
    padding: .625em;
    text-align: left;
    padding-left: 20px;
}
table tr:nth-child(odd) {background-color: #eeeeee;}
.gantungan .tab-link {
    padding: 10px;
    font-size: 12px;
    color: #000;
    display: inline-block!important;
    margin-left: 8px;
}
.gantungan .current{
    color: #083d77!important;
    font-weight: bold;
    border-bottom: 3px solid #083d77;
    outline: none;
}	
.mt35{margin-top: 35px;}
.tab-content{display:none;}
.tab-content.current{display:block!important;}
.tab-content h2{font-size:14px;}
.labelfoto{  
    background: #546e7a;
    padding: 1rem;
    width: 20%;
    font-size: 1em;
    border-top-right-radius: 3em;
    color: #fff;
    float: left;
    margin-top: -25px;
    position: absolute;
    margin-left: -10px;
}
.garistengah, .linethrough {
    text-decoration: line-through;
    font-size: 14px;
}
small {    font-size: 12px;}
.diskon {
    background-color: #F69C07;
    padding: calc(0.5 * 0.5rem) 0.5rem calc(0.5 * 0.5rem) 0.5rem;
    color: white;
    border-radius: 1em;
    text-decoration: unset;
    margin-left: 10px;
}
</style>