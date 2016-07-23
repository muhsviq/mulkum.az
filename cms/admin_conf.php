<?PHP
session_start();

extract($_GET);
extract($_POST);

$sayt_url_index = 'http://localhost/';
$sayt_url = 'http://mulkum.az/cms/';
$bazahost = "localhost";
$bazaname = "mulkum";
$bazauser = "root";
$bazapass = "";//mysql_connect($bazahost, $bazauser, $bazapass) or die ('Mysqele qoshulmada sef var');
//mysql_select_db($bazaname) or die ('Bazaya qoshulmada sef var');

////////////////////////////////////////////////////////////

// 1. Create a database connection
$connection = mysqli_connect($bazahost, $bazauser, $bazapass);
if (!$connection) {
    die("Mysqele qoshulmada sef var: " . mysqli_error());
}

// 2. Select a database to use 
$db_select = mysqli_select_db($connection,$bazaname);
if (!$db_select) {
    die("Bazaya qoshulmada sef var: " . mysqli_error());
}
/////////////////////////////////////////////////////////////

//mysql_query ("SET NAMES UTF8");
mysqli_set_charset($connection,"utf8");



foreach($_GET as $m=>$c){$_GET[$m]=mysqli_real_escape_string($connection, htmlspecialchars($_GET[$m]));}
$site_dir = str_replace('\\', '/', getcwd());
$site_dir = substr($site_dir, -1, 1) == '/' ? substr($site_dir, 0, -1) : $site_dir;

?>
