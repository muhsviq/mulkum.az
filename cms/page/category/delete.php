<?PHP
	
	$id = $_GET['id'];
	if(@$imtina){
		echo "<br><br><center><b><font size='4' color='red'> İmtina olundu! </font></b></center></br><br>
		<script>
		function redi(){
		document.location='?menu=category'
		}
		setTimeout(\"redi()\", 3000);
		</script>";
	}
	elseif(@$delete){
		
		$product_cat22=MYSQLI_QUERY($connection,"SELECT * from `product_cat` where l_id='1' and u_id='$id'");
		$product_cat=MYSQLI_FETCH_ARRAY($product_cat22);
		if(file_exists('../'.$product_cat['photo'].'')){
		unlink('../'.$product_cat['photo'].'');
		}
		else{}
	
		for($i=1; $i<= $hidsay; $i++ ){
			$delete = MYSQLI_QUERY($connection,"DELETE FROM product_cat WHERE u_id='".$id."'"); 
		}
		$product_cat33=MYSQLI_QUERY($connection,"SELECT * from `product_cat` where sub_id='$id'");
		
		while ($mm=MYSQLI_FETCH_ARRAY($product_cat33)){
		if(file_exists('../'.$mm['photo'].'')){
		unlink('../'.$mm['photo'].'');
		}
		else{}
		 
		}
		$delete22 = MYSQLI_QUERY($connection,"DELETE FROM product_cat WHERE sub_id='".$id."'");
		
		$product33=MYSQLI_QUERY($connection,"SELECT * from `product` where cat_id='".$id."'");
		while ($mm33=MYSQLI_FETCH_ARRAY($product33)){
			
			$product_photo33=MYSQLI_QUERY($connection,"SELECT * from `product_photo` where p_id='".$mm33['u_id']."'");
			while ($mm44=MYSQLI_FETCH_ARRAY($product_photo33)){
				if(file_exists('../products/'.$mm44['photo'].'')){
				unlink('../products/'.$mm44['photo'].'');
				}
				else{}
				
				$delete44 = MYSQLI_QUERY($connection,"DELETE FROM product_photo WHERE u_id='".$mm44['u_id']."'");
			}
			$delete33 = MYSQLI_QUERY($connection,"DELETE FROM product WHERE u_id='".$mm33['u_id']."'"); 
		}
		
		
		if($delete and $delete22){
			echo "<br><br><center><b><font size='4' color='red'> " .$dil['silindi'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=category'
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