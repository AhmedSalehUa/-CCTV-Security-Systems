<?php
$host = "localhost";
$user = "acapytra_acapytr";
$paaword = "as01203904426";
$db = "acapytra_acapytrade";
@$con = mysqli_connect($host, $user, $paaword, $db);
if($con == false){
$host = "localhost";
$user = "acapytradeahmedsaleh";
$paaword = "as01203904426";
$db = "acapytrade";
$con = mysqli_connect($host, $user, $paaword, $db);
}
mysqli_set_charset($con,"utf-8");
$con->set_charset('utf-8');