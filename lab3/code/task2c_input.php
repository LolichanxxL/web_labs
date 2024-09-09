<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; 
    $age = $_POST['age']; 
    $mail =  $_POST['mail'];
    $salary = $_POST['salary'];
    $session_data = ["name" => $name, "age" => $age, "mail" => $mail, "salary" => $salary];
    $_SESSION["user_data"] = $session_data;
    header("Location: task2с_output.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>My Website</title>
  </head>
  <body>
    <form method="post">
      
      <label for="name">Введите ваше имя:</label> 
      <input id="name" type="text" name="name">
      <br>
      <label for="age">Введите ваш возраст:</label> 
      <input id="age" type="number" name="age"> 
      <br>
      <label for="mail">Введите ваш почтовый адрес:</label> 
      <input id="mail" type="email" name="mail">
      <br>
      <label for="salary">Введите вашу заработную плату:</label> 
      <input id="salary" type="number" name="salary">


      <br>

      <input type="submit" value="Подтвердить"> 
    </form>
  </body>
</html>
