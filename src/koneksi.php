<?php

$host = "0.0.0.0";
$username = "root";
$password = "root";
$db = "pedumas";

$koneksi = mysqli_connect($host, $username, $password, $db) or
  die(mysqli_error($koneksi));

?>
