<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['surname'] = $_POST['surname']; // изменено last_name
    $_SESSION['name'] = $_POST['name']; // изменено first_name
    $_SESSION['age'] = $_POST['age'];
    header("Location: task2b_output.php");
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
      
      <label for="surname">Введите вашу фамилию:</label> 
      <input type="text" name="surname">
      <br>

      <label for="name">Введите ваше имя:</label> 
      <input type="text" name="name">
      <br>
      
      <label for="age">Введите ваш возраст:</label> 
      <input type="number" name="age" min="18">
      <input type="submit" value="Подтвердить"> 
    </form>
  </body>
</html>
