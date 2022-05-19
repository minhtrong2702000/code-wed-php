<?php
session_start();
if(!isset($_SESSION['NguyenVanMinhTrong_2118110394']))
{
$count = file_get_contents('test.txt');
file_put_contents('test.txt', ++$count);
$_SESSION['NguyenVanMinhTrong_2118110394'] = true;
}
?>