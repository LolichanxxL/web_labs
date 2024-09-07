<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word and Character Counter</title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Счетчик слов и символов</title>
    </head>
    <body>
    <center>
        <form method="post" action="">
            <textarea name="text" rows="10" cols="40"></textarea>
            <br>
            <input type="submit" value="Count Words & Characters">
        </form>
    </center>
    
    <?php
    if (isset($_POST['text'])) {
        $text = $_POST['text'];

        $words = str_word_count($text);
        $characters = strlen($text);

        echo "<div class='result'>";
        echo "<p><b>Words:</b> $words, <b>Characters:</b> $characters</p><br>";
        echo "<textarea style='width: 100%; height: 100px;' readonly>$text</textarea>";
        echo "</div>";
    }
    ?>
    </body>
    </html>