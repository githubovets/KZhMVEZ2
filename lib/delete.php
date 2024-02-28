<?php
session_start();
if ($_SESSION['user']['role'] !== '1') header('location: index.php');

require "connect.php";
$id = $_GET['id'];
mysqli_query($db,"DELETE FROM `product` WHERE `product`.`ID Product` = '$id'");

header('location: ../admin.php');