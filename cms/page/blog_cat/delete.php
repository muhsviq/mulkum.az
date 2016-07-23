<?PHP
	
	$id = $_GET['id'];
	if(@$imtina){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=blog_cat'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		
		$product_cat22=MYSQLI_QUERY($connection,"SELECT * from `blog_cat` where l_id='1' and u_id='$id'");
		$product_cat=MYSQLI_FETCH_ARRAY($product_cat22);
		if(file_exists('../'.$product_cat['photo'].'')){
		unlink('../'.$product_cat['photo'].'');
		}
		else{}
	
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM blog_cat WHERE u_id='".$id."'"); 
		}
		$product_cat33=MYSQLI_QUERY($connection,"SELECT * from `blog_cat` where sub_id='$id'");
		
		while ($mm=MYSQLI_FETCH_ARRAY($product_cat33)){
		if(file_exists('../'.$mm['photo'].'')){
		unlink('../'.$mm['photo'].'');
		}
		
		
		else{}
		 
		}
		
		$product33=MYSQLI_QUERY($connection,"SELECT * from `blok` where cat_id='".$id."'");
		
		while ($mm55=MYSQLI_FETCH_ARRAY($product33)){
		if(file_exists('../'.$mm55['photo'].'')){
		unlink('../'.$mm55['photo'].'');
		}
		
		
		else{}
		 $delete45 = MYSQLI_QUERY($connection,"DELETE FROM blok WHERE u_id='".$mm55['u_id']."'"); 
		}
		
		
		
		
		$delete22 = MYSQLI_QUERY($connection,"DELETE FROM blog_cat WHERE sub_id='".$id."'");
		if($delete and $delete22){
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=blog_cat'
				}
				setTimeout(\"redi()\", 3000);
				</script>";
		}
	}
	else {
		?>
		<?PHP
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