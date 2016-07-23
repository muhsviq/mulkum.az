<?PHP
include ('php_injections.php');
$id = $_GET["id"];
	$id     = htmlspecialchars($id);
	$id     = stripslashes($id);
	$id     = tags_filter($id);
	$id     = SqlInjectFilterMini($id);
	$id     = SqlInjectFilterText($id);
	$id     = strip_tags($id);

	$lng = $_GET["lng"];
	$lng     = htmlspecialchars($lng);
	$lng     = stripslashes($lng);
	$lng     = tags_filter($lng);
	$lng     = SqlInjectFilterMini($lng);
	$lng     = SqlInjectFilterText($lng);

	$pages = $_GET["pages"];
		$pages     = htmlspecialchars($pages);
		$pages     = stripslashes($pages);
		$pages     = tags_filter($pages);
		$pages     = SqlInjectFilterMini($pages);
		$pages     = SqlInjectFilterText($pages);

	$menu	= $_GET["menu"];
	$menu     = htmlspecialchars($menu);
	$menu     = stripslashes($menu);
	$menu     = tags_filter($menu);
	$menu     = SqlInjectFilterMini($menu);
	$menu     = SqlInjectFilterText($menu);

	$sehife	= $_GET["sehife"];
	$sehife     = htmlspecialchars($sehife);
	$sehife     = stripslashes($sehife);
	$sehife     = tags_filter($sehife);
	$sehife     = SqlInjectFilterMini($sehife);
	$sehife     = SqlInjectFilterText($sehife);

	$page = $_GET["page"];
	$page     = htmlspecialchars($page);
	$page     = stripslashes($page);
	$page     = tags_filter($page);
	$page     = SqlInjectFilterMini($page);
	$page     = SqlInjectFilterText($page);




	
include('conf.php');


if(@$_GET['lng'])
{
	
	switch ($_GET['lng'])
	{
		case '1': $lng=1; break;
		case '2': $lng=2; break;
		case '3': $lng=3; break;
		default: $lng=1;
	} 
}
else 
{
	$lng = 1;
}

if(@$_GET['sehife'])
{
	switch($_GET['sehife'])
	{
		case 'main'		: $page='main'; 		$ll='u_id'; 	$tbn='menu';		$def=5; $www='u_id';	break;
		case 'pages'	: $page='pages'; 		$ll='u_id'; 	$tbn='menu';		$def=1; $www='u_id';	break;
		case 'category'	: $page='category'; 	$ll='u_id';		$tbn='xeberler';	$def=1;	$www='u_id';	break;
		case 'news'		: $page='news'; 		$ll='u_id';		$tbn='xeberler';	$def=1;	$www='u_id';	break;
		case 'images'	: $page='images'; 	$ll='u_id';		$tbn='xeberler';	$def=1;	$www='u_id';	break;
		case 'product'	: $page='product'; 		$ll='u_id';		$tbn='xeberler';	$def=1;	$www='u_id';	break;
		case 'search'	: $page='search'; 			$ll='u_id';		$tbn='xeberler';	$def=1;	$www='u_id';	break;
		case 'elan'		: $page='elan'; 			$ll='u_id';		$tbn='elan';	$def=1;	$www='u_id';	break;
		case 'addelan'	: $page='addelan'; 			$ll='u_id';		$tbn='addelan';	$def=1;	$www='u_id';	break;
		case 'kiraye'	: $page='kiraye'; 			$ll='u_id';		$tbn='kiraye';	$def=1;	$www='u_id';	break;
		case 'satis'	: $page='satis'; 			$ll='u_id';		$tbn='satis';	$def=1;	$www='u_id';	break;
		default			: $page='main'; 		$ll='u_id';		$tbn='menu';		$def=5;					break;
		
	}
}
else
{
	$page='main';  $ll='u_id';  $tbn='menu';  $def=5;  $www='u_id';
}
@$$ll=$_GET['val'];

include('include/header.php');
include('include/'.$page.'.php');

include('include/footer.php');
?>