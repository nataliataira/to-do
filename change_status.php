<?php

$jsonFile = 'todo.json';
$json = file_get_contents($jsonFile);
$jsonArray = json_decode($json, true);

$todoName = $_POST['todo_name'];
$todoName = trim($todoName);

$jsonArray[$todoName]['completed'] = !$jsonArray[$todoName]['completed'];


file_put_contents($jsonFile, json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');