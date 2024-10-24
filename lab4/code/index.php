<?php
$types = ['cars', 'other', 'components'];
$headers = ['category', 'email', 'title', 'description'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Лаба 3</title>
</head>
<body>

<div class="form">
    <form action="save.php" class="form" method="post">

        <label>
            Email
            <input type="email" name="email" required>
        </label>

        <label id="category" for="category">
            Category
            <select name="category">
                <?php
                for ($i = 0; $i < sizeof($types); $i++) {
                    echo "<option value = \"{$types[$i]}\">{$types[$i]}</option>";
                }
                ?>
            </select>
        </label>

        <label id="title" for="title">
            Title
            <input type="text" name="title" required>
        </label>

        <label id="description" for="description">
            Description
            <textarea rows="3" name="description"></textarea>
        </label>
        <input type="submit" value="save">
    </form>
</div>
<br>
<div class="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        require __DIR__ . '/vendor/autoload.php';

        $client = new \Google_Client();
        $client -> setApplicationName('web');
        $client -> setScopes([\Google_Service_Sheets::SPREADSHEETS]);
        $client -> setAccessType('offline');
        $client -> setAuthConfig(__DIR__. '/credentials.json');

        $service = new Google_Service_Sheets($client);

        $range = 'list1!A:D';
        $idSheet = "19EY2u0_fx2xvsmAl1Fb_9aZzs-obX0ibg0H4JA9xN4c";

        $response = $service->spreadsheets_values->get($idSheet, $range);

        $values = $response->getValues();


        if (!empty($values)) {
            foreach ($values as $row) {
                echo '<tr>';
                foreach ($row as $cell) {
                    echo '<td>' . htmlspecialchars($cell) . '</td>';
                }
                echo '</tr>';
            }
        } else {
            echo 'Пусто.';
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>