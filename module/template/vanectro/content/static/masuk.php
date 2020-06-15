<div class="masuk">
	<header>
		<a onclick="goBack()" aria-label="Kembali Home Page <?php echo $legal_pt;?>">
			<img class="back" width="14" height="14" alt="goback" title="goback" src="<?php echo $c_url;?>/compressed/loading2.svg" data-src="<?php echo $c_url; ?>/compressed/amp/header/back.webp"/>
		</a>
		<h2>Login Akun <?php echo $site_name;?></h2>
	</header>	
	<div class="w90"><div class="vh2 vh2-offline"></div></div>
	<div class="kotakisi">
		<h3>Masuk atau daftar dulu Om !!</h3>	
		<p>Dapatkan berbagai kemudahan tentang mesin fotocopy sebagai Member <?php echo $site_name;?>, 
		sekarang kamu bisa login menggunakan akun sosmed loh.</p>
	</div>	
	<div id="form-login2" class="kotakisi">
		<div id="pesanlogin"></div>
		<h3>Login Akun <?php echo $site_name;?></h3>
		<form id="form-login" method="post">	
			<div class="pass"><input type="text" id="user" name="usercust" value="" aria-label="email" placeholder="Masukkan Email"></div>
			<div class="pass">
				<input type="password" class="mb10" value="" aria-label="pass" name="passcust" id="pass" placeholder="Masukkan Password">
				<span id="showpass" class="showpass" role="button" aria-label="showpass"><i class="icon-eye-open fa fa-eye"></i></span>
				<span id="hidepass" class="showpass hide" role="button" aria-label="showpass"><i class="icon-eye-open fa fa-eye"></i></span>
			</div>
			<span class="lupapass">*Lupa Password</span>
			<button id="login" class="button button-small login primary-bg white-col" name="login" type="submit">Login</button>
			<a id="register" href="<?php echo $c_url;?>/daftar" class="button button-small login primary-bg white-col" role="button">Daftar Akun Baru</a>
		</form>			
	</div>		
	<br><br>
</div>
<?php require_once TEMPLATE_DIR.DS."content/common/cekurlpage.php"; ?>
<script>
(function() {
			var css = document.createElement('link');
			css.href = '<?php echo $c_cdn;?>/fonts/fa/css/ampico.css';
			css.rel = 'stylesheet';
			css.type = 'text/css';
			document.getElementsByTagName('head')[0].appendChild(css);
})();	

var showpass = document.getElementById("showpass");
var hidepass = document.getElementById("hidepass");
var pass = document.getElementById("pass"); 
var user = document.getElementById("user"); 
var login = document.getElementById("login"); 
var register = document.getElementById("register"); 

showpass.addEventListener("click", function() {lihatpassword();});
hidepass.addEventListener("click", function() {tutuppassword();});
login.addEventListener("click", function() {checklogin();});

function lihatpassword(){
	pass.setAttribute("type", "text");
	showpass.classList.add("hide");
	hidepass.classList.remove("hide");
 }
 
function tutuppassword(){
	pass.setAttribute("type", "password");
	hidepass.classList.add("hide");
	showpass.classList.remove("hide");
} 
function goBack(){window.history.back();}
</script>