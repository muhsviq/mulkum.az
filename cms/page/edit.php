<?PHP
	if($send){
		
		global $site_dir;
		$_SESSION['tip']=$tip;

		$query = "UPDATE menu set ";

		$query .= " tip='$tip' where u_id='$id'";
		MYSQL_QUERY($query);

		 $hidsay = $_POST['hidsay'];

		for($i=1; $i<= $hidsay; $i++ ){
			
			$name[$i]= $_POST['name'.$i];
			$text[$i]= $_POST['text'.$i];
			$sub	= $_POST['sub'];

			
			$update = "UPDATE menu SET sub_id = '".$sub."', name = '".$name[$i]."', text = '".$text[$i]."' WHERE u_id='".$id."' AND l_id='".$i."'";
			mysql_query($update);
		}
		if($update){
			echo "<br><br><center><b><font size='4' color='red'> " $dil['Redakte olundu'][$lng]" </font></b></center></br><br>
			<script>
			function redi(){
			document.location='?menu=pages'
			}
			setTimeout(\"redi()\", 3000);
			</script>"; 
		}
		
	}
	else {
		?>
		<script type="text/javascript" src="js/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php"></script>
		<script type="text/javascript" src="js/tiny_mce/tiny_mce.js"></script>
		<script type="text/javascript">
		tinyMCE.init({
				// General options
				mode : "textareas",
				theme : "advanced",
				language:"ru",
				file_browser_callback: "ajaxfilemanager",
				plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

				// Theme options(pered znachkom "0"- esli xotite ubrat)
				theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
				theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,|,preview,|,forecolor,backcolor",
				theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
				//theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
				theme_advanced_toolbar_location : "top",
				theme_advanced_toolbar_align : "center",
				theme_advanced_statusbar_location : "bottom",
				theme_advanced_resizing : true,

				// Skin options
				skin : "o2k7",
				skin_variant : "white",

				// Example content CSS (should be your site CSS)
				content_css : "js/content.css",

				// Drop lists for link/image/media/template dialogs
				template_external_list_url : "js/template_list.js",
				external_link_list_url : "js/link_list.js",
				external_image_list_url : "js/image_list.js",
				media_external_list_url : "js/media_list.js",

		});
		function ajaxfilemanager(field_name, url, type, win) {
			var ajaxfilemanagerurl = "js/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php";
			switch (type) {
			case "image":
			break;
			case "media":
			break;
			case "flash":
			break;
			case "file":
			break;
			default:
			return false;
			}
			tinyMCE.activeEditor.windowManager.open({
			url: "js/tiny_mce/plugins/ajaxfilemanager/ajaxfilemanager.php",
			width: 782,
			height: 440,
			inline : "yes",
			close_previous : "no"
			},{
			window : win,
			input : field_name
		});
		}
		</script>
		<form name="form1" method="post" action="">
			<table cellpadding="0" cellspacing="0" border="0" align="center">
				<tr>
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['redaktə et'][$lng]; ?></b></center></td>
				</tr>
				<tr>
					<td>
					<?php echo $dil['menu15'][$lng]; ?><br>
					<?PHP
						$s_redakte1 = MYSQLI_QUERY($connection,"SELECT * FROM menu WHERE u_id='".$id."' AND l_id='1'");
						$n_redakte1 = MYSQLI_FETCH_ARRAY($s_redakte1);
						$sub_halhazira = $n_redakte1['sub_id'];
						$sub_halhazira1 ='100';
					?>
					<select name="sub">
					<option value=""><?php echo $dil['Seçin'][$lng]; ?></option>
					<option value="0"  <?PHP if($sub_halhazira== '0'){ ?>selected="selected"<?PHP } ?>> <?php echo $dil['Əsas menu'][$lng]; ?></option>
					<?PHP
						function sub_link($sub, $margin, $sub_halhazira)
						{
							$s_sub = MYSQLI_QUERY($connection,"SELECT * FROM menu WHERE sub_id = '".$sub."' AND l_id='1'  AND tip='$tip' ORDER BY ordering ASC");
							if(mysqli_num_rows($s_sub) != 0)
							{
								while($n_sub = MYSQL_FETCH_ASSOC($s_sub))
								{
									if($n_sub['status'] == 0){
								?>
									<option value="<?PHP echo $n_sub['u_id'];?>" style="padding-left:<?PHP echo $margin?>px;" <?PHP if($sub_halhazira== $n_sub['u_id']){ ?>selected="selected"<?PHP } ?>> <?PHP echo $n_sub['name'];?></option>
								<?PHP
									}
								sub_link($n_sub['u_id'], $margin+10, $sub_halhazira);
								}
							}
						}
						sub_link(0, 0, $sub_halhazira);
					?>
					</select>	
					<br><br>
					</td>
				</tr>
				<tr>
					<td height="10" style="background-color: #FFFFFF;"></td>
				</tr>
				<?PHP
					$id = $_GET['id'];
					$s_lang = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status = '0' ORDER BY id ASC");
					while($n_lang = MYSQLI_FETCH_ARRAY($s_lang)){
					$say = mysqli_num_rows($s_lang);
					
					$s_redakte = MYSQLI_QUERY($connection,"SELECT * FROM menu WHERE u_id='".$id."' AND l_id='".$n_lang['id']."'");
					$n_redakte = MYSQLI_FETCH_ARRAY($s_redakte);
					?>
					<tr>
						<td>
							<table cellpadding="0" cellspacing="0" border="0" align="center">
								<input type="hidden" name="hidsay" value="<?PHP echo $say; ?>" />
								<tr>
									<td><b>[ <?php echo $dil['Name'][$lng]; ?> <?PHP echo $n_lang['lang']; ?> ]</b><br><input name="name<?PHP echo $n_lang['id']; ?>" style="width:500px;" value="<?PHP echo $n_redakte['name'];?>"></td>
								</tr>
								<tr>
									<td><b>[  <?PHP echo $n_lang['Text']; ?>]</b><br><textarea name="text<?PHP echo $n_lang['id']; ?>" style="width:500px; height:200px;"><?PHP echo $n_redakte['text'];?></textarea></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td height="20" style="background-color: #FFFFFF;"></td>
					</tr>
					<?PHP
						}
					?>
				<tr>
					<td><input type="submit" name="send" value="<?PHP echo $n_redakte['Redaktə et2'];?>"></td>
				</tr>
			</table>
		</form>
	<?PHP
	}
	?>