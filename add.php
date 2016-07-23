<?PHP 
include 'conf.php';
include 'SimpleImage.php';
$olke=$_POST['olke'];
$elan=$_POST['elan'];
$elan_novu=$_POST['elan_novu'];
$emlak_novu=$_POST['emlak_novu'];
$sahe=$_POST['sahe'];
$qiymet=$_POST['qiymet'];
$valyuta=$_POST['valyuta'];
$seher=$_POST['seher'];
$rayon=$_POST['rayon'];
$metro=$_POST['metro'];
$emlak_senedi=$_POST['emlak_senedi'];
$checkbox=$_POST['check-box'];
$kiraye_dovru=$_POST['kiraye_dovru'];
$kuce=$_POST['kuce'];
$text=$_POST['text'];
$name=$_POST['name'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$mertebe_say=$_POST['top_floor'];
$mertebe=$_POST['floor'];
$otaq_say=$_POST['otaq_sayi'];
$file=$_FILES['file'];
$check_mail = mysqli_query($db,"SELECT * FROM user WHERE email='".$email."' limit 1" );
if(mysqli_num_rows($check_mail)!=0){
	$fetch_check_mail=mysqli_fetch_assoc($check_mail);
	
	$query=mysqli_query($db,"INSERT INTO `elan`(`s_id`,`elan_nov`, `v_tarix`, `r_id`, `email`,`u_id`,  `erazi_id`, `nov_id`, `mertebe`, `mertebe_say`, `sahe`, `otaq_say`, `text`, `kiraye_dovru`, `emlak_sened`,`valyuta`,`qiymet`,`kredit`) VALUES ('1','elan_novu',now(),'$elan','$email','".$fetch_check_mail['id']."','".$seher.",".$rayon.",".$metro."','$elan_novu','$mertebe','$mertebe_say','$sahe','$otaq_say','$text','$kiraye_dovru','$emlak_senedi','$valyuta','$qiymet','$checkbox')");
	$e_fetch=mysqli_insert_id($db);

	$types=array("image/png","image/jpeg","image/jpg");

if(in_array($file["type"], $types)){

	if(move_uploaded_file($file["tmp_name"],"images/".$file["name"])){
		

	$image = new SimpleImage();
	$image->load("images/".$file["name"]);
	$image->resize(100, 100);
	$new_img = "images2/".$file["name"];
		$image->save($new_img);
	$image2 = new SimpleImage();
	$image2->load("images/".$file["name"]);
	$image2->resize(500, 500);
	$new_img2 = "images3/".$file["name"];
		$image2->save($new_img2);
	
		$elan_photo_sql=mysqli_query($db,"INSERT INTO `elan_photo`(`photo`,`e_id`) VALUES ('".'images/'.$file["name"]."','".$e_fetch."')");
		$elan_photo_sql2=mysqli_query($db,"INSERT INTO `elan_photo` (`photo`,`e_id`) VALUES ('".'images2/'.$file["name"]."','".$e_fetch."')");
		$elan_photo_sql3=mysqli_query($db,"INSERT INTO `elan_photo` (`photo`,`e_id`) VALUES ('".'images3/'.$file["name"]."','".$e_fetch."')");
		
	
	}
	else echo "error";

}

else echo "yuklediyiniz fayl sekil deyil";


if($query=TRUE){
	echo "bazaya yazildiu";}
	else
		echo "bazaya yazilmadi";



}
if(mysqli_num_rows($check_mail)==0){
$a = rand(100000,999999);
$u_insert=mysqli_query($db,"INSERT INTO `user`(`name`, `email`,`telephone`, `shifre`) VALUES ('$name','$email','$telephone','$a')");
$u_fetch =mysqli_insert_id($db);

$query=mysqli_query($db,"INSERT INTO `elan`(`s_id`,`elan_nov`, `v_tarix`, `r_id`, `email`,`u_id`,  `erazi_id`, `nov_id`, `mertebe`, `mertebe_say`, `sahe`, `otaq_say`, `text`, `kiraye_dovru`, `emlak_sened`,`valyuta`,`qiymet`,`kredit`) VALUES ('1','elan_novu',now(),'$elan','$email',$u_fetch,'4','$elan_novu','$mertebe','$mertebe_say','$sahe','$otaq_say','$text','$kiraye_dovru','$emlak_senedi','$valyuta','$qiymet','$checkbox')");
$e_fetch=mysqli_insert_id($db);
$types=array("image/png","image/jpeg","image/jpg");

if(in_array($file["type"], $types)){

	if(move_uploaded_file($file["tmp_name"],"images/".$file["name"])){
		

	$image = new SimpleImage();
	$image->load("images/".$file["name"]);
	$image->resize(100, 100);
	$new_img = "images2/".$file["name"];
		$image->save($new_img);
	$image2 = new SimpleImage();
	$image2->load("images/".$file["name"]);
	$image2->resize(500, 500);
	$new_img2 = "images3/".$file["name"];
		$image2->save($new_img2);
	
		$elan_photo_sql=mysqli_query($db,"INSERT INTO `elan_photo` (`photo`,`e_id`) VALUES ('".'images/'.$file["name"]."','".$e_fetch."')");
		$elan_photo_sql2=mysqli_query($db,"INSERT INTO `elan_photo`(`photo`,`e_id`) VALUES ('".'images2/'.$file["name"]."','".$e_fetch."')");
		$elan_photo_sql3=mysqli_query($db,"INSERT INTO `elan_photo` (`photo`,`e_id`) VALUES ('".'images3/'.$file["name"]."','".$e_fetch."')");
		echo "sekil yuklendi";


	}
	else echo "error";

}

else echo "yuklediyiniz fayl sekil deyil";


if($query=TRUE){
	echo "bazaya yazildiu";}
	else
		echo "bazaya yazilmadi";


}

?>