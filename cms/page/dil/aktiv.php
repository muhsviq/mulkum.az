<?PHP
	
	$id = $_GET['id'];
	if($aktiv){
		$supdate = "UPDATE langs SET status='0' WHERE id='".$id."'";
		$nupdate = mysql_query($supdate);
		if($nupdate){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Aktiv olundu'][$lng]."! </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=dil'
			}
			setTimeout(\"redi()\", 3000);
			</script>";
		}
	}
	elseif($passiv){
		echo "<br><br><center><b><font size='4' color='red'> ".$dil['İmtina olundu'][$lng]."! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=dil'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	else {
		?>
		<form name="form1" method="post" action="">
			<br><br><center><b><font size="4" color="red"> <?php echo $dil['dil aktiv etməyə'][$lng]; ?> ?? </font></center>
			<br><center><input type="submit" name="aktiv" value="Bəli"> <input type="submit" name="passiv" value="Xeyir"> </center>
		</form>
	<?PHP
	}
	?>