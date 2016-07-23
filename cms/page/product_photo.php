
<form action="" method="POST"  enctype="multipart/form-data">

<?PHP 
if($mod != 'add' and $mod != 'edit')

{
 ?>

<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=product_photo&mod=add&p_id=<?php echo $p_id; ?>">
		<span>
			<img src="images/silder.jpeg" width="45px" height="45px" alt="Yeni slider" /><br />
			Yeni Şəkil
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
		<h3 style="width:87%;">Yuxarı şəkil</h3>
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
			$mod = @$_GET['mod'];
			if($mod == 'add'){ include 'product_photo/add.php';}
			elseif($mod == 'edit'){ include 'product_photo/edit.php';}
			elseif($mod == 'delete'){ include 'product_photo/delete.php';}
			else{ include 'product_photo/list.php';}
		?>
	</div>
</div>