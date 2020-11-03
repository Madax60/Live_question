<?php
require_once'./utilisateur.php';
require_once'./categorie.php';
require_once'./profil.php';

class Question
{
    protected string $titreQuest;
    protected string $dateQuest;
    protected Profil $pseudo;
    protected Profil $categorieQuest;


    ## FONCTION ##
    public function afficherQuestion():string
    {
        return 'Bonjour je suis '.$this->getPseudo().', ma question est '.$this->getTitreQuest().'<br\>. Elle a été posté le '.$this->getdateQuest().'. Elle appartient à la catégorie suivante: '.$this->getCategorie();
    }
    ## Titre ##
    public function getTitreQuest(): string
    {
        return $this->titreQuest;
    }
    public function setTitreQuest(string $titreQuest)
    {
        $this->titreQuest = $titreQuest;
    }
    ## date ##
    public function getDateQuest(): string
    {
        return $this->dateQuest;
    }
    public function setDateQuest(string $dateQuest)
    {
        $this->dateQuest = $dateQuest;
    }


}
?>
