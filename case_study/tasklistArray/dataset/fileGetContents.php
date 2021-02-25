<?php
$jsonString = file_get_contents('TaskList.json');
$jsonArray = json_decode('TaskList.csv', true);

//echo ($jsonString);
//print_r($jsonArray);
print_r($jsonArray[17]['expirationDate']);