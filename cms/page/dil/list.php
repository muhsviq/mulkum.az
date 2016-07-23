<table>
<!-- HEAD -->
	<thead>
		<tr>
		   <th>
		   <?php echo $dil['Id'][$lng]; ?>
		   </th>
		   <th><?php echo $dil['Dillər'][$lng]; ?></th>
		   <th><?php echo $dil['Idarə'][$lng]; ?></th>
		</tr>
	</thead>
 <!-- BODY -->
	<tbody>
	<?PHP
	$s_lng = MYSQLI_QUERY($connection,"SELECT id, lang, status FROM langs order by id ASC");
	while($n_lng = MYSQLI_FETCH_ARRAY($s_lng)){
	?>
	<tr>
		<th><?PHP echo $n_lng['id'];?></th>
		<td><?PHP echo $n_lng['lang'];?> &nbsp; <?PHP if($n_lng['status']==1){?>(<?php echo $dil['Passiv'][$lng]; ?>)<?PHP } ?></td>
		<td>
			<!-- Icons -->
			 <a href="?menu=dil&mod=edit&id=<?PHP echo $n_lng['id'];?>" title="<?php echo $dil['Düzəliş et'][$lng]; ?>">
				<img src="images/pencil.png" alt="Düzəliş et" />
			 </a>
			 &nbsp
			 <a href="?menu=dil&mod=passiv&id=<?PHP echo $n_lng['id'];?>" title="<?php echo $dil['Passiv'][$lng]; ?>">
				<img src="images/off.png" width="22" alt="Sil" />
			 </a>
			 &nbsp
			 <a href="?menu=dil&mod=aktiv&id=<?PHP echo $n_lng['id'];?>" title="<?php echo $dil['Aktiv'][$lng]; ?>">
				<img src="images/on.png" width="22" alt="Sil" />
			 </a>
		</td>
	</tr>
	<?PHP
	}
?>
	</tbody>
</table>