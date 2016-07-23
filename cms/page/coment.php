

<form action="" method="POST"  enctype="multipart/form-data">
<?PHP if($mod != 'add' and $mod != 'edit'){ ?>
<ul class="shortcut-buttons-set">

	


	

	<li>

		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/delete.png'); padding:0px; border:none;" name="delete" value="" /><br><br><?php echo $dil['Sil'][$lng]; ?>

	</li>

	

	<li>

		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/on.png'); padding:0px; border:none;" name="aktiv" value="" /><br><br><?php echo $dil['Aktiv'][$lng]; ?>

	</li>

	

	<li>

		<div class="button_input"><input type="submit" style="cursor: pointer; width:45px; height:45px; background: #F9F9F9 url('images/off.png'); padding:0px; border:none;" name="passiv" value="" /><br><br><?php echo $dil['Passiv'][$lng]; ?>

	</li>

	

</ul><!-- shortcut-buttons-set -->
<?PHP }else{} ?>
<div class="clear"></div> <!-- clear -->

<div class="content-box">

	<div class="content-box-header">

		<h3 style="width:87%;"><?php echo $dil['Yeni_email'][$lng]; ?></h3>

		<ul class="content-box-tabs">

			<li>

				<a href="#tab1" class="default-tab"><?php echo $dil['Cedvel'][$lng]; ?></a>

			</li>

		</ul>

		<div class="clear"></div>

	</div> <!-- content-box-header -->

	

	<div class="content-box-content">

		<div class="tab-content default-tab" id="tab1">

		<?PHP

			$mod = @$_GET['mod'];

			if($mod == 'add'){ include 'coment/add.php';}

			elseif($mod == 'edit'){ include 'coment/edit.php';}

			elseif($mod == 'delete'){ include 'coment/delete.php';}

			else{ include 'coment/list.php';}

		?>

	</div>

</div>