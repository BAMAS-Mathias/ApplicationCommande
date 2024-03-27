<?php

namespace gui;

class View{

    protected $title = '';
    protected $content = '';
    protected $layout;


    public function __construct($layout)
    {
        $this->layout = $layout;
    }

    public function display(){
        return $this->layout->display($this->title, $this->content);
    }
}
