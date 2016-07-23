<?PHP
	
	$id = $_GET['id'];
	if(@$imtina){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=admin'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		$product22=MYSQLI_QUERY($connection,"SELECT * from `admin` where con='$id'");
		$product=MYSQLI_FETCH_ARRAY($product22);
	
		
		
			$delete = MYSQLI_QUERY($connection,"DELETE FROM admin WHERE con='".$id."'"); 
			
			$delete = MYSQLI_QUERY($connection,"DELETE FROM admin_menu WHERE a_id='".$id."'"); 
			
		
		if($delete){
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=admin'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
		}
	}
	else {
		?>
	
		<form name="form1" method="post" action="">
			<input type="hidden" name="hidsay" value="<?PHP echo $say; ?>" />
			<input type="hidden" name="catid" value="<?PHP echo $catid; ?>" />
			<br><br><center><b><font size="4" color="red"> <?php echo $dil['silməyə_əminsiniz'][$lng]; ?> </font></center>
			<br><center><input type="submit" name="delete" value="Bəli"> <input type="submit" name="imtina" value="Xeyir"> </center>
		</form>
	<?PHP
	}
	?>