<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
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

debug($teams);
shuffle($teams);
debug($teams);

?>

</body>
</html>
