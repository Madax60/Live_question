<?php

require_once'./question.php';

class Utilisateur extends Question
{
    protected Profil $pseudo;

    public function __construct(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }
}

?>