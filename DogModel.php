<?php

require ("DogEntity.php");

class DogModel {

    function GetDogTypes() {
        require ('Credentials.php');
  
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM dog") or die(mysql_error());
        $types = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($types, $row[0]);
        }

        mysql_close();
        return $types;
    }

    function GetDogByType($type) {
        require ('Credentials.php');
      
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM dog WHERE type LIKE '$type'";
        $result = mysql_query($query) or die(mysql_error());
        $dogArray = array();

        while ($row = mysql_fetch_array($result)) {
            $id = $row[0];
            $name = $row[1];
            $type = $row[2];
            $country = $row[3];
            $image = $row[4];
            $review = $row[5];

            $dog = new DogEntity($id, $name, $type, $country, $image, $review);
            array_push($dogArray, $dog);
        }

        mysql_close();
        return $dogArray;
    }

    function GetDogById($id) {
        require ('Credentials.php');
     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM dog WHERE id = $id";
        $result = mysql_query($query) or die(mysql_error());

        while ($row = mysql_fetch_array($result)) {
            $id = $row[0];
            $name = $row[1];
            $type = $row[2];
            $country = $row[3];
            $image = $row[4];
            $review = $row[5];
			

            $dog = new DogEntity($id, $name, $type, $country, $image, $review);
        }

        mysql_close();
        return $dog;
    }

    function InsertDog(DogEntity $dog) {
        $query = sprintf("INSERT INTO dog
                          (name, type,country,image,review)
                          VALUES
                          ('%s','%s','%s','%s','%s')",
                mysql_real_escape_string($dog->name),
                mysql_real_escape_string($dog->type),
                mysql_real_escape_string($dog->country),
                mysql_real_escape_string("Images/Dog/" . $dog->image),
                mysql_real_escape_string($dog->review));
        $this->PerformQuery($query);
    }

    function UpdateDog($id, DogEntity $dog) {
        $query = sprintf("UPDATE dog
                            SET name = '%s', type = '%s',
                            country = '%s', image = '%s', review = '%s'
                          WHERE id = $id",
                mysql_real_escape_string($dog->name),
                mysql_real_escape_string($dog->type),
                mysql_real_escape_string($dog->country),
                mysql_real_escape_string("Images/Dog/" . $dog->image),
                mysql_real_escape_string($dog->review));
                          
        $this->PerformQuery($query);
    }

    function DeleteDog($id) {
        $query = "DELETE FROM dog WHERE id = $id";
        $this->PerformQuery($query);
    }

    function PerformQuery($query) {
        require ('Credentials.php');
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);

        mysql_query($query) or die(mysql_error());
        mysql_close();
    }

}

?>
