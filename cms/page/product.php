<?PHP
	$catid = $_GET['catid'];
?>
<form action="" method="POST" enctype="multipart/form-data">

<?PHP 
if($mod != 'add' and $mod != 'edit')

{
 ?>

<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=product&catid=<?PHP echo $catid;?>&mod=add">
		<span>
			<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni səhifə" /><br />
			<?php echo $dil['Yeni_məhsul'][$lng]; ?>
		</span>
		</a>
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/remember.png'); padding:0px; border:none;" name="save" value="" /><br><br>Yadda saxla
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/delete.png'); padding:0px; border:none;" name="delete" value="" /><br><br>Sil
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/on.png'); padding:0px; border:none;" name="aktiv" value="" /><br><br>Aktiv
	</li>
	
	<li>
		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/off.png'); padding:0px; border:none;" name="passiv" value="" /><br><br>Passiv
	</li>
	
</ul><!-- shortcut-buttons-set -->

<?PHP 
}
else{}

 ?>

<div class="clear"></div> <!-- clear -->
<div class="content-box">
	<div class="content-box-header">
		<?PHP
			$s_cat = MYSQLI_QUERY($connection,"SELECT * FROM product_cat WHERE l_id='1' AND tip='0' AND u_id='".$catid."' ORDER BY ordering ASC");
			$n_cat = MYSQLI_FETCH_ASSOC($s_cat);
		?>
		<h3 style="width:87%;">Məhsullar<?PHP if(!empty($n_cat['u_id'])){ ?> / <?PHP echo $n_cat['name'];}?></h3>
		<ul class="content-box-tabs">
			<li>
				<a href="#tab1" class="default-tab">Cədvəl</a>
			</li>
		</ul>
		<div class="clear"></div>
	</div> <!-- content-box-header -->
	
	<div class="content-box-content">
		
		<div class="tab-content default-tab" id="tab1">
			<?PHP
				@$mod = $_GET['mod'];
				if($mod == 'add'){ include 'product/add.php';}
				elseif($mod == 'edit'){ include 'product/edit.php';}
				elseif($mod == 'delete'){ include 'product/delete.php';}
				elseif($mod == 'editphotos'){ include 'product/edit_photos.php';}
				elseif($mod == 'addphotos'){ include 'product/add_photos.php';}
				elseif($mod == 'videolist'){ include 'product/video_list.php';}
				elseif($mod == 'videoadd'){ include 'product/video_add.php';}
				elseif($mod == 'videoedit'){ include 'product/video_edit.php';}
				elseif($mod == 'videodel'){ include 'product/video_delete.php';}
				else{ include 'product/list.php';}
			?>
		<div>
			
	</div>
</div>