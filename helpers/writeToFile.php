<?php

error_reporting(-1);
ini_set('display_errors', 'On');
$myfile = fopen("../" . $_GET["file"], "w") or die("Unable to open file!");

echo $_GET["file"] . "<br>";
echo urldecode($_GET["content"]);

fwrite($myfile, urldecode($_GET["content"]));
fclose($myfile);
?> 