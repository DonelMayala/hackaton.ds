<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of maintenance
 *
 * @author junio_kawel
 */
class maintenance {
    private $id;
    private $nom;
    private $email;
    private $telephone;
    private $idpuis;
    
    public function __construct($id,$nom,$email,$telephone,$idpuis){
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->idpuis = $idpuis;   
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getEmail() {
        return $this->email;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getIdpuis() {
        return $this->idpuis;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setIdpuis($idpuis) {
        $this->idpuis = $idpuis;
    }


    
}
