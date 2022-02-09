<?php
class Contact{
    private $email;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $telephonePortable;
    private $pwd;

    public function __construct($unEmail, $unNom, $unPrenom, $uneDateNaiss, $uneTelPor, $unPwd){
        $this->email=$unEmail;
        $this->nom=$unNom;
        $this->prenom=$unPrenom;
        $this->dateNaissance=$uneDateNaiss;
        $this->telephonePortable=$uneTelPor;
        $this->pwd=$unPwd;
    }

    public function getContact_Email(){
        return $this->email;
    }

    public function getContact_Nom(){
        return $this->nom;
    }

    public function getContact_Prenom(){
        return $this->prenom;
    }

    public function getContact_DateNaissance(){
        return $this->dateNaissance;
    }

    public function getContact_TelephonePortable(){
        return $this->telephonePortable;
    }

}
?>