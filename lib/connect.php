<?php
$db = mysqli_connect(
    '127.0.0.1:3307',
    'root',
    '',
    'fire'
);
if(!$db)die("Упс! Нет подключения.");