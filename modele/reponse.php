<?php

require_once'./question.php';
require_once'./profil.php';

class Reponse
{
    protected string $contenuRep;
    protected string $dateRep;
    protected Profil $pseudo;
    protected Question $question;

    public function __construct(string $contenuRep, string $dateRep)
    {
        $this->contenuRep = $contenuRep;
        $this->dateRep = $dateRep;
    }

    public function getContenuRep(): string
    {
        return $this->contenuRep;
    }
    public function setContenuRep(string $contenuRep)
    {
        $this->contenuRep = $contenuRep;
    }

    public function getDateRep(): string
    {
        return $this->dateRep;
    }
    public function setDateRep(string $dateRep)
    {
        $this->dateRep = $dateRep;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }
    public function setPseudo(string $pseudo)
    {
        $this->pseudo = $pseudo;
    }

    public function getQuestion(): bool
    {
        return $this->question;
    }
    public function setQuestion(bool $question)
    {
        $this->question = $question;
    }

}
?>
