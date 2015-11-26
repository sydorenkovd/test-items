<?php
//ivert array without standart function array_reverse()
    $arr = ['h', 'e', 'l','l','o'];
$reversed = [];
while (count($arr)) $reversed[] = array_pop($arr);
//otherwise
//for($i = count($arr) - 1; $i >=0; $i--) $reversed[] = $arr[$i];
//for ($i=0; $i<count($arr); $i++) array_unshift($reversed, $arr[$i]);
//foreach ($arr as $v) array_unshift($reversed, $v);
for($i = 0; $i <= count($reversed); $i++) echo $reversed[$i];
//-----------------
//invert string without strrev()
$str = "Turn this string";
$rev;
for ($i = strlen($str); $i >= 0; $i--) $rev[] = $str[$i];
$revstr = implode('', $rev);
echo "<br>" . $revstr;
//-----------------
//factorial function
function fac($x){
    if ($x === 0)
return 1;
    else
        return $x * fac($x - 1);
}
echo "<br> " . fac(9);
//-----------------
//fibonacci function
echo "<br>";
function fib($x){
    if($x < 3 )
        return 1;
    else
        return fib($x - 1) + fib($x - 2);
}
for ($x = 1; $x <= 16; $x++)
    echo (fib($x) . ", ");

//-----------------
?>
<form action="php-book.php" method="post">
Name: <input type="text" name="name"><br>
Message: <textarea rows="2" cols="20" name="message"></textarea>

    <input type="submit" value="Upload">
</form>
<?php
$all = "Name " . $_POST['name'] . "\r\n" . "Message " . $_POST['message'] . "\r\n";
$files = "result.txt";
$handle = '';
if(!$handle = fopen($files, 'a')){
    echo "Error open";
    exit;
}
if(fwrite($handle, $all) === false){
    echo "Error write";
}
    else{
        echo "Success written";
    }
?>