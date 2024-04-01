<?php

namespace gui;

class CreateMenuView extends View {

    public function __construct($layout, $presenter)
    {
        parent::__construct($layout);

        $this->title = 'Composer votre menu';

        $this->content = '<main id="creation-menu-container">' . $presenter->getAllPlatHTML();
        $this->content .= '<div id="liste-plats">
                            <div id="plat-template" style="display: none">
                                <p>NAME</p>
                                <input type="hidden">
                                <input type="button" value="x" onclick="deletePlat(this)">
                            </div>
                            </div></main>';
    }
}
