<?PHP
	
	$u_id = $_GET['id'];
	if(@$imtina){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=coment'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		$select = MYSQLI_QUERY($connection,"SELECT * FROM coment WHERE id='".$u_id."'");
		$n = MYSQLI_FETCH_ASSOC($select);
		unlink('../products/'.$n['photo']);
		$hidsay = $_POST['hidsay'];
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM coment WHERE id='".$u_id."'"); 
		}
		if($delete){
		
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=coment'
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