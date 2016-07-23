<?php
$id = $_POST["id"];
$catid = $_POST["catid"];
$id = $_GET['id'];


$toplam = count($_FILES["dosya"]["name"]);
$formatlar = array("image/png","image/jpeg","image/gif");
$path_to_90_directory = '../products/';

for ($i = 0; $i < $toplam; $i++){
$rand = uniqid(rand(1,9990000));
	if (in_array($_FILES["dosya"]["type"][$i], $formatlar)){
	//
		$filename = $_FILES['dosya']['name'][$i];
		$source = $_FILES['dosya']['tmp_name'][$i];	
		$target = $path_to_90_directory . $filename;
		move_uploaded_file($source, $target);

	if(preg_match('/[.](GIF)|(gif)$/', $filename)) {
	$im = imagecreatefromgif($path_to_90_directory.$filename) ; 
	}
	if(preg_match('/[.](PNG)|(png)$/', $filename)) {
	$im = imagecreatefrompng($path_to_90_directory.$filename) ;
	}
	
	if(preg_match('/[.](JPG)|(jpg)|(jpeg)|(JPEG)$/', $filename)) {
		$im = imagecreatefromjpeg($path_to_90_directory.$filename); 
	}

$w = 1100;  // eyer bundan boyukse keseecek eni
$h = 1100; // eyer bundan boyukse keseecek hundurluyu
$w_src = imagesx($im);
$h_src = imagesy($im);
$dest = imagecreatetruecolor($w,$h);
$dest2 = imagecreatetruecolor($w_src,$h_src); 
if($w_src < $w and $h_src < $h)
{
  
imagecopyresampled($dest2, $im, 0, 0, 0, 0, $w_src, $h_src, $w_src, $h_src); 
imagejpeg($dest2,$path_to_90_directory.$rand.".jpg");
$avatar = $path_to_90_directory.$rand.".jpg";
$delfull = $path_to_90_directory.$filename; 
	
	//
$avatar = str_replace ('../','',$avatar);
}
else
{

         $dest = imagecreatetruecolor($w,$h); 


         if ($w_src>$h_src) 
         {
        imagecopyresampled($dest, $im, 0, 0,
                        round((max($w_src,$h_src)-min($w_src,$h_src))/2),
                          0, $w, $h, min($w_src,$h_src), min($w_src,$h_src)); 
                          }

         if ($w_src<$h_src) 
         {
         imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $w,
                          min($w_src,$h_src), min($w_src,$h_src)); 
                          }

         if ($w_src==$h_src) 
         imagecopyresampled($dest, $im, 0, 0, 0, 0, $w, $w, $w_src, $w_src); 
		 


imagejpeg($dest, $path_to_90_directory.$rand.".jpg");
$avatar = $path_to_90_directory.$rand.".jpg";
$delfull = $path_to_90_directory.$filename; 
	
	//
$avatar = str_replace ('../','',$avatar);
		}			
		
$result_in = mysqli_query ($connection,"INSERT INTO product_photo(gal_id,img_src)
	                                                     VALUES ('$id','$avatar')");
if($result_in == 'true')
{
echo '<center><img src="'.$delfull.'" alt="" class="resim" width="300" height="250" /></center>';
}
else 
		{
		echo 'Yanlish format';
		}

	}
	else
{
echo "".$i."- yanlish format</br>";	
}
	}
	echo "<br><br><center><b><font size='4' color='red'> Yükləndi! </font></b></center></br><br>
	<script>
	function redi(){
	document.location='?menu=product&catid=".$catid."&mod=editphotos&id=".$id."'
	}
	setTimeout(\"redi()\", 3000);
	</script>";
?>