<?PHP
	if($send){

		$hidsay = $_POST['hidsay'];
		
		function getMax() {
			$q="select max(u_id) from menu";
			$res = mysql_query($q);
			return mysql_result($res, 0);
		}
		$getmax = getMax()+1;

		for($i=1; $i<= $hidsay; $i++ ){
			$name[$i]= $_POST['name'.$i];
			$text[$i]= $_POST['text'.$i];

			$insert = MYSQLI_QUERY($connection,"INSERT INTO menu (l_id, name, text, tip, date, u_id)values('".$i."', '".$name[$i]."', '".$text[$i]."', '1', NOW(), '".$getmax."')");
		}
		if($insert){
				echo "<br><br><center><b><font size='4' color='red'> " .$dil['Əlavə olundu'][$lng]."! </font></b></center></br><br>
				<script>
				function redi(){
				document.location='?menu=links'
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
					<td style="background-color: #FFFFFF;"><center><b><?php echo $dil['Yeni səhifə əlavə et'][$lng]; ?></b></center></td>
				</tr>
				<?PHP
					$sl = MYSQLI_QUERY($connection,"SELECT * FROM langs WHERE status='0'");
					while($nl = MYSQLI_FETCH_ARRAY($sl)){
					$say = mysqli_num_rows($sl);
				?>
				<tr>
					<td>
						<table cellpadding="0" cellspacing="0" border="0" align="center">
							<input type="hidden" name="hidsay" value="<?PHP echo $say; ?>" />
							<tr>
								<td><b>[ <?php echo $dil['Name'][$lng]; ?> <?PHP echo $nl['lang']; ?> ]</b><br><input name="name<?PHP echo $nl['id']; ?>" style="width:500px;"></td>
							</tr>
							<tr>
								<td><b>[ <?php echo $dil['Text'][$lng]; ?> <?PHP echo $nl['lang']; ?> ]</b><br><textarea name="text<?PHP echo $nl['id']; ?>" style="width:500px; height:200px;"></textarea></td>
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
					<td><input type="submit" name="send" value="<?php echo $dil['Əlavə et'][$lng]; ?>"></td>
				</tr>
			</table>
		</form>
	<?PHP
	}
	?>