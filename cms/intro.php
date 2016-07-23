<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		<title>WebCity</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="images/loqo.png">
		<!--  CSS start -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<!--  CSS end -->
	</head>
	<body class="intro_body">
		<form name="form" action="_loginn_.php" method="POST">
			<table cellpadding="0" cellspacing="0" border="0" width="300" align="center">
				<tr>
					<td align="center"><img src="images/loqo2.png" border="0" /></td>
				</tr>
				<tr>
					<td>
						<table align="center" cellpadding="0" cellspacing="0" border="0" width="100%">
							<tr>
								<td class="intro_text"><b><?php echo $dil['İstifadəçi adı'][$lng]; ?>:</b><br><input type="text" name="login" style="width:280px; height:25px;"></td>
							</tr>
							<tr>
								<td height="20" colspan="2"></td>
							</tr>
							<tr>
								<td  class="intro_text"><b><?php echo $dil['Şifrə'][$lng]; ?>:</b><br><input type="password" name="parol" style="width:280px; height:25px;"></td>
							</tr>
							<tr>
								<td height="20"></td>
							</tr>
							<tr>
								<td colspan="2" height="20" align="center"><input type="submit" name="send" value="Daxil olun"></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>