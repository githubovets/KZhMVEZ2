<?php
require "connect.php";

$name = $_POST['name'];
$price = $_POST['price'];
$cat = $_POST['cat'];
$descript = $_POST['descript'];
$photo = $_POST['photo'];
$charges = $_POST['charges'];
$time = $_POST['time'];
$effects = $_POST['effects'];

if ($name==null||$price==null||$cat==null||$descript==null||$photo==null||$charges==null||$time==null||$effects==null){
    die("КАКОЕ-ТО ПОЛЕ ПУСТОЕ");
}

$query = "SELECT * from `product` where `product`.`Name`='$name'";
$poluchka = mysqli_query($db,$query);
$poluchka = mysqli_fetch_assoc($poluchka);

if ($poluchka){
    die ("ТАКОЙ ТОВАР УЖЕ ЕСТЬ");
}else{
    $ququ = "INSERT into `product`(`ID Product`, `Name`, `Price`, `ID Category`, `Category`, `Description`, `Photo`, `Number of charges`, `Time`, `Number of effects`) values (null, '$name', '$price', null, '$cat', '$descript', '$photo', '$charges', '$time', '$effects')";
    $add = mysqli_query($db,$ququ);
    if(!$add){
        die("ЧЁТ НЕ ДОБАВЛЯЕТСЯ");
    }
        header('Location: ../admin.php');
}