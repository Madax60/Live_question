<?php

class Profil
{
    protected string $pseudo;
    protected string $mail;
    protected string $mdp;
    protected bool $genre;
    protected Role $role;

    public function __construct(string $pseudo, string $mail)
    {
        $this->pseudo = $pseudo;
        $this->mail = $mail;
    }


    public function getMail(): string
    {
        return $this->mail;
    }
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    public function getMdp(): string
    {
        return $this->mdp;
    }
    public function setMdp(string $mdp)
    {
        $this->mdp = $mdp;
    }

    public function getGenre(): bool
    {
        return $this->poids;
    }
    public function setGenre(bool $genre)
    {
        $this->genre = $genre;
    }

    public function getRole(): bool
    {
        return $this->role;
    }
    public function setRole(bool $role)
    {
        $this->role = $role;
    }

}
?>
