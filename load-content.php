

<?php

$url = $_REQUEST['pagename'];
echo $url;

if(file_exists($url.'.php'))
include($url.'.php');

else echo 'There is no such page!';

?>