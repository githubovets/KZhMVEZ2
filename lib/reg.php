<?php
require "connect.php";
$login = $_POST['login'];
$pass = $_POST['pass'];
$confirm = $_POST['confirm'];
if ($pass !== $confirm){
    die("ПАРОЛИ НЕ СОВПАЛИ");
}elseif ($login==null||$pass==null){
    die("КАКОЕ-ТО ПОЛЕ ПУСТОЕ");
}
$query = "SELECT * from `employee` where `employee`.`Full name`='$login'";
$poluchka = mysqli_query($db,$query);
$poluchka = mysqli_fetch_assoc($poluchka);

if ($poluchka){
    die ("ТАКОЙ ЧЕЛОВЕК ЕСТЬ");
}else{
    $ququ = "INSERT into `employee`(`Full name`, `Password`) values ('$login', '$pass')";
    $add = mysqli_query($db,$ququ);
    if(!$add){
        die("ЧЁТ НЕ ДОБАВЛЯЕТСЯ");
    }
        header('Location: ../');
}