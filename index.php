<?php

include_once("header.php");

require_once("task_1.php");


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
echo "This task defines class for Birds";

endTestElement();


startTestElement(4);

// Task #4 testing environment


endTestElement();


include_once("footer.php");