	<?PHP
	require_once("./include/membersite_config.php");

	if(!$fgmembersite->CheckLogin())
	{
		$fgmembersite->RedirectToURL("login.php");
		exit;
	}

	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		

		<link rel="STYLESHEET" type="text/css" href="style/statictoolbar.css">
	</head>
	<body>
		<a href="#">
                    <img src="/images/flashtrackerlogo.png" alt="Flash Tracker Logo" title="Flash Tracker" />
                </a>
		<div class="nav">
			<ul>
				<li><a href='index.php'>Home</a></li>
				<li><a href='employeeschedule.html'>Calendar</a></li>
				<li><a href='https://docs.google.com/forms/d/1Yd5T3oQufl7ajiVbu8a4SyIAJocdBVXA1-7iRBdu_Y0/viewform' target="_blank" >Add an event</a><li>
				<li><a href='access-controlled.php'>A sample 'members-only' page</a></li>
				<li><a href='change-pwd.php'>Change password</a></li>
				<li><a href='logout.php'>Logout</a></li>
			</ul>
		</div>
			<div id='fg_membersite_content'>
			
				Welcome back <?= $fgmembersite->UserFullName(); ?>!
				

				<br><br><br>
			</div>
		</body>
		</html>
