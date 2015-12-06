<?PHP
require_once("./include/membersite_config.php");

if($fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login-home.php");
    exit;
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>FlashTracker.com | Home</title>
    <link rel="stylesheet" type="text/css" href="/style/style.css" />
</head>

<body>
    <div class="header">
        <div class="headerContent">
            <a href="#">
                <img src="../images/flashtrackerlogo.png" alt="Flash Tracker Logo" title="Flash Tracker" />
            </a>
            <div class="nav">
                <ul>
                    <li><a href='access-controlled.php'>Home</a></li>
                    <li><a href='register.php'>Register</a></li>
                    <li><a href='confirmreg.php'>Confirm Register</a></li>
                    <li><a href='login.php'>Login</a></li>

                </ul>
            </div>
        </div>
    </div>

    <div class="headerBreak"></div>
</div>
</body>
</html>
