<?php	
	function remove_product($pid){
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['produkid']){
				unset($_SESSION['cart'][$i]);
				break;
			}
		}
		$_SESSION['cart']=array_values($_SESSION['cart']);
	}
	function get_order_total(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$pid=$_SESSION['cart'][$i]['produkid'];
			$q=$_SESSION['cart'][$i]['qty'];
			$price= get_price($_SESSION['cart'][$i]['harga']) ;
			$sum+=$price*$q;
		}
		return $sum;
	}
	
	function addtocart($pid,$q,$harga){
		if($pid<1) return;
		
		if(is_array($_SESSION['cart'])){
			if(produk_exist($pid)) return;
			$max=count($_SESSION['cart']);
			$_SESSION['cart'][$max]['produkid']=$pid;
			$_SESSION['cart'][$max]['qty']=$q;
			$_SESSION['cart'][$max]['harga']=get_price($harga);
			if ($_SESSION['cart'][$max] <= 0){remove_product($pid);}	
		}
		else{
			$_SESSION['cart']=array();
			$_SESSION['cart'][0]['produkid']=$pid;
			$_SESSION['cart'][0]['qty']=$q;
			$_SESSION['cart'][0]['harga']=get_price($harga);
			if ($_SESSION['cart'][0] <= 0){remove_product($pid);}	
		}
			
	}
	function get_price($harga){
		$harga=str_replace("<b>","",$harga);
		$harga=str_replace("</b>","",$harga);
		$harga=str_replace(".","",$harga);
		$harga=str_replace("Rp","",$harga);
		$harga=str_replace(" ","",$harga);
		$harga=str_replace("  ","",$harga);
		$harga=str_replace(" ","",$harga);
		return $harga;
	}
	
	function get_total_produk(){
		$max=count($_SESSION['cart']);
		$sum=0;
		for($i=0;$i<$max;$i++){
			$q=$_SESSION['cart'][$i]['qty'];
			$sum+=$q;
		}
		return $sum;
	} 	
	function produk_exist($pid){
		remove_product($pid);
		$pid=intval($pid);
		$max=count($_SESSION['cart']);
		$flag=0;
		for($i=0;$i<$max;$i++){
			if($pid==$_SESSION['cart'][$i]['produkid']){
				$flag=1;
				break;
			}
		}
		
		return $flag;
	}

?>