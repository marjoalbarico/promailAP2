<?php
class User{
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

    //getters
    public function getUser_Email(){
        return $this->email;
    }

    public function getUser_Nom(){
        return $this->nom;
    }

    public function getUser_Prenom(){
        return $this->prenom;
    }

    public function getUser_DateNaissance(){
        return $this->dateNaissance;
    }

    public function getUser_TelephonePortable(){
        return $this->telephonePortable;
    }

    public function getUser_pwd(){
        return $this->pwd;
    }

    //setters
    public function setUser_newPwd($newPwd){
        $this->pwd=$newPwd;
    }

    public function setUser_newTelPor($newTelPor){
        $this->telephonePortable=$newTelPor;
    }

    public function setUser_newDateNaiss($newDateNais){
        $this->dateNaissance=$newDateNais;
    }

}
?>