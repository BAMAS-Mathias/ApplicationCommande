<?php

namespace domain;

class Menu{

    private $id;
    private $title;
    private $description;
    private $price;

    public function __construct($id, $title, $description, $price)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
    }

}
