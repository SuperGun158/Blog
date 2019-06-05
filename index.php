<!DOCTYPE html>
<html>
<head>
	<title>ТЫТЫТЫТЫТЫЫТТЫТЫЫТЫТЫТЫТЫТЫТЫЫТЫТЫТЫТЫТЫЫТЫТЫТЫТЫТЫТЫТЫЫТЫТЫТЫТЫТТЫЫТыТЫТЫТЫТЫт</title>
	<meta charset="utf-8">
</head>
<body>
		<h1>
		Blog
	</h1>
	<hr>
	<?php
	$name = $databaze[0][title];
	$databaze = 
[
	['title' => 'Что лучше ролтон или дошик?', 'shorttext' => 'Ща будем рассуждать что лучьше дошик или ролтон...', 'longtext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
	['title' => 'Что лучше Украина или Чечня?', 'shorttext' => 'Ща будем рассуждать что лучьше Украина или Чечня...', 'longtext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
]; 
for($i = 0; $i < count($databaze); $i++){
	?>
	<div>
	<?php
			echo '<h3>' . $databaze[$i][title] . '</h3>';
			echo '<p>' . $databaze[$i][shorttext] . '</p>';
			echo '<a href="page.php?index=' . $i . '">Далее</a>';
			echo '<hr>';

	?>
</div>
	<?php
};
?>
	</body>
	</html>