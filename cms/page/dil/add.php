<?PHP
	if($send){
		$lang = $_POST['lang'];
		if(empty($lang)){
			echo "<br><br><center><b><font size=4 color='red'> Dil xanasını boş buraxmaq olmaz ! </font></b><br><br><a href='?menu=dil&mod=add'>Geri qayıt</a></center></br><br>"; 
		}
		else{
			$s_insert = "insert into langs(lang) values('$lang')";
			$n_insert = mysql_query($s_insert);
			if($n_insert){ 
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=dil'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
			}
		}
	
	}
	else {
		?>
		<form name="form1" method="post" action="">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="200">
				<tr>
					<td colspan="2" align="center" class="admin_bolme_bash"><?php echo $dil['Yeni dil əlavə et'][$lng]; ?></td>
				</tr>
				<tr>
					<td align="center" width="50"><b>[ <?php echo $dil['menu5'][$lng]; ?> ]</b></td>
					<td><input name="lang" style="width:50px;"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="send" value="<?php echo $dil['Əlavə et'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	<?PHP
	}
	?>