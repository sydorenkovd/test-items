<?php
//strrchr() возвращает участок строки, следующий
// за указанным параметром (точкой в нашем случае),
// после чего substr() отрезает первый символ - точку.
// $img = 'file.jpg';
// function getExtension($filename) {
//     return substr(strrchr($filename, '.'), 1);
// }
// echo getExtension($img);
//работает быстрее всех




/////////////////////////////////////////////////////////////////////
<?
/*
 * convert datetime to UNIX timestamp
 */
$phpdate = strtotime($job->create_date); ?>
<?
/*
 * разница между настоящим временем и временем размещения вакансии
 */
$pr = time() - $phpdate;
/*
 * Отображает "сегодня" и количество пройденного времени с момента размещения вакансии в течении дня
 */
if (date('d', $phpdate) == date('d', time())) {
    $yes = "today ";
    if($pr < 7200) {
        $timeAgo = round(($pr - 3600)/60) . ' minutes ago ';
    }
    if($pr > 7200 && $pr < 89000){
        $timeAgo = round(($pr - 3600)/3600) . ' hours ago ';
    }
}
/*
 * Отображает "вчера", если просматриваем вакансии за вчера, первого числа месяца
 */
if (date('d', $phpdate) == date('d', time()) - 1) {
    $yes = "yesterday ";
}
$mounth31 = ['01', '03', '05', '07', '09', '11', '12'];
$i = -1;
while ($i < count($mounth31) - 1) {
    $i++;
    if ((date('d', time()) == '01' && date('m', time()) == $mounth31[$i]) && date('d', $phpdate) == '30') {
        $yes = "yesterday ";
    }
}
$mounth30 = ['02', '04', '06', '08', '10'];
$i = -1;
while ($i < count($mounth30) - 1) {
    $i++;
    if ((date('d', time()) == '01' && date('m', time()) == $mounth30[$i]) && date('d', $phpdate) == '31') {
        $yes = "yesterday ";
    }
}
/*
 * Для февраля
 */
if ((date('d', time()) == '01' && date('m', time()) == '03') && date('d', $phpdate) == '28') {
    $yes = "yesterday ";
}
/*
 * Количество прошедших дней со дня размещения вакансии
 */
if($pr > 176400 && $pr < 2600000){
    $timeAgo = round(($pr - 3600)/86400) . ' days ago ';
}
?>
<?
/*
 * Отображение форматированой даты
 */
$formatedDate = $yes . $timeAgo . date("F j, Y, g:i a:", $phpdate);
$timeAgo = '';
$yes = '';
?>