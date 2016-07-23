<?PHP include 'admin_conf.php' ?>
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
						<table align="center" cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td height="200">
									<?PHP
										
										$ip = $_SERVER['REMOTE_ADDR'];

										$mesaj = $_GET['error'];

										if($mesaj=='stop'){
											?><div style="color:#CA1F2E; float: left; font-size:20px; text-align: center; line-height: 20px; font-family:Tahoma; font-weight: bold;" align="center">Siz 15 dəqiqəlik sistemdən uzaqlaşdırıldınız <a href="./" class="links">Geri qayıt</a></div>
										<?PHP
										}
										if($mesaj=='empty'){
											echo 'Boshdur';
										}
										if($mesaj=='dontu'){
											$result53 = MYSQLI_QUERY($connection,"SELECT say FROM ip_error WHERE ip='$ip'");
											$myrow53   = MYSQLI_FETCH_ARRAY($result53);
											$say = 4 - $myrow53["say"];
											?>
											<div style="color:#CA1F2E; float: left; font-size:20px; text-align: center; line-height: 20px; font-family:Tahoma; font-weight: bold;" align="center">İstifadəçi adınız və ya şifrə yalnışdır. </br></br> 
											Sizin <?PHP echo $say; ?> istifadə şansınız qaldı  
											</br></br><a href="./" class="links">Geri qayıt</a></div>
										<?PHP
										}
									?>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>