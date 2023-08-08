<?php

function startTestElement(int $elementNumber) {
    echo "<div class='test-element'><h2>TEST #$elementNumber</h2>";
}

function endTestElement() {
    echo "</div>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FWS Test environment</h1>
    <div class="tests-container">
        