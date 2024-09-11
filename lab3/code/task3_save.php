<?php
function redirectToHome(): void {
	header('Location: task3_index.php');
	exit();
}

if (false === isset($_POST["email"], $_POST["category"], $_POST["title"], $_POST["description"])) {
	redirectToHome();
}

$category = $_POST["category"];
$title = $_POST["title"];
$desc = $_POST["description"];
$email = $_POST["email"];
$categoryPath = "categories/{$category}";

$filePath = "categories/{$category}/{$email}/{$title}.txt";

if (false === file_exists($categoryPath)){
	throw new Exception('Something went wrong.');
}

if (false === mkdir("categories/{$category}/{$email}")){
	throw new Exception('Something went wrong.');
}

if (false === file_put_contents($filePath, $desc)) {
	throw new Exception('Something went wrong.');
}

chmod($filePath,0777);
redirectToHome();