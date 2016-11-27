<html>
<head></head>
<body>
<form method="get" action="9.php">
    <textarea name="text" id="text"></textarea>
    <input type="submit" value="send"><br>

</form>
<?php
function reverseString($text){
    $reverseStr = strrev($text);
    return $reverseStr;
}
if (isset($_GET['text'])) {
    $result = reverseString($_GET['text']);
    echo $result;
}