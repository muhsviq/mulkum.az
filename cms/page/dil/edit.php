<?PHP
	$id = $_GET['id'];
	if($send){
		$lang = $_POST['lang'];
		if(empty($lang)){
			echo "<br><br><center><b><font size=4 color='red'> ".$dil['Dil boş'][$lng]." ! </font></b><br><br><a href='?menu=dil&mod=add'>Geri qayıt</a></center></br><br>"; 
		}
		else{
			$tip = $_POST['tip'];
			if(!empty($tip)){
				$stip_update = MYSQLI_QUERY($connection,"UPDATE langs SET tip='0' WHERE tip='1'");

				$supdate = "UPDATE langs SET tip='1', lang='".$lang."' WHERE id='".$id."'";
				$nupdate = mysql_query($supdate);
				if($nupdate){ 
					echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=dil'
					}
					setTimeout(\"redi()\", 3000);
					</script>";
				}
			}
			else{
				$supdate = "UPDATE langs SET lang='".$lang."' WHERE id='".$id."'";
				$nupdate = mysql_query($supdate);
				if($nupdate){ 
					echo "<br><br><center><b><font size='4' color='red'> ".$dil['Redakte olundu'][$lng]."! </font></b></center></br><br>
					<script>
					function redi(){
					document.location='?menu=dil'
					}
					setTimeout(\"redi()\", 3000);
					</script>";
				}
			}
		}
		
	
	}
	else {
		$s_lang = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE id='".$id."'");
		$n_lang = MYSQLI_FETCH_ARRAY($s_lang);
		?>
		<form name="form1" method="post" action="">
			<table cellpadding="0" cellspacing="0" border="0" align="center" width="200">
				<tr>
					<td colspan="2" align="center" class="admin_bolme_bash"><?php echo $dil['Redaktə et2'][$lng]; ?></td>
				</tr>
				<tr>
					<td align="center" width="50"><b>[ <?php echo $dil['menu5'][$lng]; ?> ]</b></td>
					<td><input name="lang" style="width:50px;" value="<?PHP echo $n_lang['lang'];?>"> <input type="checkbox" name="tip" <?PHP if($n_lang['tip']==1){?>checked<?PHP } ?>><?PHP echo $n_lang['Əsas dil olsun'];?></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="send" value="<?php echo $dil['Dəyişdir'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	<?PHP
	}
	?>