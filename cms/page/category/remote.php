
 <?php
include ("../../admin_conf.php");
if (isset($_GET['url_tag1'])) {$url_tag=$_GET['url_tag1'];}
elseif(isset($_GET['url_tag2'])){$url_tag=$_GET['url_tag2'];}
elseif(isset($_GET['url_tag3'])){$url_tag=$_GET['url_tag3'];}
else{
exit();
}

 ?>

 <?php
// echo "SELECT url_tag FROM product_cat where url_tag='$url_tag'";
$result2 = mysql_query ("SELECT url_tag FROM product_cat where url_tag='$url_tag'");
    $myrow2 = mysqli_num_rows($result2);
	if($myrow2>0){
	echo json_encode( "false");
	}
	else{
	echo json_encode("true");
	}
  ?>