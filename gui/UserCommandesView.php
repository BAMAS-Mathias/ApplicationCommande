<?php

namespace gui;

class UserCommandesView extends View{

    public function __construct($layout, $presenter)
    {
        parent::__construct($layout);

        $this->title = 'Mes commandes';

        $this->content = $presenter->getAllCommandesHTML();
    }
}
