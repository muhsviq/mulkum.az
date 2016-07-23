<!-- ﻿﻿  UstaDerslik  Soru-Cevap  Yararlı Araçlar  Teknoloji

Site İçi Hızlı Arama...
arama ikon
Diller
Anasayfa İletişim Üyeler
slider1 Bootstrap Php Pdo Canvas Html5 Jquery Jquery Mobile Css3 GameMaker Unity3D Javascript Html Svg Less Jquery UI Ruby UnrealEngine 4 Css
slider1
ustaderslik-icon Soru-Cevap Yararlı Araçlar Teknoloji Chat
slider1
slider2
Sayfa Yenilemeden çoklu Dosya Yükleme Yapımı (php-jquery)
  
profil
cArleone
Bu dersimizde sayfa yenilemeden çoklu resim yüklemeyi göreceğiz.Kullanacağımız yöntem şu.Foruma target verip verileri sayfa yenilemeden yollatırıp target içine yazdığımız iframeye sonuçların gelmesini sağlayacağız.Veri geldikten sonra jquery ile iframeye erişip işlem yapcağız.

Target iframe yöntemiyle ilgili daha fazla bilgi için : http://ustaderslik.com/konu/HTML_Formu_iframeye_Yollamak_(target) 

Yapacağımız upload sistemin görüntüsü : 
http://ustaderslik.com/resim/ders/uyn3z.png 

Canlı görmek için : http://ustaderslik.comxa.com/ 

İndir : http://ustaderslik.com/dosya/%C3%A7oklu-resim-y%C3%BCkleme-scripti.rar 

Yapacağımız sistemde + ya basarak yeni resim yükleme alanı koyuyor.Tabi sınır 5 tane.- ile çıkarıyor.
Şimdi kodlarımıza başlayalım.

index.php  -->
<!DOCTYPE HTML>

<html lang="en-US">

<head>

	<meta charset="UTF-8">

	<title>UstaDerslik-Resim Yükleme</title>

	<link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace&subset=latin,latin-ext' rel='stylesheet' type='text/css'> 

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

	<script type="text/javascript" src="yukle.js"></script>

	<link rel="stylesheet" href="yukle.css" />

</head>

<body>

	

	<div class="ana">

		<div class="logo_ana">

			<div class="logo"><img src="logo.png" alt="logo" /></div>

			<div class="baslik">Resim Yükleme Merkezi</div>

			<div class="temiz"></div>

		</div>

	</div>

	

		<div class="ana" id="i">

			<div class="arti">+</div>

			<!--  Target vermeyi unutmaayın.Veriyi ajaxla yollar sonuçları belirlediğimiz iframeye yollar. -->

			<form action="yukle.php" method="post" enctype="multipart/form-data" id="yukle" target="iframe">

				<div class="iler">

					<div class="i_ana">	<input type="file" name="resim[]" /> 	<div class="eksi">-</div>	</div>

				</div>

				<input type="submit" class="buton" value="Yükle" />

			</form>

		</div>

		

		<div class="ana" id="i" name="sonuc">

		</div>

	

	<iframe src="" frameborder="0" id="iframe" name="iframe"></iframe>

	

</body>

</html>

<!-- Şimdi tasarımımıza başlayalım.

yukle.css


		/*Tasarım*/ -->
<style>
		.body{margin:0px;padding:0px;background:#f1f1f1;}

		.ana{width:500px;margin:auto;border:1px solid #ddd;margin-top:50px;position:relative;}

		.logo_ana{width:600px;height:100px;}

		.logo{width:200px;height:100px;float:left;}

		.baslik{width:280px;height:30px;margin-top:25px;float:left;padding:10px; font-family:'Covered By Your Grace', cursive;font-size:28px;text-align:center;}

		

		.i_ana{width:490px;height:25px;position:relative;padding:5px;border:1px solid #ddd;margin-bottom:10px;font-size:18px;}

		.i_ana input{display:block;width:465px;height:25px;float:left;font-family:'Covered By Your Grace', cursive;font-size:17px;}

		.eksi{width:25px;height:25px;float:left;text-align:center;cursor:pointer;background:#d12c69;color:#fff;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;font-size:20px;}

		.git{width:25px;height:25px;float:left;text-align:center;cursor:pointer;position:absolute;right:0px;top:5px;background:#d12c69;color:#fff;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px; font-family:'Covered By Your Grace', cursive;font-size:18px;}

		.arti{width:35px;height:25px;position:absolute;left:12.5px;top:-12.5px;text-align:center;cursor:pointer;background:#d12c69;color:#fff;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;font-size:20px;}

		.buton{display:block;border:none;width:125px;height:40px;padding:10px;margin:auto;margin-top:25px;text-align:center;cursor:pointer;background:#d12c69;color:#fff;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px;-o-border-radius:5px;font-size:18px;}

		.eksi:hover,.arti:hover,.buton:hover{background:#2793e6;}

		#i{padding:25px;}

		

		iframe,#i[name=sonuc]{display:none;}

		.temiz{clear:both;}

		

		 ::selection {background: #d12c69 ; color:#fff; }

        ::-webkit-selection {background: #d12c69; color:#fff;}

        ::-moz-selection {background: #d12c69; color:#fff;}

        ::-o-selection {background:#d12c69; color:#fff;}
</style>

<!-- /*Tasarımımızıda yaptık.Şimdi js kodlarımıza geçelim.

yukle.js */ -->
<script type="text/javascript">

$(function(){

		

			$("body").on("click",".arti",function(){ //eğer classı arti olana tıklanırsa

				var i=$(".eksi").size();//sayfadaki eksi clasına sahip objelerinsayısını al

				if(i<5){//eğer eksi sayısı 5 ten az ise

					$(".iler").append('<div class="i_ana">	<input type="file" name="resim[]" /> 	<div class="eksi">-</div>	</div>');

					//sayfaya bir tane daha file koy

				}

			});

			

			$("body").on("click",".eksi",function(){//eksiye tıklanırsa

				var index=$(this).index(".eksi");//o anki tıklanan eksiyi seçiyoruz

				var i=$(".eksi").size();//eksi sayısını alıyoruz.

				if(i>1){//eğer 1 den çok eksi var ise

					$(".i_ana:eq("+index+")").remove();//tıklanan eksinin içindeki file elemanını siliyoruz.

				 }

			});

			

			$("#yukle").submit(function(){//eğer form gönderilirse.

				$("#i[name=sonuc]").html(' <img style="display:block;width:50px;height:50px;margin:auto;" src="loading.gif" alt="loading" /> ').show();

				//loading gifini göster

				$("#iframe").load(function(){//eğer iframe yüklendiyse

					var veri=$(this).contents().find("body").html();//iframenin içeriğini al

					$("#i[name=sonuc]").html(veri);//sonuşları ekrana bas

					$(".iler").html('<div class="i_ana">	<input type="file" name="resim[]" /> 	<div class="eksi">-</div>	</div>');

					//ve sayfadaki fileleri silip yerin 1 tane yeni file koy

				})

			});

			

		});
</script>


<!-- Son olarakta php kısmımızı yapalım.

yukle.php  -->


<?PHP 

	session_start(); 

		$boyut=1000000;//max dosya boyutu

		$tipler=array("image/png","image/jpeg","image/gif","image/pjpeg");//desteklenen dosya türleri

		$ds=@count($_FILES["resim"]["name"]);//gönderilen dosya sayısı

		if(($ds>5) and ($ds<1)){//eğer en az 1 veya en çok 5 değilse işlem yapma

			die('<div class="i_ana" style="border:1px solid red;">  Yükleme miktarını aşıyorsunuz. </div>');

			/*

	if(isset($_SESSION["sure"])){

		$sure=time()-60;

		if($_SESSION["sure"]>$sure){

			die('<div class="i_ana" style="border:1px solid red;">  1 Dakikada 1 yükleme yapabilirsiniz. </div>');

		}else{

			$_SESSION["sure"]=time();

		}

	}else{

		$_SESSION["sure"]=time();

	}

	*/

	//Yukarıdaki kısım yüklemeye süre koymak için. /* */ leri silip aktif edebilirsiniz.1 dakikada 1 kere resim yükletmek için.

		}else{

			for($i=0;$i<$ds;$i++){//hiçbir sorun yoksa for ile tek tek resimleri alıyoruz.

				if(!empty($_FILES["resim"]["name"][$i])){//boş kontrolü

				if(in_array($_FILES["resim"]["type"][$i],$tipler)){//tip kontrolü

					$isim=substr(md5(rand(0,999999999999)),0,10);//rasgele isim

					$uzanti=substr($_FILES["resim"]["name"][$i],-4,4);//uzantıyı alma

					if($uzanti==".gif" or $uzanti==".jpg" or $uzanti==".png"){//uzantı kontrolü

						if($_FILES["resim"]["size"][$i]>$boyut){//dosya boyutu kontrolü

							echo '<div class="i_ana" style="border:1px solid red;">  Boyutu 1 mb tan çok. </div>';

							continue;

						}else{

							$dizin="../resimler/".$isim.$uzanti;//hiç bir sorun yoksa dosyayı upload et

							if(move_uploaded_file($_FILES["resim"]["tmp_name"][$i],$dizin)){

								echo '<div class="i_ana">http://ustaderslik.comxa.com/'.$dizin.' <a href="'.$dizin.'"><div class="git">>></div></a>	</div>';

							}

						}

					}else{

						echo '<div class="i_ana"  style="border:1px solid red;">  Sadece .gif - .png - .jpg yükleyebilirsiniz. </div>';

						continue;

					}

				}else{

						echo '<div class="i_ana"  style="border:1px solid red;">  Sadece .gif - .png - .jpg yükleyebilirsiniz. </div>';

						continue;

				}

				}else{

					echo '<div class="i_ana" style="border:1px solid red;">  Alan Boş. </div>';

					continue;

				}

			}

		}

?>

<!-- 

Kodlarımız bitti.Bunların yanına resimleri depolamak için "resimler" adlı bir klasör oluşturun.Ayrıca hosta atığınızda resimler adlı kladörün izinlerini 777 yapın. -->

