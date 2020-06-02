<?php
//get the q parameter from URL
$xml=$_GET["q"];
$num=$_GET['numFeeds'] - 1;

$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
$channel_title = $channel->getElementsByTagName('title')
->item(0)->childNodes->item(0)->nodeValue;
$channel_link = $channel->getElementsByTagName('link')
->item(0)->childNodes->item(0)->nodeValue;
$channel_desc = $channel->getElementsByTagName('description')
->item(0)->childNodes->item(0)->nodeValue;

//output elements from "<channel>"
echo("<p class='channel'><a target='_blank' href=\"" . $channel_link
  . "\">" . $channel_title . "</a>");
echo("<br>");
echo($channel_desc . "</p>");

//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('item');
for ($i=0; $i<=$num; $i++) {
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('link')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_desc=$x->item($i)->getElementsByTagName('description')
  ->item(0)->childNodes->item(0)->nodeValue;
	$dom = new DOMDocument;

$dom->loadHTML($item_desc);

$elements = $dom->getElementsByTagName('br');
$length = $elements->length;

while ($length--) {
   $elem = $elements->item($length);                
   $prevSibling = $elem->previousSibling;

if ($prevSibling->nodeType == 1 AND $prevSibling->tagName == 'br') {
       $parent = $elem->parentNode;
       $parent->removeChild($elem);
       $parent->removeChild($prevSibling);
       $length--;
   }

}
	$item_desc = $dom->saveHTML();
  echo ("<p class='news'><a target='_blank' href=\"" . $item_link  . "\">" . $item_title . "</a></p>");
}


?> 