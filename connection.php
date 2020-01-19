<?php 
header("Access-Control-Allow-Origin: *");

$con = @mysqli_connect("localhost", "root", "asdf1234") or die("DAtabase Conncetion Failed");
$db = mysqli_select_db($con, "oregonix_ts") or die("Can't Find Database");
?>