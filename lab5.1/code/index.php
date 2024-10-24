<?php
// Подключение к MySQL
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['text']);

    $query = "INSERT INTO web (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->query($query);
}
// посылаем запрос к серверу
$ads = [];
if ($result = $mysqli->query('SELECT * FROM web')) {
    while ($row = $result->fetch_assoc()) {
        $ads[] = $row;
    }
    $result->close();
}

// Закрытие соединения
$mysqli->close();

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab_5</title>
</head>
<body>
<header>Databases</header>
<h1>Information</h1>

<form action="index.php" method="POST">
    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="title">Name</label>
    <input type="text" name="title" required>

    <label for="categories">Category</label>
    <select name="categories" required>
        <option value="operator">Operator</option>
        <option value="price">Price</option>
        <option value="mark">Mark</option>
        <option value="dogs">Dogs</option>
        <option value="cats">Cats</option>
    </select><br>

    <label for="description">Description:</label><br>
    <textarea name="text" rows="15" cols="50" required></textarea><br>
    <button type="submit">Save to database</button>
</form>

<div id="table">
    <?php if (!empty($ads)): ?>
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ads as $ad): ?>
                <tr>
                    <td><?= $ad['email'] ?></td>
                    <td><?= $ad['title'] ?></td>
                    <td><?= $ad['category'] ?></td>
                    <td><?= $ad['description'] ?></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Empty</p>
    <?php endif; ?>
</div>
</body>
</html>
