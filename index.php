<?php

include_once("header.php");

require_once("task_1.php");
require_once("task_4.php");


startTestElement(1);

// Task #1 testing environment
echo addNumbers(4, 5, 7, 8, null, [], "56");

endTestElement();


startTestElement(2);

// Task #2 testing environment
echo "This task doesn't have result render";

endTestElement();


startTestElement(3);

// Task #3 testing environment
echo "This task defines classes for Birds";

endTestElement();


startTestElement(4);

// Task #4 testing environment
$myBirdController = new BirdController();

$ostrich = new Ostrich();
$ostrich->setGender("Female");

$eagle = new Eagle();
$eagle->setGender("Male");

$myBirdController->feed($eagle);
$myBirdController->feed($ostrich);

$myBirdController->releaseFromCliff($eagle);

$myBirdController->runFrom($ostrich);

$myBirdController->walk($ostrich);
$myBirdController->walk($eagle);

endTestElement();


include_once("footer.php");