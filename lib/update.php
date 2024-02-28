<?php
session_start();
if ($_SESSION['user']['role'] !== '1') header('location: index.php');

require "connect.php";
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$cat = $_POST['cat'];
$descript = $_POST['descript'];
$photo = $_POST['photo'];
$charges = $_POST['charges'];
$time = $_POST['time'];
$effects = $_POST['effects'];

$query = "UPDATE `product` SET `Name`='$name',`Price`='$price',`Category`='$cat',`Description`='$descript',`Photo`='$photo',`Number of charges`='$charges',`Time`='$time',`Number of effects`='$effects' WHERE `product`.`ID Product` = '$id'";

$update = mysqli_query($db, $query);

header('location: ../admin.php');