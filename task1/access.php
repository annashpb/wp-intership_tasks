<?php

$name = $_GET['name'];
$age = intval(2020 - $_GET['birth-year']);

$accepted = "Hello, $name, access accepted";
$denied = "Sorry, $name, no entrance until 21’ otherwise";

echo ($age >= 21) ? $accepted : $denied;
