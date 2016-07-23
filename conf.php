<?PHP session_start();

$dbhost = "localhost";
$dbname = "mulkum";
$dbuser = "root";
$dbpass = "";

$site_url='http://localhost/mulkum.az/';
$site_main_url = 'http://localhost/';
$db = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Mysqele qoshulmada sef var');
mysqli_select_db($db,$dbname) or die ('Bazaya qoshulmada sef var');
mysqli_query ($db,"SET NAMES UTF8");

$site_dir = str_replace('\\', '/', getcwd());
$site_dir = substr($site_dir, -1, 1) == '/' ? substr($site_dir, 0, -1) : $site_dir;

?>