<?php
function getCommonWords($a, $b)
{
    $arr1 = array();
    $arr2 = array();
    $arr1 = explode(" ", $a);
    $arr2 = explode(" ", $b);
    foreach ($arr1 as $key1=> $value1)
    {
        foreach ($arr2 as $key2 =>$value2)
        {
            if ($value1 == $value2)
            {
                echo $value1."<br>";
            }
        }
    }
}
?>
<html>
<head></head>
<body><form action = "1.php" method = "post">
    <textarea name = "text1"></textarea><br>
    <textarea name = "text2"></textarea><br>
    <input type = "submit" name = 'submit' value = "Send"></form>
<?php
$_POST = array();
parse_str(file_get_contents('php://input'), $_POST);
getCommonWords($_POST["text1"], $_POST["text2"]);
?>
</body>
</html>