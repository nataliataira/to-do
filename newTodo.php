<?php

$fileName = 'todo.json';
$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);

if ($todoName)
{
    if (file_exists($fileName))
    {
        $json = file_get_contents($fileName);
        $jsonArray = json_decode($json, true);
    }
    else
    {
        $jsonArray = [];
    }
    $jsonArray[$todoName] = ['completed' => false];
    file_put_contents($fileName, json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header('Location: index.php');