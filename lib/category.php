<?php
require "connect.php"
// Получение выбранной категории из GET-параметра
$category = $_GET['category'];

// SQL-запрос для выборки товаров выбранной категории
$sql = "SELECT * FROM `product category` WHERE `product category`.`Name` = '$category'";
$result = $db->query($sql);

// Проверка наличия результатов
if ($result->num_rows > 0) {
  // Вывод данных каждого товара
  while($row = $result->fetch_assoc()) {
    echo "Название: " . $row["name"]. " - Цена: " . $row["price"]. "<br>";
    // Здесь можно добавить другие поля товара, которые вы хотите отобразить
  }
} else {
  echo "Нет товаров в выбранной категории.";
}