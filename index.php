<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/app.min.css">
	<title>Oneteam exercise</title>
</head>
<body>

<?php
/* define functions start */
function debug($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
/* define functions end */

$teams = ["Ливерпуль", "Челси", "Тоттенхэм Хотспур", "Арсенал", "Манчестер Юнайтед", "Эвертон", "Лестер Сити", "Вест Хэм Юнайтед", "Уотфорд", "Борнмут", "Бернли", "Саутгемптон", "Брайтон энд Хоув Альбион", "Норвич Сити", "Шеффилд Юнайтед", "Фулхэм", "Сток Сити", "Мидлсбро", "Суонси Сити", "Дерби Каунти"];

$guest = $teams;

echo <<<HEADER
<div class="pane">
	<h3>Игра дома</h3>
	<div class="header">
		<div>Дома</div>
		<div>Счёт</div>
		<div>В гостях</div>
	</div>
HEADER;

$games=count($teams)/2;
for ($i = 1; $i <= $games; $i++) {
	shuffle($teams);
	$team1=array_pop($teams);
	$team2=array_pop($teams);
	$count1=rand(0,7);
	$count2=rand(0,7);

	echo <<<ROW
	<div class="row">
		<div>$team1</div>
		<div><span class="lCount">$count1</span> &nbsp:&nbsp <span class="rCount">$count2</span></div>
		<div>$team2</div>
	</div>
ROW;
}
echo "</div>";

echo <<<HEADER
<div class="pane">
	<h3>Игра в гостях</h3>
	<div class="header">
		<div>В гостях</div>
		<div>Счёт</div>
		<div>Дома</div>
	</div>
HEADER;

for ($i = 1; $i <= $games; $i++) {
	shuffle($guest);
	$team1=array_pop($guest);
	$team2=array_pop($guest);
	$count1=rand(0,7);
	$count2=rand(0,7);

	echo <<<ROW
	<div class="row">
		<div>$team1</div>
		<div><span class="lCount">$count1</span> &nbsp:&nbsp <span class="rCount">$count2</span></div>
		<div>$team2</div>
	</div>
ROW;
}
echo "</div>";
?>

<script src="js/app.min.js"></script>
</body>
</html>
