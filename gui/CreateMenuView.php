<?php

namespace gui;

class CreateMenuView extends View {

    public function __construct($layout)
    {
        parent::__construct($layout);

        $this->title = 'Composer votre menu';

        $this->content = '';
    }
}
