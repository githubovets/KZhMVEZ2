<?php
session_start();
require "connect.php";
$login = $_POST['login'];
$pass = $_POST['pass'];

$query = "SELECT * from `employee` where `employee`.`Full name` = '$login'";
$poluchka = mysqli_query($db, $query);//mysqli_query(куда, что сделать), возвращает mysql-объект
$poluchka = mysqli_fetch_assoc($poluchka);//делает из объекта ассоциативный массив
if ($poluchka){
    if ($poluchka['Full name']==$login&&$poluchka['Password']==$pass){
        $_SESSION['user'] = ["login" => $poluchka['Full name'], "password" => $poluchka['Password'], "role" => $poluchka['ID Position']];
        if ($poluchka['ID Position']=='1'){
            header('location: ../admin.php');
        }else{ header('location: ../');}
    }else{
        die("НЕПАРВИЛЬНЫЙ ПАРОЛЬ ИЛИ ЛОГИН");
    }
}else{
    die("НЕ ПРИШЛО НИЧЕГО");
}