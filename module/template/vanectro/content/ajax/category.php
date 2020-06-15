<?php
defined("SYS") or exit("Access Denied!");
error_reporting(0);
require_once(LIB.DS."faq.php");
?>
<style>
.produklist .itemproduknya {
    box-shadow: 0 1px 6px rgba(0,0,0,.12);
    overflow: hidden;
    border-radius: 4px;
    border: 1px solid;
    margin-left: 1%;
    margin-bottom: 1%;
    margin-top: 1%;
    display: inline-block;
    width: 47.5%;
    color: #eee;
}
.produklist .itemproduknya .lazy {
    width: 100%;    
	object-fit: cover;
    height: 156px;
    float: left;
    background: #083c76;
}
.produklist .capronego{
    padding: 10px;
    padding-bottom: 5px;
    font-size: 10px;
    display: block!important;
}
.capronego h5 {
    overflow: hidden;
    white-space: normal;
    margin: 0;
    height: 38px;
    width: 100%;
    font-size: 12px;
	text-transform:uppercase;
}
.produklist .capronego .harga{
    font-size: 14px;
    color: #f8011e;
}
.produklist .negobtn{
    margin: 10px 0;
    padding: 7px 15px;
    border-radius: 4px;
    background-color: rgb(8, 60, 118);
    text-align: center;
    color: #fff;
}			
.category {
    color: #000;
    margin: 5px 0 0;
    font-size: 12px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.produklist .stok {
    border-radius: 4px;
    border: 1px solid;
    display: inline-flex;
    width: 90%;
}
.produklist .stok .label {
    color: #fff;
    padding: 0 5px;
    display: inline-flex;
    background: #083d77;
}
.produklist .stok .jml {
    padding-left: 20px;
    display: flex;
}
.produklist .garistengah, .linethrough {
    text-decoration: line-through;
    font-size: 9px;
}
.produklist .kanwil {
    border-top: 1px solid #eee;
    width: 90%;
    font-size: 9px;
}
.produklist .itemproduknya .lazy{background:none;}
.produklist .fotopart img{
    border-radius: 50%;
    padding: 10px;
    zoom: .9;
}
.h46px {
    height: 46px;margin-bottom:10px;
}
.khas {float:left;padding: 5px 10px;}
 .Button__number {
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
	color:#000;
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
<?php
$keunggulan = array(
	"Terima C.O.D" => array("/compressed/mobilehome/free-ongkir.webp","Se - Pulau Jawa"),
	"Harga Termasuk Ongkir" => array("/compressed/mobilehome/cod.webp","Tarif Ongkir Jelas"),
	"Garansi Seumur Hidup" => array("/compressed/mobilehome/garansi.webp","Ber Garansi Panjang"),	
	"Instalasi Se-Indonesia" => array("/compressed/mobilehome/instalasi.webp","Sampai ke Plosok"),	
	"16.000+ Service Center" => array("/compressed/mobilehome/teknisiindo.webp","180.000+ Teknisi Resmi"),	
	"Mesin Fotocopy" => array("/compressed/mobilehome/original.webp","Dijamin 100% Ori"),		
	"Review Pelanggan Asli" => array("/compressed/mobilehome/kepuasan.webp","Diulas Pelanngan Asli"),	
	"Harga Bisa Dinego" => array("/compressed/mobilehome/nego.webp","Nego Harga Termurah"),	
	"Jujur & Informatif" => array("/compressed/mobilehome/jujur.webp","Tidak Memihak Brand"),	
	"Mudah Dipahami" => array("/compressed/mobilehome/simpleaja.webp","Gak Banyak Neko Neko"),		
	"Bisa Lacak Pesanan" => array("/compressed/mobilehome/lacak.webp","Status Pesanan, dll"),			
	"Tersedia Forum Diskusi" => array("/compressed/mobilehome/forum.webp","Diskusi Copier"),			
	"Gratiss Video Tutorial" => array("/compressed/mobilehome/tutorial.webp","Bonuss Pembelian"),	
	"Gratiss Konsultasi" => array("/compressed/mobilehome/konsultasi.webp","Sampai Seumur Hidup"),		
	"Transaksi Aman" => array("/compressed/mobilehome/aman.webp","Rekening Perusahaan"),	
	"100% Uang Kembali" => array("/compressed/mobilehome/uang-kembali.webp","Jaminan Pelanggan"),		
	"Garansi Return Barang" => array("/compressed/mobilehome/refund.webp","Bisa Tukar Barang"),			
	"Mobile Print Online" => array("/compressed/mobilehome/mobileprint.webp","Print via HP"),	
	"Gratiss USB OTG" => array("/compressed/mobilehome/otg.webp","Beserta Isiannya Lengkap"),	
);
?>			<div id="flux"></div>	
			<div class="kotakisi">
				<div class="labeli">
					<b>Keunggulan <?php echo $site_name;?> </b>
					<a class="more" aria-label="Keunggulan Kami" href="<?php echo $c_url;?>/keunggulan-kami">Lihat Semua <i class="fa fa-chevron-right"></i></a>	
				</div>
				<div class="slidebox">
					<?php foreach ($keunggulan as $keunggulan_key =>$keunggulannya){?>
					<div class="keunggulan">			
						<img class="lazy" width="60" height="60" data-src="<?php echo $c_url.$keunggulannya[0];?>" alt="<?php echo $keunggulan_key;?>"/>
						<div class="text">
							<b><?php echo $keunggulan_key;?></b><br><?php echo $keunggulannya[1];?>
						</div>
					</div>	
					<?php } ?>
				</div>
			</div>
<script>
(function() {
	var vload="<center><img style='width:100%; height:40px;' src='<?php echo $c_cdn;?>/new/images/loading.svg'  title='mohon tunggu sebentar' alt='loading...'/> <h2>Sedang Loading... Mohon Tunggu Sebentar.</h2></center>";
				
	<?php $pmore = $_POST['pmore']; ?>
	var pmore = "<?php echo $pmore; ?>";
	var tabpertama = document.getElementsByClassName("tab-link")[0];
	tabpertama.setAttribute("class", "tab-link current");

	var isitabpertama = document.getElementsByClassName("tab-content")[0];
	isitabpertama.setAttribute("class", "tab-content current");
	
	$('.gantungan .tab-link').click(function(){
		
		var tab_id = $(this).attr('data-tab');
		$('.gantungan .tab-link').removeClass('current');
		$('.tab-content').removeClass('current');
		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
		$("#konten-"+tab_id).html(vload);
		
		$.ajax({ 
			type:"post", 
			url:"<?php echo $c_url;?>/ajaxp-tabmobile",
			data : {tab_id : tab_id, pmore : pmore},
			success:function(data){
				$("#konten-"+tab_id).html(data);
			}
		});			
	})
})();

var action = "";
var perpage = 0;

$(window).scroll(function() {
 if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
	if(action != "inactive"){
		var parameter = "category=<?php echo $_POST['urlnya'];?>";
		perpage++; produklist(perpage,parameter);
 }}
});

function produklist(perpage,parameter){
	if(action != "inactive"){
			var xhttp2 = new XMLHttpRequest();
			xhttp2.onreadystatechange = function() {
				try {JSON.parse(xhttp2.responseText);} 
				catch (e) {return false;}
				
				if (this.readyState == 4 && this.status == 200 ) {
					
					var datapdk=JSON.parse(xhttp2.responseText);
					datapdk.forEach(function(pdk) {
						
						if ( pdk.status == "" ) {action = "inactive";}
						else{
						
						document.getElementById("produklist").innerHTML += "<div id='item"+pdk.nsb+"' class='itemproduknya'>"+
			"<img class='lazy' width='150' height='150' src='<?php echo $c_url;?>/compressed/loading2.svg' data-src='"+pdk.fotonya+"' alt='"+pdk.judulnya+"'/>"+
			"<div class='khas'><a class='capronego' href='"+pdk.linknya+"'><h5 class='tl pb10 wsnormal w100 fs12 m0 h38'><b>"+pdk.judulnya+"</b></h5><div class='category'>"+pdk.category+"</div>"+
			"<div class='garistengah'>Rp "+pdk.a_harga_lama+"</div><div class='harga'><b>"+pdk.a_harga_baru+"</b></div><div class='rating'><?php for($i=0;$i<5;$i++) { ?><i  class='fa fa-star'></i><?php } ?>"+
			"<span class='tc  primary-col'> "+pdk.total_review+" </span></div></a><input type='text' class='hidden' name='produkid' id='item"+pdk.nsb+"_produkid' value='"+pdk.nsb+"'/>"+
			"<input type='text' class='hidden' name='harga' id='item"+pdk.nsb+"_harga'  value='"+pdk.a_harga_baru+"'/><input type='number' class='hidden' value='1' name='qty' id='item"+pdk.nsb+"_qty' placeholder='1'/>"+
			"<div id='item"+pdk.nsb+"_buyreplace' class='h46px w100'><div onclick='buy(&apos;item"+pdk.nsb+"&apos;)'  id='item"+pdk.nsb+"_buy'  class='btn' ><i class='fa fa-shopping-basket'></i> Buy </div></div>"+
			"</div></div>";
			
			lazyload();
						}
					});		
				}
				
			};
			xhttp2.open("GET", "<?php echo $c_url;?>/ajaxp-listprodukmobile?"+parameter+"&page="+perpage, true);
			xhttp2.send();
	}
};

$("#checkoutwidget").load("<?php echo $c_url;?>/ajaxp-addtocartm?cektoken", function(responseTxt, statusTxt, xhr){
	if(statusTxt == "success"){
		var cekoutcek = parseInt($("#cekouttoken").text());
		if(cekoutcek >= 1){buy();}
	}
});

function buy(a){
	var aes=$("#"+a).val();
	var produkid=$("#"+a+"_produkid").val();
	var harga=$("#"+a+"_harga").val();
	var qty=$("#"+a+"_qty").val();
	var buy=$("#"+a+"_buy").val();
	$.ajax({ 
		type:"post", 
		url:"<?php echo $c_url;?>/ajaxp-addtocartm",
		data :  {produkid : produkid, harga : harga,  qty : qty},
		success:function(data){
			$("#"+a+"_layer_qty").show();
			$("#"+a+"_qtylayer").html(qty);
			$("#checkoutwidget").html(data);
			$("#"+a+"_buyreplace").html("<div class='Button__number'><button onclick='minusitem(&apos;"+a+"&apos;)' id='"+a+"_minus'  type='button' class='button_qty'> -</button><div id='"+a+"_qtylayer' class='qty_value'> "+qty+"</div><button onclick='plusitem(&apos;"+a+"&apos;)' id='"+a+">_plus'  type='button' class='button_qty'> +</button></div>");
		}
	});
	$.ajax({ 
		type:"post", 
		url:"<?php echo $c_url;?>/ajaxp-isikeranjang",
		data :  {produkid : produkid, harga : harga,  qty : qty},
		success:function(data){
			$("#isikeranjang").html(data);
		}
	});	
	
};

function plusitem(a){
	var qty=$("#"+a+"_qty").val();
	qty = parseInt(qty);
	
	qty2=qty+1;
	$("#"+a+"_qty").val(qty2);	
	$("#"+a+"_quantitykeranjang").html(qty2);
	buy(a);
};

function minusitem(a){
	var qty=$("#"+a+"_qty").val();
	qty = parseInt(qty);	
	qty2=qty-1;
	

	
	if(qty2 > 0){
		$("#"+a+"_qty").val(qty2);
		$("#"+a+"_quantitykeranjang").html(qty2);		
		buy(a);
	} else { 
		var produkid=$("#"+a+"_produkid").val();
		var harga=$("#"+a+"_harga").val();
		$.ajax({ 
			type:"post", 
			url:"<?php echo $c_url;?>/ajaxp-addtocartm",
			data :  {produkid : produkid, harga : harga,  qty : qty2},
			success:function(data){
				$("#checkoutwidget").html(data);
			}
		}); 
		$.ajax({ 
			type:"post", 
			url:"<?php echo $c_url;?>/ajaxp-isikeranjang",
			data :  {produkid : produkid, harga : harga,  qty : qty},
			success:function(data){
				var totalcartproduk = $(".angkabag").html();
				if(totalcartproduk == 0){$("#checkoutwidget").html('');}
				$("#isikeranjang").html(data);
			}
		});		

		$("#"+a+"_keranjang").html("");	
		$("#"+a+"_layer_qty").hide();
		$("#"+a+"_buyreplace").html("<a onclick='buy(&apos;"+a+"&apos;)' id='"+a+"_buy' class='addtocart btn btn- btn-primary fullwidth'><span class='fa fa-shopping-basket'></span> <span class='btn-text'> Buy</span></a>");
	}
};
</script>