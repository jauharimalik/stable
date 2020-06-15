<?PHP
defined('SYS') or exit('Access Denied!');
/* 
* Warpsite MVC Framework version 1.0 
* Author	    : Jauhari Malik
*/

// Error Reporting
error_reporting(E_ALL);
class Database{
	private $mysqli;
	public function __construct($host, $user, $pass, $db){
		$this->mysqli =  new mysqli($host, $user, $pass, $db);
		if(mysqli_connect_errno()) {
			echo "Error: Database sedang tidak tersedia !!. ";
			exit;
		}
	}
	public function getlayanan($link_article=''){
		$link_article = mysqli_real_escape_string($this->mysqli,$link_article);
		$query = "SELECT * FROM category_list where category_link='$link_article'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function layanannya($link_article){
		return $this->getlayanan($link_article);
	}
	
	/**
	 * mendapatkan data category berdasarkan link category
	 * @since v5
	 */
	public function getwisata($link_article=''){
		$link_article = mysqli_real_escape_string($this->mysqli,$link_article);
		$query = "SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id where link='$link_article'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function wisata($link_article){
		return $this->getwisata($link_article);
	}
	
	/**
	 * mendapatkan data category berdasarkan link category
	 * @since v5
	 */
	public function getcategoryproduk($link_article=''){
		$link_article = mysqli_real_escape_string($this->mysqli,$link_article);
		$query = "SELECT * FROM category_list where category_link='$link_article'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function category($link_article){
		return $this->getcategoryproduk($link_article);
	}
	
	/**
	 * mendapatkan data category berdasarkan link category
	 * @since v5
	 */
	public function getprodukdetail($link_article=''){
		$link_article = mysqli_real_escape_string($this->mysqli,$link_article);
		$query = "SELECT * FROM produk LEFT JOIN category_list ON produk.category = category_list.category_id where link='$link_article'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function produk($link_article){
		return $this->getprodukdetail($link_article);
	}
	
	/**
	 * Dapatkan Kategori untuk artikel ini
	 * @since v5
	 */
	public function _get_category($cat){
		$jumlah_category = substr_count($cat,",");
		$cat_a = explode(',',$cat);
		$j_cat = 0;
		$cat_result = "";
		while ($j_cat <= $jumlah_category){
		$cat_me = $cat_a["$j_cat"];
		$cat_link2 = strtolower($cat_me);
		$cat_link2 = str_replace(" ", "-", $cat_link2);
		$cat_result .= "<a href='".APP_URL."/".uri_category."/$cat_link2'> $cat_me</a> , ";
		$j_cat++;
		}
		return $cat_result;
	}
	
	
	/**
	 * Dapatkan author postingan ini
	 * @since v5
	 */
	public function _author_this_post($article_id){
		$sql = "select user from article where id='$article_id'";
		$data = $this->fetch($sql);
		$user_id = $data['user'];
		$sql2 = "select name, link from admin where id='$user_id'";
		$data2 = $this->fetch($sql2);
		return "<a target='_blank' href='$data2[link]'>$data2[name]</a>";
	}
	
	/**
	 * mendapatkan data article berdasarkan link article
	 * @since v5
	 */
	public function get_article_by_link($link_article=''){
		$link_article = mysqli_real_escape_string($this->mysqli,$link_article);
		$query = "SELECT * FROM article where link='$link_article'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function detail_artikel($link_article){
		return $this->get_article_by_link($link_article);
	}
	
	
	public function get_produk_by_link($link_produk=''){
		$link_produk = mysqli_real_escape_string($this->mysqli,$link_produk);
		$query = "SELECT * FROM produk LEFT JOIN profile ON profile.id = produk.user where link='$link_produk'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
		//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function detail_produk($link_produk){
		return $this->get_produk_by_link($link_produk);
	}

	public function get_pelanggan_by_link($link_produk=''){
		$link_produk = mysqli_real_escape_string($this->mysqli,$link_produk);
		$query = "SELECT * FROM aktivitas_pelanggan where link='$link_produk'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	
	
		//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function get_pelanggan($link_produk){
		return $this->get_pelanggan_by_link($link_produk);
	}

	public function get_aktivitas_by_link($link_produk=''){
		$link_produk = mysqli_real_escape_string($this->mysqli,$link_produk);
		$query = "SELECT * FROM aktivitas_vanectro where link='$link_produk'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
		//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function get_aktivitas($link_produk){
		return $this->get_aktivitas_by_link($link_produk);
	}

	public function get_faq_by_link($link_produk=''){
		$link_faq = mysqli_real_escape_string($this->mysqli,$link_produk);
		$query = "SELECT * FROM faq_category where link='$link_faq'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function get_faq($link_produk){
		return $this->get_faq_by_link($link_produk);
	}	
	
	public function get_faq_detail_by_link($link_produk=''){
		$link_faq = mysqli_real_escape_string($this->mysqli,$link_produk);
		$query = "SELECT * FROM faq where id='$link_faq'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function get_faq_detail($link_produk){
		return $this->get_faq_detail_by_link($link_produk);
	}		
	
	public function get_perlengkapan_by_link($link_perlengkapan=''){
		$link_perlengkapan = mysqli_real_escape_string($this->mysqli,$link_perlengkapan);
		$query = "SELECT * FROM perlengkapan where link='$link_perlengkapan'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
		//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function detail_perlengkapan($link_perlengkapan){
		return $this->get_perlengkapan_by_link($link_perlengkapan);
	}	
	public function get_sparepart_by_link($link_produk=''){
		$link_produk = mysqli_real_escape_string($this->mysqli,$link_produk);
		$query = "SELECT * FROM sparepart where link='$link_produk'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
		//alias version for => get_article_by_link to -> detail_artikel ====> untuk indonesia tercinta :D
	public function detail_sparepart($link_produk){
		return $this->get_sparepart_by_link($link_produk);
	}		
	/**
	 * mendapatkan data pages (laman) berdasarkan link pages (lamannya)
	 * @since v5
	 */
	public function get_pages_by_link($link_pages=''){
		$link_pages = mysqli_real_escape_string($this->mysqli,$link_pages);
		$query = "SELECT * FROM pages where link='$link_pages'";
        $row = $this->fetch($query);
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_pages_by_link to -> detail_pages ====> untuk indonesia tercinta :D
	public function detail_pages($link_pages){
		return $this->get_pages_by_link($link_pages);
	}
	
	/**
	 * mendapatkan data user berdasarkan id dan data apa yang ingin di tampilkan
	 * @since v5
	 */
	public function get_detail_user($id, $what='*'){
		$row = $this->fetch("select $what from admin where id='$id'");
		if (empty($row)){header("location:".APP_URL."/error-404");exit();}
        return $row;
	}
	//alias version for => get_detail_user to -> user_detail ====> untuk indonesia tercinta :D
	public function user_detail($id, $what='*'){
		return $this->get_detail_user($id, $what);
	}
	
	/**
	 * mendapatkan semua data article terbaru berdasarkan page dan limit yang di minta
	 * @since v5
	 */
	public function get_newtest_article($page=1, $limit=10){
		$calc = $limit * $page;
		$start = $calc - $limit;
		$query = "select * from article order by article.date DESC, article.time DESC Limit $start, $limit";
		$rows = $this->fetch_multiple($query);
		foreach ($rows as $row){$data[]=$row;}
		if (empty($data)){header("location:".APP_URL."/error-404");exit();}
		return $data;
	}
	//alias version for => get_newtest_article to -> artikel_terbaru ====> untuk indonesia tercinta :D
	public function artikel_terbaru($page=1, $limit=10){
		return $this->get_newtest_article($page, $limit);
	}
	
	/**
	 * mendapatkan semua article berdasarkan category nya -> di butuhkan submit data page dan limit
	 * @since v5
	 */
	public function get_article_by_category($category='', $page=1, $limit=10){
		$category=mysqli_real_escape_string($this->mysqli,$category);
		$calc = $limit * $page;
		$start = $calc - $limit;
		$query = "select * from article where category like '%$category%' order by article.date DESC, article.time DESC limit $start, $limit";
		$rows = $this->fetch_multiple($query);
		foreach ($rows as $row){$data[]=$row;}
		if (empty($data)){header("location:".APP_URL."/error-404");exit();}
		return $data;
	}
	//alias version for => get_article_by_category to -> artikel_per_category ====> untuk indonesia tercinta :D
	public function artikel_per_kategori($category='', $page=1, $limit=10){
		return $this->get_article_by_category($category, $page, $limit);
	}
	
	/**
	 * engine search article : mendapatkan semua article berdasarkan keyword nya -> di butuhkan submit data page dan limit
	 * @since v5
	 */
	public function get_article_by_keyword($keyword='', $page=1, $limit=10){
		$keyword=mysqli_real_escape_string($this->mysqli,$keyword);
		$calc = $limit * $page;
		$start = $calc - $limit;
		$q = $keyword;
		$query = "select * from article where title like '%$q%' or content like '%$q%' or category like '%$q%' order by article.date DESC, article.time DESC Limit $start, $limit";
		$rows = $this->fetch_multiple($query);
		foreach ($rows as $row){$data[]=$row;}
		if (empty($data)){header("location:".APP_URL."/error-404");exit();}
		return $data;
	}
	//alias version for => get_article_by_keyword to -> cari_artikel ====> untuk indonesia tercinta :D
	public function cari_artikel($keyword='', $page=1, $limit=10){
		return $this->get_article_by_keyword($keyword, $page, $limit);
	}
	
	
	/**
	 * untuk menghitung hasil jumlah article berdasarkan query where yang di jalankan
	 * @since v5
	 */
	public function count_article($where=''){
		$where=str_replace('where','',$where);
		if (empty($where)){
			$query="select id from article";
		}else{
			$query="select id from article where $where";
		}
		$total = $this->num_rows($query);
		return $total;
	}
	//alias version for => count_article to -> hitung_artikel ====> untuk indonesia tercinta :D
	public function hitung_artikel($where=''){
		return $this->count_article($where);
	}
	
	/**
	 * random article : mendapatkan semua article secara random -> di butuhkan submit data start dan limit
	 * @since v5
	 */
	public function random_article($start=1, $limit=10){
		$query = "select * from article order by rand() limit $start, $limit";
		$rows = $this->fetch_multiple($query);
		foreach ($rows as $row){$data[]=$row;}
		if (empty($data)){header("location:".APP_URL."/error-404");exit();}
		return $data;
	}
	//alias version for => random_article to -> artikel_acak ====> untuk indonesia tercinta :D
	public function artikel_acak($start=1, $limit=10){
		return $this->random_article($start, $limit);
	}
	
	/**
	 * popular article : mendapatkan semua article secara berdasarkan yang terpopuler -> di butuhkan submit data start dan limit
	 * @since v5
	 */
	public function popular_article($start=1, $limit=10){
		$query = "select * from article order by article.hits DESC limit $start, $limit";
		$rows = $this->fetch_multiple($query);
		foreach ($rows as $row){$data[]=$row;}
		if (empty($data)){header("location:".APP_URL."/error-404");exit();}
		return $data;
	}
	//alias version for => popular_article to -> artikel_terpopuler ====> untuk indonesia tercinta :D
	public function artikel_terpopuler($start=1, $limit=10){
		return $this->popular_article($start, $limit);
	}
	
	/**
	 * run select : run query select
	 * @since v5
	 */
	public function select($table, $rows = "*", $where = null, $order = null, $limit = null){
		$q = 'SELECT '.$rows.' FROM '.$table;
		if($where != null){
			$q .= ' WHERE '.$where;
		}
		if($order != null){
			$q .= ' ORDER BY '.$order;
		}
		if ($limit != null){
			$q .= ' LIMIT '.$limit;
		}
		$result = mysqli_query($this->mysqli,$q);
		while ($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	
	public function select2($table, $rows = "*", $where = null,  $where2 = null, $order = null, $limit = null){
		$q = 'SELECT '.$rows.' FROM '.$table;
		if($where != null){
			$q .= ' WHERE '.$where.'AND ' .$where;
		}
		if($order != null){
			$q .= ' ORDER BY '.$order;
		}
		if ($limit != null){
			$q .= ' LIMIT '.$limit;
		}
		$result = mysqli_query($this->mysqli,$q);
		while ($row = mysqli_fetch_assoc($result)){
			$data[] = $row;
		}
		return $data;
	}
	
	/**
	 * run insert : run query insert
	 * @since v5
	 */
	private function quote($string,$param=''){
		if(empty($param)){
			return "'$string'";
		}
		return $string;
	}
	public function insert($table,$insert,$parameters=array()){
		$param="";
		$val="";
		//Build Query
		$query="INSERT INTO $table";
		if(is_array($insert)){
			$count=count($insert);
			$i=0;			
			foreach ($insert as $key => $value) {
				$param.="`$key`";
				$val.=$this->quote($value,$parameters);
				if(++$i != $count) {
				    $param.=",";
				    $val.=",";
				}				
			}
			$query.=" ($param) VALUES ($val)";
		}
		$sql = $this->query($query);
		if ($sql){
			return true;
		}else{
			return false;
		}
	}
	
	public function update($table,$value,$parameters){
		$param="";
		$val="";
		//Build Query
		$query="UPDATE  $table set $value WHERE $parameters";
		$sql = $this->query($query);
		if ($sql){
			return true;
		}else{
			return false;
		}
	}
	
	public function hapus($table,$parameters){
		//Build Query
		$query="DELETE FROM  $table WHERE $parameters";
		$sql = $this->query($query);
		if ($sql){
			return true;
		}else{
			return false;
		}
	}

	public function total_ulasan_produk($table,$a_id){
		$total_review = $this->num_rows("select * from $table where pid ='$a_id'");	
		if($total_review<1){$total_review=5;}
		return $total_review;
	}	

	

	
	/**
	 * run select : cek artikel 
	 * @since v5
	 */
	public function check_article($id){
		if (logged != 0){ //jika dia udah login maka lanjutkan aja
			// check siapa user pembuat artikel ini
			$data_cek = $this->fetch("select user from article where id='$id'");
			$uid_this_article = $data_cek['user'];
			//selesai bro cek siapa usernya dengan variable uid_this_article
			#lanjut ke tahap ke dua pengecekan apakah user yang ngerequest itu pas ama hasil uid_this_article nya
			if ($uid_this_article == logged){
				return true;
			}else{
				return false;
			}
		}
	}
	
	/**
	 * mysqli shortcut
	 * @since v5
	 */
	public function query($sql){
		$result = mysqli_query($this->mysqli,$sql);
		return $result;
	}
	public function fetch($sql){
		$result = mysqli_query($this->mysqli,$sql);
		$data = mysqli_fetch_array($result);
		return $data;
	}
	public function fetch_multiple($sql){
		$result = mysqli_query($this->mysqli,$sql);
		while($row = mysqli_fetch_array($result)){
			$data[] = $row;
		}
		return $data;
	}
	public function num_rows($sql){
		$result = mysqli_query($this->mysqli,$sql);
		$data = mysqli_num_rows($result);
		return $data;
	}
	public function escape_string($string){
		return mysqli_real_escape_string($this->mysqli,$string);
	}
	
	/**
	 * activation for reset password admin
	 * @since v5
	 */
	public function get_activation_key($email_or_username){
		$sql = "select * from admin where email='$email_or_username' or username='$email_or_username'";
		if ($this->num_rows($sql) == 0){
			echo "Username atau email yang anda masukan tidak terdaftar sebagai member di situs ini!.";
			exit();
		}
		$data = $this->fetch($sql);
		$id = $data['id'];
		$name = $data['name'];
		$email = $data['email'];
		$pswd = $data['pswd'];
		$image = $data['image'];
		$bio = $data['bio'];
		$link = $data['link'];
		$level = $data['level'];
		$today = date("Y-m-d");
		$time = date("H:i:s");
		$total_art = $this->num_rows("select id from article where user='$id'");
		$total_page = $this->num_rows("select id from pages where user='$id'");
		$total_files = $this->num_rows("select id from files where user='$id'");
		$activation_key = md5($id.$name.$email.$pswd.$email.$image.$bio.$link.$level.$today.$total_art.$total_page.$total_files);
		$this->email=$email;
		$this->name=$name;
		return $activation_key;
	}
	
	//mengirim kode dan link aktivasi , untuk program forget password
	//since version 5
	public function send_activation($email_or_username){
		$activation_key = $this->get_activation_key($email_or_username);
		$sql = "select * from admin where email='$email_or_username' or username='$email_or_username'";
		if ($this->num_rows($sql) == 0){
			echo "Username atau email yang anda masukan tidak terdaftar sebagai member di situs ini!.";
			exit();
		}
		$data = $this->fetchfetch($sql);
		$id = $data['id'];
		$name = $data['name'];
		$email = $data['email'];
		$today = date("Y-m-d");
		$time = date("H:i:s");
		$activation_link = APP_URL.$system."/forgot.php?act=recover&email=$email&activation=$activation_key";
		$c_url = APP_URL;
		$c_admin_url = "$c_url/$system";
		$messages = "
		you has send a request for reset your password at <a target='_blank' href='$c_url'>$c_url</a> with detail<br>
		Email : $email<br>
		Username : $name<br>
		Date : $today - $time<br>
		<p>
		and if you really has send a request for reset your password at $c_url, so you can use this activation code for reset your password :
		<br>
		<b>Activation Code</b> : <i>$activation_key</i>
		</p>
		if you didn't request this action, so ignore this message or delete this message.
		";
		$send = $this->send_email($email, "Activation Link For Reset Your Password at $c_url", $messages);
		if ($send == true){
			return "$email";
			exit();
		}else{
			echo "Failed! can't send email to $email";
		}
	}
	
	//send mail
	public function send_email($email, $subject, $messages){
		$email_from = "admin@warpsite.ga";
		$headers = "From: Tim Warpsite CMS <$email_from>" . PHP_EOL;
		$headers .= "Reply-To: $email_from" . PHP_EOL;
		$headers .= "MIME-Version: 1.0" . PHP_EOL;
		$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
		$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;
		if (mail($email, $subject, $messages, $headers)){return true;} 
		else{return false;}
	}
	public function insert_404($url_bukutamu1,$page_title,$site_description,$today,$sekarang,$foto_bukutamu){
		$sql_404 = "select * from blockurl where link='$url_bukutamu1'";
		$result_404 = $this->num_rows($sql_404);
		if ($result_404<=1){
			$datasta_404= array("title"=>$page_title, "content"=>$site_description, "link"=>$url_bukutamu1,"hits"=>"250","date"=>$today,"time"=>$sekarang);
			$cek_input = $this->insert("blockurl", $datasta_404);
			if($cek_input){return true;}
			else{return false;}
		}
	}

	public function cocokologi_tabel_pages(){
		$query="delete from pages where exists ( select * from blockurl where link = pages.link)";
		$sql = $this->query($query);
	}
	public function insert_pages($url_bukutamu1,$page_title,$site_description,$today,$sekarang,$foto_bukutamu){
		$sql_404 = "select * from blockurl where link='$url_bukutamu1'";
		$result_404 = $this->num_rows($sql_404);
		if ($result_404<1){
			$buku_tamu = "select * from pages where title='".$page_title."' and link ='".$url_bukutamu1."' ";
			$result_buku_tamu = $this->num_rows($buku_tamu);
			if ($result_buku_tamu<=0){
				$datasta234 = array("title"=>$page_title, "content"=>$site_description, "link"=>$url_bukutamu1,"hits"=>"250","date"=>$today,"time"=>$sekarang,"foto"=>$foto_bukutamu,"foto_kecil"=>$foto_bukutamu);
				$this->insert("pages", $datasta234);		
			} else{
				$data_bukutamu = $this->fetch($buku_tamu);
				$hits_today = $data_bukutamu['hits'];
				$idu = $data_bukutamu['id'];
				$hits_today++;
				$this->query("update pages set hits=hits+1, date = '".$today."', title = '".$page_title."', content = '".$site_description."',foto = '".$foto_bukutamu."',foto_kecil = '".$foto_bukutamu."', link = '".$url_bukutamu1."', where date='$today' and id='$idu'");
			}	
		}	
	}		
}