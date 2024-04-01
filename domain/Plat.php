<?php

namespace domain;

class Plat{

    private int $id;
    private string $nom;
    private string $libelle;
    private float $price;

    /**
     * @param string $nom
     * @param string $libelle
     * @param float $prix
     */
    public function __construct(int $id, string $nom,  string $libelle, float $prix)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->price = $prix;
        $this->libelle = $libelle;
    }

    public function getId(): int
    {
        return $this->id;
    }



    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getLibelle(): string
    {
        return $this->libelle;
    }



}