<?php
session_start();
//echo "halo";
if (!isset($_SESSION["user"])) {
    header("Location: " . BASEURL . "/Admin/login");
}
?>