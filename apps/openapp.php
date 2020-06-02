<?php
//echo "<link rel='stylesheet' href='/desktop/w10/elements.css'><link rel='stylesheet' href='/desktop/w10/main.css'><script src='/scripts/jquery.js'></script>";
$text = file_get_contents($_GET['app'] . "/index.html");
$i = 0;
while($i = strpos($text,"translate",$i)) {
    $bword = strpos($text,">",$i) + 1;
    $aword = strpos($text,"</",$bword);
    $word = substr($bword,$aword);
    echo $word;
    $i = $aword;
}
?>