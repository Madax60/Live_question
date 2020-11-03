<?php

require_once'./question.php';

class Categorie extends Question
{
    protected string $categorie;

    public function __construct(string $categorie)
    {
        $this->categorie = $categorie;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }
    public function setCategorie(string $categorie)
    {
        $this->categorie = $categorie;
    }

}
?>
