<?PHP
	
	$id = $_GET['id'];
	
	if(@$imtina){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=gizli'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		$hidsay = $_POST['hidsay'];				$product_cat22=MYSQLI_QUERY($connection,"SELECT * from `menu` where l_id=1 AND u_id='".$id."'");		$product_cat=MYSQLI_FETCH_ARRAY($product_cat22);		if(file_exists('../products/'.$product_cat['photo'].'')){		unlink('../products/'.$product_cat['photo'].'');		}		else{}
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM menu WHERE l_id='".$i."' AND u_id='".$id."'"); 
		}
		if(@$delete){
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]." </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=pages&tip=yuxari'
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