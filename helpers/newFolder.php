<?php
$folderName = htmlspecialchars($_GET["name"]);

if($folderName) {
    mkdir("../pages/" . $folderName . "/");
}
else {
    echo "No name given.";
}
?>