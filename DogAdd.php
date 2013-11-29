<?php
require 'DogController.php';
$dogController = new DogController();

$title = "Add a new Dog";

$content ="<form action='' method='post'>
    <fieldset>
        <legend>Add a new Dog</legend>
        <label for='name'>Name: </label>
        <input type='text' class='inputField' name='txtName' /><br/>

        <label for='type'>Type: </label>
        <select class='inputField' name='ddlType'>
            <option value='%'>All</option>"
        .$dogController->CreateOptionValues($dogController->GetDogTypes()).
        "</select><br/>

        <label for='country'>Country: </label>
        <input type='text' class='inputField' name='txtCountry' /><br/>

        <label for='image'>Image: </label>
        <select class='inputField' name='ddlImage'>"
        .$dogController->GetImages().
        "</select></br>

        <label for='review'>Review: </label>
        <textarea cols='70' rows='12' name='txtReview'></textarea></br>

        <input type='submit' value='Submit'>
    </fieldset>
</form>";


if(isset($_POST["txtName"]))
{
    $dogController->InsertDog();
}
include 'Template.php';
?>


