<div class="add-advertisement">
<div class="search-house">
	<div class="container">
		<form method="post" action="<?PHP echo $site_url;?>add.php" id="commentForm" enctype="multipart/form-data">
				<div class="row">
				<div class="col-md-12 ">
				<div class=" col-md-12 lightgray">			<div class="col-md-12">
					
				    <div class="col-md-2 col-xs-6">
						<select name="elan" required>
							<option value="0">Elan veren:</option>
							<option value="1">Əmlak sahibi</option>
							<option value="2">Vasiteçi</option>
						</select>
					</div>

					<div class="col-md-2 col-xs-6">
						<select name="elan_novu" id="elan-novu" onchange="myFunction()" required>
							<option value="0">Elanın növü:</option>
							<option value="1">Satiş</option>
							<option value="2">Kirayə</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6 " >
						<select name="emlak_novu" id="emlak-novu" onchange="myFunction2()" required>
							<option value="0">Əmlakın növü:</option>
							<option value="1">Yeni tikili</option>
							<option value="2">Köhne tikili</option>
							<option value="3">Gündəlik ev</option>
							<option value="4">Ofis</option>
							<option value="5">Həyət evi/villa</option>
							<option value="6">Obyekt</option>
							<option value="7">Bağ</option>
							<option value="8">Qaraj</option>
							<option value="9">Torpaq</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6">
						<select name="valyuta" required>
							<option value="0">Valyuta:</option>
							<option value="1">Azn</option>
							<option value="2">$</option>
						</select>
					</div>
						<div class="col-md-2 col-xs-6">
						<input style="padding: 5px 10px 3px 10px;"  type="text" name="qiymet" placeholder="Qiymeti..." required>
					</div>
					<div class="col-md-2 col-xs-6" id="mertebe">
						<select name="top_floor" required>
							<option value="0">Mərtəbə sayı:</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6" id="mertebe1">
						<select name="floor" required>
							<option value="0">Necenci mertebe:</option>
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6" id="mertebe2">
						<select name="otaq_sayi" required>
							<option value="0">Otaq sayi:</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
						</select>
					</div>

				


			


					
					<div class="col-md-2 col-xs-6" id="emlak-senedi">
						<select name="emlak_senedi" required >
							<option value="0">Əmlak sənədi:</option>
							<option value="1">Kupça</option>
							<option value="2">Digər sənəd</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6" id="emlak-kredit">
					<div class="col-md-8" style="padding:0px;">
						<p>Kreditlə satılır: </p>
					</div>
					<div class="col-md-4" style="padding:0px; margin-top:12px;">
						<input type="checkbox" value="5" name="check-box" >
						</div>
						
					</div>
					<div class="  col-md-2 col-xs-6" id="kiraye-dovru">
						<select name="kiraye_dovru" required>
							<option value="0">Kirayə dövrü:</option>
							<option value="1">Gunluk</option>
							<option value="2">Ayliq</option>
						</select>
						
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="col-md-5"><p>Rayon(qəsəbə) / Küçə: </p></div>
						<div class="col-md-7" style="padding-left:0px;"> 
					
						<input type="text" name="kuce" required></div>
					</div>
					<br>
					<div class="col-md-2 col-xs-12">
					<div class="col-md-9 col-xs-9" style="padding:0px;">
						<input style="padding: 5px 10px 3px 10px;" type="text" name="sahe" placeholder="Sahesi... " required>
						</div>
						<div class="col-md-2 col-xs-2 " style="padding-left:0px;"><p id="kvadrat"></p></div>
					</div>
				

						
</div>
<div class="col-md-12"><div class="clearFix2"></div></div>
				<div class="col-md-12">
				<div class="col-md-2 col-xs-6">
			
						<select name = "olke" id="mySelect"  required="">
							<option  value="0">Ölke:</option>
							<?PHP

								$olke_sql=mysqli_query($db,"SELECT * FROM erazi WHERE tip = 1");
							 while($olke_query=mysqli_fetch_assoc($olke_sql)){ 
								$a=1; ?>
							<option value="<?PHP echo $a;?>"> <?PHP echo $olke_query['name']; ?></option>

							<?PHP $a++;} ?>
							
						</select>
					</div>
			    <div class="col-md-2 col-xs-6">
						<select name="seher" required>
							<option value="0">Şəhər seçin:</option>
							<option value="1">Baki</option>
							<option value="2">Agdash</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6">
						<select name="rayon" required>
							<option value="0">Rayon:</option>
							<option value="1">Nerimanov</option>
							<option value="2">Nesimi</option>
						</select>
					</div>
					<div class="col-md-2 col-xs-6">
						<select name="metro" required>
							<option value="0">Metro:</option>
							<option value="1">Xetai</option>
							<option value="2">Genclik</option>
						</select>
					</div>
					<div class="col-md-12 col-xs-12">
						<p>Elan haqqında məlumat: </p>
					</div>
					<div class="col-md-12">
					<textarea name="text" value="" required></textarea>
					</div>
				</div>
				<div class="add-button-left">
					<div class="col-md-12">
						<div class="col-md-6">
						    <div class="col-md-4">
							   <p>Ad: </p> 
							</div>
							<div class="col-md-8">
								<input type="text" name="name" required>
							</div>
							<div class="clearFix"></div>
							<div class="col-md-4">
							   <p>Telefon: </p> 
							</div>
							<div class="col-md-8">
								<input type="text" name="telephone" required>
							</div>
							<div class="clearFix"></div>
							<div class="col-md-4">
							   <p>Email: </p> 
							</div>
							<div class="col-md-8">
								<input type="email" name="email" required>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-md-12"><div class="clearFix2"></div></div>	
				<div class="col-md-12">
					<p class="qaydalar">Qaydalar:</p>
					<div class="qaydalar-t">
					<p>1) Əmlaka aidiyatı olmayan, üzərində yazı və ya logo olan şəkillərlə elan qəbul olunmur.</p>
					<p>2) Ən azı 4 və ən çoxu 16 şəkil yüklənməlidir.</p>
					<p>3) Elan verərkən şəkillərin ölçüsü minimum 600px olmalıdır.</p>
					<p>4) Siz öz elanınızı şəxsi kabinetdən redaktə edə və silə bilərsiniz.</p>
					<p>5) Əlavə edilən elanlar 35 gündən sonra silinir.</p>
					<p>6) E-mail ünvanınızı düzgün qeyd edin. Bu ünvana elanınız haqqında məlumatlar göndəriləcək.</p>
					<p>7) Əmlakın təsvirində məlumatları böyük hərflərlə yazmaq qadağandır.</p>
					<p>8) Ünvanı xəritədə dəqiq göstərməyiniz vacibdir.</p>
					</div>

					<div class="col-md-12">
						<div class="col-md-12 rules-photo-border">
							<div class="qaydalar-t">
								<p>* Ən azı 4 və ən çoxu 16 şəkil yüklənməlidir.</p>

							<input type="file" name="file">
							</div>

						</div>
				</div>
					<div class="col-md-12">
						<input type="submit" name="" value="Elanı göndər">
					</div>

				</div></div></div>
			</div>
			</form>

			</div>
	</div>
</div>

<script type="text/javascript">
function myFunction(){

	if(document.getElementById("elan-novu").value==2){

	document.getElementById("kiraye-dovru").style.display = "inline";
document.getElementById("emlak-senedi").style.display = "none";
	document.getElementById("emlak-kredit").style.display = "none";}
	if(document.getElementById("elan-novu").value==1){

	document.getElementById("emlak-senedi").style.display = "inline";
	document.getElementById("emlak-kredit").style.display = "inline";
	document.getElementById("kiraye-dovru").style.display = "none";
}
	
}
function myFunction2(){
	if(document.getElementById("emlak-novu").value==1||document.getElementById("emlak-novu").value==2 || document.getElementById("emlak-novu").value==3){
		document.getElementById("mertebe").style.display = "inline";
		document.getElementById("mertebe1").style.display = "inline";
		document.getElementById("mertebe2").style.display = "inline";

}
if(document.getElementById("emlak-novu").value==4||document.getElementById("emlak-novu").value==5){
document.getElementById("mertebe").style.display = "none";
		document.getElementById("mertebe1").style.display = "none";
		document.getElementById("mertebe2").style.display = "inline";

}
if(document.getElementById("emlak-novu").value==6||document.getElementById("emlak-novu").value==7|| document.getElementById("emlak-novu").value==8){
	document.getElementById("mertebe").style.display = "none";
		document.getElementById("mertebe1").style.display = "none";
		document.getElementById("mertebe2").style.display = "none";

}
if (document.getElementById("emlak-novu").value==9) {
document.getElementById("kvadrat").innerHTML="sot";
}
if (document.getElementById("emlak-novu").value!=9) {
document.getElementById("kvadrat").innerHTML="m²";
}
}



</script>
