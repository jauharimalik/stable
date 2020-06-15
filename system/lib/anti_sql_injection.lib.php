<?PHP

function anti_sql_injection($string) {
$string = str_replace("'", " ", $string);
$string = str_replace('"', ' ', $string);
$string = str_replace('=', ' ', $string);
$string = str_replace('}', ' ', $string);
$string = str_replace('{', ' ', $string);
$string = str_replace('[', ' ', $string);
$string = str_replace(']', ' ', $string);
$string = str_replace('?', ' ', $string);
$string = str_replace('!', ' ', $string);
$string = str_replace('$', ' ', $string);
$string = str_replace('#', ' ', $string);
$string = str_replace('%', ' ', $string);
$string = str_replace('*', ' ', $string);
$string = str_replace(')', ' ', $string);
$string = str_replace('(', ' ', $string);
$string = str_replace('~', ' ', $string);
$string = str_replace('-', ' ', $string);
$string = str_replace('+', ' ', $string);
$string = str_replace('|', ' ', $string);
$string = str_replace('>', ' ', $string);
$string = str_replace('<', ' ', $string);
$string = str_replace('^', ' ', $string);
$string = stripslashes($string);
$string = strip_tags($string);
$string = mysql_real_escape_string($string);
return $string;
}
?>