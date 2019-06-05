<!DOCTYPE html>
<html>
<head>
	<title>SVEEEEEE HANDERE VARE UUUUUUKRAAAINAAA SVE HANDERE CVEEEEEEEE</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	$databaze = 
[
	['title' => 'Что лучше ролтон или дошик?', 'shorttext' => 'Ща будем рассуждать что лучьше дошик или ролтон...', 'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.1'],
	['title' => 'Что лучше Украина или Чечня?', 'shorttext' => 'Ща будем рассуждать что лучьше Украина или Чечня...', 'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.2'],
]; 
	?>
	<div>
		<h3>
		<?php
		$ggg = $_GET['index'];
		echo $databaze[$ggg]['title'];
		?>
		</h3>
		<p>
		<?php
		echo $databaze[$ggg]['long'];
		?>
		</p>
	</div>
</body>
</html>