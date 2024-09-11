<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Avito</title>
	</head>
	<body>
		<div id="form">
			<form action="task3_save.php" method="post">
				<label for="email">Email</label>
				<input id="email" type="email" name="email" required>
				<label for="category">Category</label>
				<select name="category" id="category">
					<?php

					$categories =opendir('categories');

					while ($file = readdir($categories))
					{
						if (is_dir('categories/'.$file) && $file != '.' && $file != '..') {
							echo '<option value="'.$file.'">'.$file.'</option>';
						}
					}
					?>
				</select>
				<label for="title">Title</label>
				<input id="title" type="text" name="title" required>

				<label for="description">Description</label>
				<textarea id="description" rows="3" cols="20" name="description"></textarea>

				<input type="submit" value="Save">

			</form>	
		</div>	
		<div id="table">
			<table>
				<thead>
					<th>Email</th>
					<th>Category</th>
					<th>Title</th>
					<th>Description</th>
				</thead>
				<tbody>
					<?php
					$dir = opendir("categories");

					while ($category = readdir($dir)) {
						if ($category != '.' && $category != '..' && is_dir('categories/'.$category)) {
							$dir1 = opendir("categories/{$category}");
							while($email = readdir($dir1)){
								if ($email != '.' && $email != '..' && is_dir('categories/'.$category."/".$email)){
									$files = scandir('categories/'.$category."/".$email);
									foreach ($files as $file) {
										if ($file != '.' && $file != '..') {
											$filePath = 'categories/'.$category.'/'.$email."/".$file;
											$content = file_get_contents($filePath);

											echo '<tr>';
											echo '<td>'.basename($email).'</td>';
											echo '<td>'.basename($category).'</td>';
											echo '<td>'.pathinfo($file, PATHINFO_FILENAME).'</td>';
											echo '<td>'.$content.'</td>';
											echo '</tr>';
											}
									}
									
								}
							}
						}
					}
					?>
				</tbody>
				
			</table>
		</div>
	</body>
</html>