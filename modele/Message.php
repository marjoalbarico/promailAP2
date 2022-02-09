<?php
class Message{
    private $idMessage;
    private $contenu;
    private $dateHeureMessage;
    private $objet;
    private $emailContact;
    private $emailUser;

    public function __construct($unIdMessgae, $unContenu, $uneDateHeure, $unObjet, $unEmailContact, $unEmailUser){
        $this->idMessage=$unIdMessgae;
        $this->contenu=$unContenu;
        $this->dateHeureMessage=$uneDateHeure;
        $this->objet=$unObjet;
        $this->emailContact=$unEmailContact;
        $this->emailUser=$unEmailUser;
    }

    public function getIdMessage(){
        return $this->idMessage;
    }

    public function getContenu(){
        return $this->contenu;
    }

    public function getDateHeure(){
        return $this->dateHeureMessage;
    }

    public function getObjet(){
        return $this->emailContact;
    }

    public function getEmailUser(){
        return $this->emailuser;
    }
}
?>