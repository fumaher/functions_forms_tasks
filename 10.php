<html>
<head></head>
<body>
<form method="get" action="10.php">
    <textarea name="text" id="text"></textarea>
    <input type="submit" value="send"><br>
</form>

<?php
function countUniqueWords($text){
    $text = mb_strtolower($text);
    $newArr = explode(' ',$text);
    $uniqueWords = array_unique($newArr);
    $result = count($uniqueWords);
    return $result;
}
if (isset($_GET['text'])) {
    echo countUniqueWords($_GET['text']);
}