<?PHP
	
	$id = $_GET['id'];
	if(@$imtina){
		$catid = $_POST['catid'];
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=bilet'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		
		$product22=MYSQLI_QUERY($connection,"SELECT * from `bilet` where l_id='1' and u_id='$id'");
		$product=MYSQLI_FETCH_ARRAY($product22);
		if(file_exists('../products/'.$product['photo'].'')){

		unlink('../products/'.$product['photo'].'');

		}


else{}
	
	
		$catid = $_POST['catid'];
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM bilet WHERE l_id='".$i."' AND u_id='".$id."'"); 
		}
		if($delete){
			echo "<br><br><center><b><font size='4' color='red'> Silindi! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=bilet'
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
			<input type="hidden" name="catid" value="<?PHP echo $catid; ?>" />
			<br><br><center><b><font size="4" color="red"> Siz bu səhifəni silməyə əminsiniz ?? </font></center>
			<br><center><input type="submit" name="delete" value="Bəli"> <input type="submit" name="imtina" value="Xeyir"> </center>
		</form>
	<?PHP
	}
	?>