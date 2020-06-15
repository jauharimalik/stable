<?php

	function ongkirmesin($distance2){
		if($distance2==0){$tarif_ongkir=2950000;}
		else if($distance2<=15){$tarif_ongkir=0;}
		else if($distance2<=100){$tarif_ongkir=750000;}
		else if(($distance2>100)&&($distance2<1500)){$tarif_ongkir=($distance2*2500)+500000;}
		else if(($distance2>1500)&&($distance2<3000)){$tarif_ongkir=($distance2*1600)+500000;}
		else if(($distance2>3000)&&($distance2<6000)){$tarif_ongkir=($distance2*1250)+500000;}
		else {$tarif_ongkir=3850000;}
		return $tarif_ongkir;
	}
