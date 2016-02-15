<?php
/* User, Looser, Coder and Proger
1. Ввести [в цикле] с клавиатуры несколько строк (ключей).
Строки(ключи) могут быть такими: "user", "looser", "coder", "proger".
Ввод окончен, когда строка не совпадает ни с одной из выше указанных.

2. Для каждой введенной строки нужно:
2.1. Создать соответствующий объект [см Person.java], например, для строки "user" нужно создать объект класса User.
2.2. Передать этот объект в метод doWork.

3. Написать реализацию метода doWork, который:
3.1. Вызывает метод live() у переданного обекта, если этот объект (person) имеет тип User.
3.2. Вызывает метод doNothing(), если person имеет тип Looser.
3.3. Вызывает метод coding(), если person имеет тип Coder.
3.4. Вызывает метод enjoy(), если person имеет тип Proger.
*/
//class Dean{}
/*
 * don't have a shit have it's gonna be realized in php
 */
?>
    <form action="index.php" method="post">
        <label>Lb<input type="text" name="list" id="text"></label

        <p>Input: "user", "looser", "coder", "proger".</p>
        <input type="submit" value="check">
    </form>
<?
$first = $_POST['list'];
//echo $first;
$obj = new $first();
var_dump($obj);
?>