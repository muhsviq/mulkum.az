
<form action="" method="POST" enctype="multipart/form-data">

<?PHP 
if($mod != 'add' and $mod != 'edit')

{
 ?>

<ul class="shortcut-buttons-set">
	
	<li>
		<a class="shortcut-button" href="?menu=bilet&mod=add">
		<span>
			<img src="images/paper_content_pencil_48.png" width="45px" height="45px" alt="Yeni səhifə" /><br />
			Yeni aviabilet
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
				if($mod == 'add'){ include 'bilet/add.php';}
				elseif($mod == 'edit'){ include 'bilet/edit.php';}
				elseif($mod == 'delete'){ include 'bilet/delete.php';}
				elseif($mod == 'editphotos'){ include 'bilet/edit_photos.php';}
				elseif($mod == 'addphotos'){ include 'bilet/add_photos.php';}
				elseif($mod == 'videolist'){ include 'bilet/video_list.php';}
				elseif($mod == 'videoadd'){ include 'bilet/video_add.php';}
				elseif($mod == 'videoedit'){ include 'bilet/video_edit.php';}
				elseif($mod == 'videodel'){ include 'bilet/video_delete.php';}
				else{ include 'bilet/list.php';}
			?>
		<div>
			
	</div>
</div>