<form action="" method="POST" enctype="multipart/form-data">

<?PHP 
if($mod != 'add' and $mod != 'edit')

{
 ?>
<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=blog&catid=<?PHP echo $catid;?>&mod=add">
		<span>
			<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni blok" /><br />
			Yeni blok
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
		<h3 style="width:87%;">Bloklar</h3>
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
			if($mod == 'add'){ include 'blog/add.php';}
			elseif($mod == 'edit'){ include 'blog/edit.php';}
			elseif($mod == 'delete'){ include 'blog/delete.php';}
			else{ include 'blog/list.php';}
		?>
	</div>
</div>