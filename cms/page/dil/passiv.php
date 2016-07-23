<?PHP
	
	$id = $_GET['id'];
	if($aktiv){
		echo "<br><br><center><b><font size='4' color='red'> ".$dil['İmtina olundu'][$lng]."! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=dil'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif($passiv){
		$supdate = "UPDATE langs SET status='1' WHERE id='".$id."'";
		$nupdate = mysql_query($supdate);
		if($nupdate){
			echo "<br><br><center><b><font size='4' color='red'> ".$dil['Passiv olundu'][$lng]." </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=dil'
			}
			setTimeout(\"redi()\", 3000);
			</script>";
		}
	}
	else {
		?>
		<form name="form1" method="post" action="">
			<br><br><center><b><font size="4" color="red"> <?php echo $dil['dil passiv etməyə'][$lng]; ?> ?? </font></center>
			<br><center><input type="submit" name="passiv" value="Bəli"> <input type="submit" name="aktiv" value="Xeyir"> </center>
		</form>
	<?PHP
	}
	?>