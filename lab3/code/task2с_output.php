<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Вывод данных пользователя</title>
</head>
<body>
	<div id="info">
		<span>Данные пользователя:</span>

		<ul>
		<?php
		if (isset($_SESSION['user_data'])) {
			 foreach ($_SESSION["user_data"] as $key => $info) {
				 echo "<li><strong>$key:</strong> $info</li>";
			 }
		} else {
			header("Location: task2c_input.php");
			exit();
		}
		?>
		</ul>
	</div>
</body>
</html>