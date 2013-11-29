<?php
class DogEntity
{
    public $id;
    public $name;
    public $type;
    public $country;
    public $image;
    public $review;
    
    function __construct($id, $name, $type, $country, $image, $review) {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->country = $country;
        $this->image = $image;
        $this->review = $review;
    }
}
?>
