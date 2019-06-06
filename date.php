<?php
// echo date('M|d|Y'); //May|22|2019
echo date('h').'<br>'; //hour
echo date('i').'<br>'; //minutes
echo date('S').'<br>';
echo date('A').'<br>';
// echo date('h:i:sA').'<br>';

// set time zone
// echo date_default_timezone_set('Nigeria/Abuja');

// $timestamp = mktime(12, 30, 15, 5, 22, 1994);
// echo '<center><h1><b>My Birthday is on the <br>'. date('m/d/Y, h:i:s a', $timestamp) .'</b></h1></center>';
//this above code print My Birthday is on the 
// 05/22/1994, 12:30:15 pm

$timestamp1 = strtotime('night');
$timestamp2 = strtotime('next thursday');
$timestamp3 = strtotime('-25 years');


echo date('m-d-Y h:i:sa', $timestamp3);







?>