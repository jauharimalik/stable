<?PHP
defined('SYS') or exit('Access Denied!');
/* 
* Warpsite MVC Framework version 1.0 
* Author	    : Jauhari Malik
*/

// Error Reporting
error_reporting(E_ALL);
class App{
	/**
	 * Load All Stylesheet
	 * @since v1
	 */
	
	private $email='', $name='';
	public function load_stylesheet(){
		$f_stylesheet = TEMPLATE_DIR.DS.'stylesheet.php';
		$file_template=fopen($f_stylesheet, 'r');
		$data_template=fread($file_template,filesize($f_stylesheet));
		$data_template_new=str_replace('{template_url}', TEMPLATE_URL, $data_template);
		$data_template_new=str_replace('{url}', APP_URL, $data_template_new);
		$data_template_new=str_replace('{cdn_url}', CDN_URL, $data_template_new);
		return "$data_template_new";
	}
	
	/**
	 * Show HOME PAGE
	 * @since v1
	 */
	public function _mhome(){return(MOB.DS."index.php");}
	/**
	 * Show HOME PAGE
	 * @since v1
	 */	 

	public function _offline(){return(TEMPLATE_DIR.DS."content/static/offline.php");}	 
	public function _sitemap(){return(TEMPLATE_DIR.DS."content/static/sitemap.php");}
	
	public function _system(){return(SYS.DS."index.php");}
	public function _dashboard(){return(SYS.DS."home.php");}
	
	public function _404(){return(TEMPLATE_DIR.DS."content/home/404.php");}
	
	/**
	 * Show HOME PAGE
	 * @since v1
	 */
	public function _riri(){
		return(INC.DS."main.php");		
	}
	public function _komentar(){return(CONTROL_MODULE.DS."komentar.php");}		
		/**
	 * Show Controller
	 * @since v1
	 */
	public function _controller(){
		return(CONTROL_MODULE.DS."control.php");		
	}
	//dapatkan link full berdasarkan link id nya
	//since version 5
	public function replace_char($string){
		require_once(LIB."/replace_character.lib.php");
		$string = replace_character($string);
		$string = str_replace(' ', '-', $string);
		$string = str_replace('  ', '-', $string);
		$string = str_replace('    ', '-', $string);
		$string = str_replace('/', '-', $string);
		$string = str_replace('/', '-', $string);
		$string = str_replace('---', '-', $string);
		$string = str_replace('--', '-', $string);
		$string = strtolower($string);
		//one more
		$string = replace_character($string);
		return $string;
	}
	
	/**
	* Dapatkan CURRENT URL
	*/
	public function strleft($s1, $s2) {
		return substr($s1, 0, strpos($s1, $s2));
	}
	public function CURRENT_URL() {
		$s = empty($_SERVER["HTTPS"]) ? '' : (($_SERVER["HTTPS"] == "on") ? "s" : "");
		$protocol = $this->strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s; 
		$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]); 
		$urlnya="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
		$urlnya=str_replace(":443","",$urlnya);
		return $urlnya;
	}

	
	/**
	* GET CONTENT OF File utf8
	* since v1
	*/
	function open_file($fn) {
		$content = file_get_contents($fn);
		return mb_convert_encoding($content, 'UTF-8', mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
	}
	
	/**
	* SAVE COTENT OF FILE utf8
	* since v1
	*/
	function save_file($filename, $content) {
		$temp = tempnam(FILE_PUT_CONTENTS_ATOMIC_TEMP, 'temp');
		if (!($f = @fopen($temp, 'wb'))) {
			$temp = FILE_PUT_CONTENTS_ATOMIC_TEMP . DIRECTORY_SEPARATOR . uniqid('temp');
			if (!($f = @fopen($temp, 'wb'))) {
				trigger_error("file_put_contents_atomic() : error writing temporary file '$temp'", E_USER_WARNING);
				return false;
			}
		}
		$content = mb_convert_encoding($content, 'UTF-8', mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
		fwrite($f, $content);
		fclose($f);
	  
		if (!@rename($temp, $filename)) {
			@unlink($filename);
			@rename($temp, $filename);
		}
	  
		@chmod($filename, FILE_PUT_CONTENTS_ATOMIC_MODE);
	  
		return true;
	  
	}
	
	//remove directory
	//since version 5
	function rrmdir($dir) {
	if (is_dir($dir)) {
		 $objects = scandir($dir);
		 foreach ($objects as $object) {
		   if ($object != "." && $object != "..") {
			 if (filetype($dir."/".$object) == "dir") $this->rrmdir($dir."/".$object); else unlink($dir."/".$object);
		   }
		 }
		 reset($objects);
		 rmdir($dir);
		 return 1;
		}
		return 0;
	}
	
	//check template [ASLI APA KAGAK]
	//since version 5
	function check_template($folder_name){
		$template_dir = ROOT."/view";
		//cek file xmlnya
		if (file_exists($template_dir."/$folder_name.xml")){
			return true;
		}else{
			return false;
		}
	}
	
	public function get_link_search($link){return APP_URL."/search/".$link;}	
	
	//remote uploads
	//since version 5
	public function remote_upload($link, $destination){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $link);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec ($ch);
		curl_close ($ch);
		$file = fopen($destination, "w+");
		fputs($file, $data);
		fclose($file);
	}

}
?>