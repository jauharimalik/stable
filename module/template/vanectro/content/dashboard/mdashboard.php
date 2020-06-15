<style>.w30{width:30%;}</style>	<header>
		<a onclick="goBack()" aria-label="Kembali Home Page <?php echo $legal_pt;?>"><i class="fa fa-arrow-left"></i></a>
		<h2>Akunku - <?php echo $site_name;?></h2>
	</header>	
	<div id="main3">
		<div id="menudatautama" class="kotakisi"></div>
		<div id="tablistgantungan" class="gantungan"></div>	
		<div id="isitabnya"></div>
		<div class="kotakisi">
			<a href="<?php echo $c_url;?>" class="logout"><b><i class="fas fa-home"></i> Kembali Belanja</b></a>
			<a href="<?php echo $c_url;?>/keluar" class="logout"><b><i class="fas fa-sign-out-alt"></i> Keluar Akun</b></a>
		</div>					
	</div>
<script async>
(function() {
	var gantunganquery = document.getElementById("tablistgantungan");
	var isitabnya = document.getElementById("isitabnya");
	var profile = document.getElementById("menudatautama"); 
	var xmldashboard = new XMLHttpRequest();
	xmldashboard.onreadystatechange = function() {
		
		try {JSON.parse(xmldashboard.responseText);} 
		catch (e) {return false;}
		
		if (this.readyState == 4 && this.status == 200) {
			var datadashboard=JSON.parse(xmldashboard.responseText);
			datadashboard.forEach(function(datautama) {
				profile.innerHTML = "<img class='fotoakun' src='"+datautama.avatar+"' alt='profile'><div class='profile'><h2>"+datautama.nama+"</h2><p>"+datautama.nohp+"<br>"+datautama.email+"</p></div>";
				datautama.menu.forEach(function(tablist) { 
					if(datautama.level !== "Member"){
					gantunganquery.innerHTML +="<a class='tab-link w30 center' onclick='gantitab(event,&apos;"+tablist.tab+"&apos;)'>"+tablist.name_tab+"</a>";
					gantunganquery.firstElementChild.classList.add("current");
					}	
					isitabnya.innerHTML += "<div id='"+tablist.tab+"' class='tab-content'><div class='kotakisi'><div class='panel2' id='menulist"+tablist.tab+"'></div></div></div>";
					isitabnya.firstElementChild.classList.add("current");
					
					var isimenu = document.getElementById("menulist"+tablist.tab);
					tablist.list.forEach(function(menulist) {
						isimenu.innerHTML += "<a class='menuli' aria-label='"+menulist.namamenu+"' href='"+menulist.linkmenu+"'>"+menulist.namamenu+"</a>";
					});
				});

			});		
		}
	};
	
	xmldashboard.open("GET", "<?php echo $c_url;?>/ajaxp-setelahlogin", true);
	xmldashboard.send();		
})();
</script>	