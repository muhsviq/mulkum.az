<?php 

	/* clearing all spaces */
	function trimspaces($str) {
		$str = trim($str);
		$str = str_replace(' ','',$str);
		$str = str_replace("\n",'',$str);
		$str = str_replace("\t",'',$str);
		$str = str_replace("",'',$str);
		$str = str_replace("\0",'',$str);
		$str = str_replace("\x0B",'',$str);
		return $str;
	}
	function cleanStringFromOtherChars($str) {
		$str = trimspaces($str);
		$str = str_replace('!','',$str);
		$str = str_replace('_','',$str);
		$str = str_replace("'",'',$str);
		$str = str_replace('"','',$str);
		$str = str_replace('\\','',$str);
		$str = str_replace('/','',$str);
		$str = str_replace('.','',$str);
		$str = str_replace(',','',$str);
		return $str;
	}	
	
	
	function SqlInjectFilter($str) {
		$str = str_replace(" ",'',$str);
		//$str = mysqli_real_escape_string($str);
		$str = str_replace("\n",'',$str);
		$str = str_replace("\t",'',$str);
		$str = str_replace("",'',$str);
		$str = str_replace("\0",'',$str);
		$str = str_replace("\x0B",'',$str);
		$str = str_replace("'",'',$str);
		$str = str_replace('"','',$str);
		$str = str_replace('\\','',$str);
		$str = str_replace('/','',$str);
		$str = str_ireplace (" and ","",$str); 
		$str = str_ireplace ("execute ","",$str); 
		$str = str_ireplace ("update ","",$str); 
		$str = str_ireplace ("count ","",$str); 
		$str = str_ireplace ("chr ","",$str); 
		$str = str_ireplace ("mid ","",$str); 
		$str = str_ireplace ("master ","",$str); 
		$str = str_ireplace ("truncate ","",$str); 
		$str = str_ireplace ("char ","",$str); 
		$str = str_ireplace ("declare ","",$str); 
		$str = str_replace ("select ","",$str); 
		$str = str_ireplace ("create ","",$str); 
		$str = str_ireplace ("delete ","",$str); 
		$str = str_ireplace ("insert ","",$str); 
		$str = str_ireplace ("union ","",$str); 
		$str = str_replace ("\"","",$str); 
		$str = str_replace ('"',"",$str);
		$str = str_replace ("$","",$str); 
		$str = str_ireplace ("or ","",$str); 
		$str = str_replace ("=","",$str); 
		$str = str_replace ("% 20 ","",$str);
		$str = addslashes($str);
		$str = htmlspecialchars($str);
		$str = trim($str);
		return $str;
	}
	function tags_filter($str) {
		$search = array ("'<script[^>]*?>.*?</script>'si",  // Strip out javascript
			 "'<[\/\!]*?[^<>]*?>'si",           // Strip out html tags
			 "'([\n])[\s]+'",                 // Strip out white space
			 "'&(quot #34);'i",                 // Replace html entities
			 "'&(amp #38);'i",
			 "'&(lt #60);'i",
			 "'&(gt #62);'i",
			 "'&(nbsp #160);'i",
			 "'&(iexcl #161);'i",
			 "'&(cent #162);'i",
			 "'&(pound #163);'i",
			 "'&(copy #169);'i",
			 "'&#(\d+);'e");                    // evaluate as php

		$replace = array ("",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "",
						  "");
		$text = preg_replace($search,$replace,$str);
		return $text;
	}
	function SqlInjectFilterMini($str) {
		//$str = str_replace(" ",'',$str);
		//$str = mysql_real_escape_string($str);
		$str = str_replace("\n",'',$str);
		$str = str_replace("\t",'',$str);
		$str = str_replace("",'',$str);
		$str = str_replace("\0",'',$str);
		$str = str_replace("\x0B",'',$str);
		$str = str_replace("'",'',$str);
		$str = str_replace('"','',$str);
		$str = str_replace('\\','',$str);
		$str = str_replace('/','',$str);
		$str = str_ireplace (" and ","",$str); 
		$str = str_ireplace ("execute","",$str); 
		$str = str_ireplace ("update","",$str); 
		$str = str_ireplace ("count","",$str); 
		$str = str_ireplace ("chr ","",$str); 
		$str = str_ireplace ("master ","",$str); 
		$str = str_ireplace ("truncate","",$str); 
		$str = str_ireplace ("char ","",$str); 
		$str = str_ireplace ("declare","",$str); 
		$str = str_ireplace ("select","",$str); 
		$str = str_ireplace ("create","",$str); 
		$str = str_ireplace ("delete","",$str); 
		$str = str_ireplace ("insert","",$str); 
		$str = str_ireplace ("union","",$str); 
		$str = str_replace ("\"","",$str); 
		$str = str_replace ('"',"",$str); 
		//$str = str_replace (" ","",$str); 
		$str = str_replace ("$","",$str); 
		$str = str_ireplace ("or ","",$str); 
		$str = str_replace ("=","",$str); 
		$str = str_replace ("% 20 ","",$str);
		$str = addslashes($str);
		$str = htmlspecialchars($str);
		$str = trim($str);

		return $str;
	}

	function SqlInjectFilterText($str) {

		//$str = str_replace(" ",'',$str);
		///$str = mysql_real_escape_string($str);
		$str = str_replace("\n",'',$str);
		$str = str_replace("\t",'',$str);
		$str = str_replace("",'',$str);
		$str = str_replace("\0",'',$str);
		$str = str_replace("\x0B",'',$str);
		$str = str_replace ("% 20 ","",$str);
		$str = addslashes($str);
		$str = htmlspecialchars($str);
		$str = trim($str);
		
		return $str;
	}
?>