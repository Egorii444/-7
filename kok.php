<?php
// Определяем ассоциативный массив с информацией о различных городах (название => население)
$cities = array(
    "Москва" => 12678079,
    "Токио" => 37435191,
    "Шанхай" => 27357204,
    "Дели" => 29399141,
    "Сан-Паулу" => 22043028
);

// Инициализируем переменные для хранения информации о городе с самым большим населением
$mostPopulatedCity = "";
$maxPopulation = 0;

// Проходим по массиву и находим город с самым большим населением
foreach ($cities as $city => $population) {
    if ($population > $maxPopulation) {
        $maxPopulation = $population;
        $mostPopulatedCity = $city;
    }
}

// Выводим информацию о городе с самым большим населением
echo "Город с самым большим населением: $mostPopulatedCity, Население: $maxPopulation человек";
?>