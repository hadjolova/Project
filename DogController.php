<?php

require ("DogModel.php");

class DogController {

    function CreateDogDropdownList() {
        $dogModel = new DogModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a type: 
                    <select name = 'types' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($this->GetDogTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }

    function CreateDogTables($types) {
        $dogModel = new DogModel();
        $dogArray = $dogModel->GetDogByType($types);
        $result = "";

        foreach ($dogArray as $key => $dog) {
            $result = $result .
                    "<table class = 'dogTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$dog->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$dog->name</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>$dog->type</td>
                        </tr>
                        
                        <tr>
                            <th>Country: </th>
                            <td>$dog->country</td>
                        </tr>
                        
                        <tr>
                            <td colspan='2' >$dog->review</td>
                        </tr>                      
                     </table>";
        }
        return $result;
    }

    function GetImages() {

        $handle = opendir("Images/Dog");

        while ($image = readdir($handle)) {
            $images[] = $image;
        }

        closedir($handle);

        $imageArray = array();
        foreach ($images as $image) {
            if (strlen($image) > 2) {
                array_push($imageArray, $image);
            }
        }

        $result = $this->CreateOptionValues($imageArray);
        return $result;
    }

    function InsertDog() {
        $name = $_POST["txtName"];
        $type = $_POST["ddlType"];
        $country = $_POST["txtCountry"];
        $image = $_POST["ddlImage"];
        $review = $_POST["txtReview"];

        $dog = new DogEntity(-1, $name, $type, $country, $image, $review);
        $dogModel = new DogModel();
        $dogModel->InsertDog($dog);
    }

    function UpdateDog($id) {
        
    }

    function DeleteDog($id) {
        
    }

    function GetDogById($id) {
        $dogModel = new DogModel();
        return $dogModel->GetDogById($id);
    }

    function GetDogByType($type) {
        $dogModel = new DogModel();
        return $dogModel->GetDogByType($type);
    }

    function GetDogTypes() {
        $dogModel = new DogModel();
        return $dogModel->GetDogTypes();
    }

}

?>
