<?php
function max_len_3w($a)
{
$arr = array();
$arr = explode (" ", $a);
$arr_len =  array();
foreach ($arr as $value)
    {
    $len =  strlen($value);
    $arr_len[ strlen($value)] = $value;
    }
krsort($arr_len);
if ((count($arr_len))>3)
    {
    $new_arr = array_slice($arr_len, 0, 3);
    foreach ($new_arr as $value)
        {
        echo $value . " ";
        }
    }
else
    {
    foreach ($arr_len as $v)
    {
    echo $v . " ";
    }
    }
}
?>
<html>
<body>
<form action = "2.php" method = "post">
    <textarea name = "text1"></textarea>
    <br>
    <input type = "submit" name = 'submit' value = "Send">
</form>
<?php
$_POST = array();
parse_str(file_get_contents('php://input'), $_POST);
max_len_3w($_POST["text1"]);