<?php 
session_start();
if($_GET['action'] == "logout") {
	session_unset();
	header("Location: /login");exit();
}
if($_GET['action'] == "guest") {
	$_SESSION['token'] = "Tester";
}
if(empty($_SESSION['token'])) {
	header("Location: /desktop?action=logout");
	exit();
}
?>
<!DOCTYPE html>
<html lang="ru" data-theme="w10">
    <head>
        <title>onlineStor</title>
        <meta charset="utf-8">
		<link rel="stylesheet" href="/scripts/jquery-ui.min.css"/>
		<meta name="robots" content="noindex, nofollow">
		<meta name="description" content="Вход в вебтоп OnlineStor">
		<link rel="shortcut icon" href="/images/logo.png">
		<link rel="stylesheet" id="system_theme" href="css/main.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">

<!--<meta name="viewport" content="width=device-width, initial-scale=1"> !-->
	</head>
    <body onload="Init()" id="body" style="transition: background .3s ease;height:100vh">
		<script>var token = "<?php echo $_SESSION['token'];?>";var sID = "<?php echo $_SESSION['user'];?>"</script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
		<span class="overflow"></span>
		<span style="position: absolute;right: 0px;top: 0px;padding: 7px;width: 600px;color: white;font-size: 14px;line-height: 1.3em;"><div style="font-size:inherit;text-align: right;"><a href="#" onclick="Window('about')" style="color: white;font-size: 12pt;">О продукте</a>. © Гарифуллин Руслан 2015-16.<br>onlineStor</div> </span>
		<script src="../scripts/globalite.js"></script>
    <script>Globalite.setLang("ru");</script>
		<script id="script" src="/scripts/script.js"></script>
        <script id="script" src="/scripts/app.js"></script>
		<script src="https://vk.com/js/api/openapi.js" type="text/javascript"></script>
		<?php
			if(!empty($_SESSION['token'])) {
			    $sID = $_SESSION['user'];
				echo '<script>setTimeout("newService(\"coreUI\")",1000);</script>';
			} else {
			    header("Location: /login");
			    exit();
			}
		?>
    </body>
</html>