<?php
	
if($theme == "editor" || $theme == "custom"){
 if($frontend=='false' || ($frontend=='true'&& $webuser))
{ $tinymceInit .= ($use_browser==1 ? "  
file_browser_callback: \"myFileBrowser\",\n":"");	
	
$tinyCallback = <<<TINY_CALLBACK
 function myFileBrowser(field_name, url, type, win) {
 var ajaxfilemanagerurl = "{$base_url}assets/plugins/ajaxfilemanager/ajaxfilemanager.php";
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
var windowManager = tinyMCE.activeEditor.windowManager.open({
         file : ajaxfilemanagerurl,
         width : screen.width * 0.7,
         height : screen.height * 0.7,
         resizable : "yes",
        inline : "yes",
        close_previous : "no"
}, {
    window : win,
    input : field_name
});
 if (window.focus) {windowManager.focus()}
return false;
}
TINY_CALLBACK;	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>