<?
//ə
if ( !defined('_INCLUDED_') ) exit();
$query = "select max(l_id) as id from menu";
$query = $class->query($query);
$query = $class->fetch_array($query);
$id = $query['id']+1;

/*
if(@$_POST['type_sid'])
{
	$type_sid="1";	
	$href="?page=kataloq&l_id=".$id." ";
}
else
{
	$type_sid="2";	
	$href="?page=static&l_id=".$id."";
}
*/

$href="?page=static&l_id=".$id."";
if ($_POST['data_add'])
{
	//if post gets
	
	$_POST['data_menu'] = explode(',', $_POST['data_menu']); // menu tip
	$level = $_POST['data_menu'][0] + 1;
	$parent = $_POST['data_menu'][1];
	$_POST['data_page'] = (int) ($_POST['data_page']);
	//$_POST['data_cat1'] = (int) ($_POST['data_cat1']);
	//$_POST['data_cat2'] = (int) ($_POST['data_cat2']);
	$_POST['data_ordering'] = (int) ($_POST['data_ordering']);
	
	//if post langs data
	if ($_FILES['data_photo']['name'] != '')
	{
		$file = $class->ext($_FILES['data_photo']['name']);
		if ($file['type'] == 'Image') {
			$photo = 'pages-'.$id.$file['ext'];
		}
	}
	foreach ($langs as $key => $value)
	{
	
		//$_POST['data_text_'.$key] = $class->chars($_POST['data_text_'.$key]);
		
		$query = "
		insert into menu (
			`ln_id`, `l_id`, `parent`, `s_id`, `order`, `level`,
			`href`, `name`,  `info1`) 
		values
		(			'".$key."',	'$id',	'$parent','".$_POST['data_active']."',	'".$_POST['data_ordering']."',	'$level','$href',	'".$_POST['data_title_'.$key]."',	'".$_POST['data_text2_'.$key]."'
		)";
		//echo $query.'<br />';
		$query = $class->query($query);

	}
		if($query) { 
			@include('image_class.php');
			$image = new SimpleImage();
			$image->load($_FILES['data_photo']['tmp_name']);
			$image->cropImage(200, 160);
			$image->save(_upldir1_.'Image/'.$photo);
		}					//echo _upldir1_.'Image/'.$photo;
	$msg = ($query) ? '<div class="msg1">'.lang_data_added.'</div>' : '<div class="msg0">'.lang_data_notadded.'</div>';
	unset($query, $parent, $key, $value, $ordering, $level);
}?>
<!-- TinyMCE -->
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="../tiny_mce/tiny_mce_inc.js"></script>
<script type="text/javascript" src="../tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<!-- TinyMCE --><?PHP
//order check from ordering
$ordering = "select max(`order`) as id from menu";
$ordering = $class->query($ordering);
$ordering = $class->fetch_array($ordering);
$ordering = $ordering['id'] + 1;


$menuData = array
(
	'items' => array(),
	'parents' => array()
);
$query = "select l_id id, name, parent, level, s_id from menu where ln_id='$lang' order by `order`";
$query = $class->query($query);
while ($m = $class->fetch_array($query))
{
	$menuData['items'][$m['id']] = $m;
	$menuData['parents'][$m['parent']][] = $m['id'];
}
function buildMenu1($parentId, $menuData)
{
	$html = '';
	if (isset($menuData['parents'][$parentId]))
	{
		foreach ($menuData['parents'][$parentId] as $itemId)
		{
			$padding = ($menuData['items'][$itemId]['level'] * 20 - 16).'px';
			$html .= '<option value="'.$menuData['items'][$itemId]['level'].','.$menuData['items'][$itemId]['id'].'" style="padding-left:'.$padding.'">'.$menuData['items'][$itemId]['name'].'</option>';
			$html .= buildMenu1($itemId, $menuData);
		}
	}
	return $html;
}
?>

<form name="form1" action="" method="post" enctype="multipart/form-data">

<div class="menu"><?=constant('_'.$menu.'_').' &nbsp;/&nbsp; '.constant('_act_'.$actx.'_'.$menu.'_')?>
<div id="bottom_button">
    <table cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td align="right" valign="middle" height="30">
            <input type="submit" name="data_add" class="button1" value="<?=lang_add?>" />
            <input type="reset" name="data_reset" class="button1" value="<?=lang_clear?>" />        
        </td>
    </tr>
    </table>
</div>
</div>
<?
if ($msg) echo $msg;
?>
<div id="tabs">
<table width="100%" align="center" class="act_table">
    <tr>
        <td width="33%">
            <u><?=lang_menu?></u>:<br />
            <select name="data_menu" class="input_text">
                <option value="0,0">&nbsp;</option>
                <?=buildMenu1(0, $menuData)?>
            </select>
        </td>
        <td width="33%">
            <u><?=lang_ordering?></u>:<br />
            <input type="text" class="input_text" name="data_ordering" value="<?=$ordering?>" />
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <u><?=lang_active?></u>:<br />
            <?
            foreach ($active as $key => $value)
            {
                echo ($key == 1) ? 
                '<input type="radio" name="data_active" value="'.$key.'" checked /> '.$value.' &nbsp;' : 
                '<input type="radio" name="data_active" value="'.$key.'" /> '.$value.' &nbsp;';
            }
            unset($key, $value);
            ?>
        </td>
        	 <!--   		<td>Kataloq  <input type="checkbox" name="type_sid"></td>-->

    </tr>
</table><br />
<ul>
    <?php
    foreach($langs as $b=>$button) {
        ?><li><a href="#tabs-<?=$b?>"><?=$button?></a></li><?
    }
    unset($b, $button);
    ?>
</ul>
        <?php
        foreach($langs as $t=>$text) {
			?><div id="tabs-<?=$t?>">
                <table width="100%" align="center">
				<tr>
                        <td>
                            <u><?php echo $dil['Ad'][$lng]; ?></u>:<br />
                            <input type="text" name="data_title_<?=$t?>" class="input_text" />
                        </td>
                    </tr>	

					<tr>
                        <td valign="top" colspan="4">
                        <textarea name="data_text2_<?=$t?>"  style="width:100%" class="myBasicEditor" ></textarea>
                        </td>
                    </tr>
                </table>
            </div><?
		}
		?>
</div><br />
</form>