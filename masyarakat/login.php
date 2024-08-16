<?php
include "koneksi.php";

session_start();

if (isset($_SESSION["login"])) {
  header("Location: masyarakat/dashboard.php");
}

?>
