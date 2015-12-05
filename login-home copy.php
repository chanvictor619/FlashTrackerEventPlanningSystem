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
				<li><a href='access-controlled.php'>Home</a></li>
				<li><a href='register.php'>Register</a></li>
				<li><a href='confirmreg.php'>Confirm Register</a></li>
				<li><a href='login.php'>Login</a></li>
				<li><a href='employeeschedule.html'>Employee Schedule</a></li>

			</ul>
		</div>
			<div id='fg_membersite_content'>
			
				Welcome back <?= $fgmembersite->UserFullName(); ?>!
				

				<p><a href='change-pwd.php'>Change password</a></p>
<iframe src="https://calendar.google.com/calendar/embed?src=cs532group%40gmail.com&ctz=America/Los_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>
				<br><br><br>
				<p><a href='logout.php'>Logout</a></p>
			</div>
		</body>
		</html>
