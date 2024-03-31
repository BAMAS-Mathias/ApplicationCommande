<?php

namespace domain;

class Commande{

    private int $id;
    private string $authorId;
    private array $menuList;

    /**
     * @param int $id
     * @param string $authorId
     * @param array $menuList
     */
    public function __construct(int $id, string $authorId, array $menuList)
    {
        $this->id = $id;
        $this->authorId = $authorId;
        $this->menuList = $menuList;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAuthorId(): string
    {
        return $this->authorId;
    }

    public function getMenuList(): array
    {
        return $this->menuList;
    }





}