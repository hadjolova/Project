<?php

require 'DogController.php';
$dogController = new DogController();

if(isset($_POST['types']))
{
    //Fill page with coffees of the selected type
    $dogTables = $dogController->CreateDogTables($_POST['types']);
}
else 
{
    //Page is loaded for the first time, no type selected -> Fetch all types
    $dogTables = $dogController->CreateDogTables('%');
}

//Output page data
$title = 'Dog overview';
$content = $dogController->CreateDogDropdownList(). $dogTables;

include 'Template.php';
?>
