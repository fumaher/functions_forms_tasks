<?php
function get_files($dir, $word)
{
    $files = scandir($dir);
    echo "<pre>";
    print_r($files);
    echo "</pre>";
    foreach ($files as $value) {
        if (strpos($value, $word) == "false") {
            echo $value . "<br>";
        }
    }
}
get_files ('C:\php\functions_forms_tasks','1.php');