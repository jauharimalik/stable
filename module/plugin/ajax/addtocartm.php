<?php

error_reporting(0);
if(empty($_SESSION['cart'])){$_SESSION['subtotal'] = 0;}
$pesan="";

if(isset($_GET['cektoken'])){
	echo "<div id='cekouttoken'>".get_total_produk()."</div>"; exit;
}
	
if($_POST['produkid']>0){
	$pid=$_POST['produkid'];
	$q=$_POST['qty'];
	$harga=$_POST['harga'];
	addtocart($pid,$q,$harga);	
	if($q <= 0) {remove_product($pid);}
} 
if(get_total_produk() >=1 ){
?>	
<div id="cekoutfly">
<style>
.cart_container {
    position: fixed !important;
    left: 0;
	max-width: 48rem;
    margin: 0 auto;
    right: 0;
    background-color: white;
    z-index: 3;
    border-top: solid 0.25em #083c76;
    bottom: 56px;
    transition: bottom 0.5s;
}

.cartpanel_open {
    bottom: 0;height: 50vh;
}

.cart_container .pull {
    position: absolute;
    left: calc(50% - 0.75em);
    top: -0.75em;
    transition: transform 0.5s;
}
.pull_open {transform: rotate(180deg);}
.cart_container .checkoutbtn {
    position: absolute;
    top: .8em;
    right: 1rem;
}
.checkoutbtn .button{
	color: white;
    border-radius: 4px;
    margin-top: 0.25rem;
    margin-bottom: 0.25rem;
    border: 0.3rem solid transparent;
    touch-action: manipulation;
    background: #083c76;	
}
.cart_container .h50px{display: flex;}
.cart_container .gbcheckout {
    width: 50px;
    height: 50px;
    border-right: solid 1px #d8d8d8;
    border-bottom: solid 1px #d8d8d8;
    position: relative;
}
.gbcheckout .gbbag {
    width: 36px;
    padding: 5px;
    height: auto;
}
.gbcheckout .angkabag {
	position: absolute;
    top: 2em;
    right: .5em;
    background-color: #F0576C;
    width: 2em;
    height: 2em;
    line-height: 1.8em;
    border-radius: 1em;
    font-size: 9px;
    color: white;
    text-align: center;
}
.sebelahbag {
    height: 50px;
    display: flex;
    flex-grow: 1;
    padding-left: 1rem;
    align-items: center;
    padding-right: 1rem;
    font-size: 1.6rem;
    border-bottom: solid 1px #d8d8d8;
}
.cart_container .cart_wrapper {
	display : none;
    max-height: calc((50vh - 50px) + 1rem);
    overflow-y: scroll;
	overflow-x: hidden;
}
.cart_container .horizontal{
    height: 4em;
    width: 100%;
    position: relative;
    padding-top: calc(2 * 1rem);
    padding-bottom: calc(2 * 1rem);
    border-bottom: solid 1px #d8d8d8;
    padding-left: 1rem;
    padding-right: 1rem;	
}
.cart_container .horizontal .produkcart .gbimg{
	float:left;
    width: 5em;
    height: 5em;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    border-radius: 0.25em;
    filter: none;	
}
.cart_container .horizontal .produkcart .produkcart_detail{
    float: left;
	width : calc(( 100% - 3em) - 140px );
    margin-left: 1rem;
    overflow: hidden;
}
.cart_container .hargacart{
	font-size:14px;
	color : red;
	font-weight:bold;
}
.produkcart_detail .judulproduk{
    white-space: normal;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 14px;
    color: #083c76;
    height: 25px;
    font-weight: bold;
}
.cartpanel_open .cart_wrapper{ display : block; }

.cartpanel_open .Button__number {
    border-radius: 5px;
    width: 75px;
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
</style>
<div class="cartbhn cart_container">
	<img class="pull" src="<?php echo $c_url;?>/compressed/amp/header/top.svg" alt="sayurbox-ic-pull-up" width="24" height="24">
    <div class="checkoutbtn">
		<a href="<?php echo $c_url;?>/checkout" class="button">Checkout</a>
	</div>
	<div class="h50px" role="button">
		<div class="gbcheckout">
			<img class="gbbag" src="<?php echo $c_url;?>/compressed/amp/header/bag.svg" alt="sayurbox-ic-pull-up">
			<span class="angkabag"><?php echo format_rupiah(get_total_produk());  ?></span>
		</div>
		<div class="sebelahbag">
			<span class="hargacart">Rp <?php echo format_rupiah(get_order_total());  ?></span>
		</div>
	</div>
	<div id="isikeranjang" class="cart_wrapper"><?php require_once PLUG.DS."/ajax/isikeranjang.php";?></div>
</div>				
<script>
document.querySelector(".cartbhn").addEventListener("click", opendetailcart);
function opendetailcart(){

  var cartbhn = document.querySelector(".cartbhn");
  cartbhn.classList.toggle("cartpanel_open");

  var pull = document.querySelector(".pull");
  pull.classList.toggle("pull_open");
}
</script>
</div>
<?php } ?>
