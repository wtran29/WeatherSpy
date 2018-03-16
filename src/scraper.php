<?php

$city=$_GET['city'];

$city=str_replace(" ", "", $city);

$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('/1&ndash;3 days\)<\/span><p class="b-forecast__table-description-content"><span class="phrase">(.*?)<\/span><\/p>/s', $contents, $matches);

echo $matches[1];
?>