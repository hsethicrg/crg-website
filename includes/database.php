<?php  

$link = mysql_connect('localhost', 'smassqz8_crgv2us', 'crgv2pass');
if (!$link) {
        die('Could not connect: ' . mysql_error());
}

@mysql_select_db('smassqz8_crgv2', $link) or die( "Unable to select database");

return $link;

?>