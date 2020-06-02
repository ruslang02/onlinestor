<?php
session_start();
if($_GET['action'] == "logout") {
    session_unset();
    header("Location: /en/login");exit();
}
if($_GET['action'] == "guest") {
    $_SESSION['token'] = "Tester";
}
$url = 'http://onlinestor.net/server/action.php';
$data = array('token' => $_SESSION['token'], 'action' => 'loggedin');
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
if(file_get_contents($url, false, $context) != "1") header("Location: /desktop/english.php?action=logout");
?>
<!DOCTYPE html>
<html lang="en" data-theme="w10">
<head>
    <title>onlineStor</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/scripts/jquery-ui.min.css"/>
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Enter webtop">
    <link rel="shortcut icon" href="/images/logo.png">
    <link rel="stylesheet" id="system_theme" href="w10/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!--<meta name="viewport" content="width=device-width, initial-scale=1"> !-->
</head>
<body onload="Init()" id="body" style="transition: background .3s ease;height:100vh">
<script>var token = "<?php echo $_SESSION['token'];?>";var sID = "<?php echo $_SESSION['user'];?>"</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<span class="overflow"></span>
<span style="position: absolute;right: 0px;top: 0px;padding: 7px;width: 600px;color: white;font-size: 14px;line-height: 1.3em;"><div style="font-size:inherit;text-align: right;"><a href="#" onclick="Window('about')" style="color: white;font-size: 12pt;">About</a>. © OnlineStor 2015-17.<br>onlineStor</div> </span>
<script src="../scripts/globalite.js"></script>
<script>Globalite.setLang("en");</script>
<script id="script" src="/scripts/script.js"></script>
<script id="script" src="/scripts/app.js"></script>
<script src="https://vk.com/js/api/openapi.js" type="text/javascript"></script>
<?php
if(!empty($_SESSION['token'])) {
    $sID = $_SESSION['user'];
    echo '<script>setTimeout("newService(\"coreUI\")",1000);</script>';
} else {
    header("Location: /en/login");
    exit();
}
?>
</body>
</html>