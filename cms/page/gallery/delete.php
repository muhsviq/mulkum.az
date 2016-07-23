<?PHP
	@$tip = $_GET['tip'];
	@$u_id = $_GET['u_id'];
	if(@$imtina){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=gallery&catid=".$catid."'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		$select = MYSQLI_QUERY($connection,"SELECT * FROM gallery WHERE u_id='".$u_id."'");
		$n = MYSQLI_FETCH_ASSOC($select);
		@unlink($_SERVER['DOCUMENT_ROOT'].'/Bakujaluzi/products/'.$n['photo']);
		$hidsay = $_POST['hidsay'];
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM gallery WHERE u_id='".$u_id."'"); 
		}
		if($delete){
		
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=gallery&catid=".$catid."'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
		}
	}
	else {
			$sl = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status='0'");
			$say = mysqli_num_rows($sl);
		?>
		<form name="form1" method="post" action="">
			<input type="hidden" name="hidsay" value="<?PHP echo $say; ?>" />
			<br><br><center><b><font size="4" color="red"> <?php echo $dil['silməyə_əminsiniz'][$lng]; ?> </font></center>
			<br><center><input type="submit" name="delete" value="Bəli"> <input type="submit" name="imtina" value="Xeyir"> </center>
		</form>
	<?PHP
	}
	?>