<div class="clear"></div> <!-- clear -->
<div class="content-box">
	<div class="content-box-header">
		<h3 style="width:70%;"><?php echo $dil['Admin  /  Sayt'][$lng]; ?> </h3>				<?PHP 		if($mod != 'add' and $mod != 'edit')		{		 ?>
		<ul class="content-box-tabs">
			<li>
				<a href="#tab1" class="default-tab"><?php echo $dil['Dəyiş'][$lng]; ?></a>
			</li>
			<li>
				<a href="#tab2" class="default-tab"><?php echo $dil['On/Off'][$lng]; ?></a>
			</li>
			<li>
				<a href="#tab3" class="default-tab"><?php echo $dil['Title'][$lng]; ?></a>
			</li>
		</ul>				<?PHP 		}		else{}		 ?>
		<div class="clear"></div>
	</div> <!-- content-box-header -->
	
	<div class="content-box-content">
		<div class="tab-content default-tab" id="tab1">
		<form action="" method="POST">
		<?php echo $dil['edit'][$lng]; ?>
		</form>
	</div>
	<div class="tab-content" id="tab2">
		<?php echo $dil['On/Off'][$lng]; ?>
	</div>
	<div class="tab-content" id="tab3">
		<?php echo $dil['Title'][$lng]; ?>
	</div>
</div>