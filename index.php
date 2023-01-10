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
	/* var_dump($arr); */
	echo "</pre>";
}
/* define functions end */

$teams = ["Ливерпуль", "Челси", "Тоттенхэм Хотспур", "Арсенал", "Манчестер Юнайтед", "Эвертон", "Лестер Сити", "Вест Хэм Юнайтед", "Уотфорд", "Борнмут", "Бернли", "Саутгемптон", "Брайтон энд Хоув Альбион", "Норвич Сити", "Шеффилд Юнайтед", "Фулхэм", "Сток Сити", "Мидлсбро", "Суонси Сити", "Дерби Каунти"];

/* shuffle($teams); */
echo <<<HEADER
<div class="pane">
	<h3>Игра дома</h3>
	<div class="header">
		<div class="team1">Дома</div>
		<div class="count">Счет</div>
		<div class="team2">В гостях</div>
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
		<div class="team1">$team1</div>
		<div class="count">$count1 : $count2</div>
		<div class="team2">$team2</div>
	</div>
ROW;
}

?>

</div>
</body>
</html>
