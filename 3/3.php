<?php
function word_length($a)
{
    $_POST = array();
    parse_str(file_get_contents('php://input'), $_POST);
    $max_len = $a;
    $file = file_get_contents("task3.txt");
    $arr = array();
    $arr = explode(" ", $file);
    foreach ($arr as $key=> $value)
    {
        if ((iconv_strlen($value))> $max_len)
        {
            unset($arr[$key]);
        }
    }
    $rewrite =implode(" ", $arr);
    file_put_contents("task3.txt", $rewrite);
}
?>
    <html>
    <head>
        <meta charset="utf-8">
    </head>
    <form action="3.php" method = "post">
        <lable for "limitNumber">количество символов в слове</label>
        <input type = "number" id = "limitNumber" name = "limNum"/><br>
        <input  type = "submit" value = "send" name = 'submit'/><br>
    </form>
    </html>
<?php
$_POST = array();
parse_str(file_get_contents('php://input'), $_POST);
if ($_POST["submit"])
{
    word_length($_POST["limNum"]);
}