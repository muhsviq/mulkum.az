<?PHP 
		include 'admin_conf.php';
		
		$daxil	 = $_POST['send'];
		
		if($daxil){
			
			
			include ("php_functions.php"); // php funksiyalari include etdik sql attaclarin qabagini almaq uchun
			
			$log	   = $_POST['login'];
			$log       = htmlspecialchars($log); // html taglari disable edir yani txt formata chevirir.
			$log       = trim($log); // itifadechi her hansi bir problem qoyduqda probelleri silir
			$log       = stripslashes($log); // html taglari disable edir yani txt formata chevirir.
			$log       = trimspaces($log);
			$log       = cleanStringFromOtherChars($log);
			$log       = SqlInjectFilter($log);
			$log       = tags_filter($log);
			$log       = SqlInjectFilterMini($log);
			$log       = SqlInjectFilterText($log); // temiz neticeni bazayala sorguya gonderir



			$pass		= $_POST['parol'];
			$pass		= stripslashes($pass);
			$pass		= trim($pass);
			$pass		= htmlspecialchars($pass);
			$pass		= trimspaces($pass);
			$pass		= cleanStringFromOtherChars($pass);
			$pass		= SqlInjectFilter($pass);
			$pass       = tags_filter($pass);
			$pass       = SqlInjectFilterMini($pass);
			$pass       = SqlInjectFilterText($pass); // temiz neticeni bazayala sorguya gonderir



			$ip = $_SERVER['REMOTE_ADDR'];
			// Ipnin yoxlanmasi start
			//$result = mysqli_query ($connection,"DELETE FROM ip_error WHERE UNIX_TIMESTAMP() - UNIX_TIMESTAMP(datime) > 900");
			$result = MYSQLI_QUERY($connection,"SELECT say FROM ip_error WHERE ip='$ip'");
			$myrow = MYSQLI_FETCH_ARRAY($result);
			if ($myrow['say'] >= 3) {
				Header ('Location:error.php?error=stop');
				exit();
			}

			else
			{

				$deyer		= "11215!@#$%7865****!@!%$$###";
				$pass		= md5(md5(md5($pass)));
				$pass		= strrev($pass);
				$pas		= $pass.$deyer;
				
				$result = MYSQLI_QUERY($connection,"SELECT * FROM admin WHERE l_adi='$log' AND ppp='$pas'"); 
				$myrow = MYSQLI_FETCH_ARRAY($result);
					if (empty($myrow['con']))
					{
						$select = mysqli_query ($connection,"SELECT ip FROM  ip_error WHERE ip='$ip'");
						$tmp = MYSQLI_FETCH_ARRAY ($select);
						if ($ip == $tmp['ip'])
						{
							mysqli_query ($connection,"UPDATE ip_error SET say=say+1, datime =NOW() WHERE ip='$ip'");
							Header ('Location:error.php?error=dontu');
						}

						else {
							mysqli_query ($connection,"INSERT INTO  ip_error (ip,datime,say) VALUES ('$ip',NOW(),'1')");
							Header ('Location:error.php?error=dontu');
							exit();
						}
				   }
					else 
					{
						// success
						$_SESSION['_login_'] = $myrow['l_adi']; 
						$_SESSION['_password_'] = $myrow['ppp'];
						$_SESSION['_id_'] = $myrow['con'];
						print "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=./\">";
						exit();
					}
			}

		}

		else
		{
			Header ('Location:error.php?error=empty');
			exit();
		}
		
		@$mes = $_GET["loginners"];
		if($mes == 'notuser')
		{
			$result53 = MYSQLI_QUERY($connection,"SELECT say FROM ip_error WHERE ip='$ip'");
			$myrow53   = MYSQLI_FETCH_ARRAY($result53);
			$say = 4 - $myrow53["say"];
			echo $error =  "<div style='color:#CA1F2E; float: left; font-size:20px; text-align: center; line-height: 20px; font-family:Tahoma; font-weight: bold;' align='center'>Login parol yanlishdir.Sizin ".$say." istifade shansiniz qaldi</div>";
		}
		if($mes == 'stop')
		{
			echo $error =  "<div  style='color:#CA1F2E; float: left; font-size:20px; text-align: center; line-height: 20px; font-family: Tahoma; font-weight: bold;' align='center'>siz 15 deqiqleik sietemden kenarlahsdirildiniz</div>";
		}
		if($mes == 'empty')
		{
			echo $error =  "<div  style='color:#CA1F2E; float: left; font-size:20px; text-align: center; line-height: 20px; font-family: Tahoma; font-weight: bold;' align='center'>Boshdur</div>";
		}

?>