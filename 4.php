<?php
function getfiles($dir)
{
    $files = scandir($dir);
    echo "<pre>";
    print_r($files);
    echo "</pre>";
}
getfiles ('C:\php');