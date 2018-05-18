<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Puis
 *
 * @author junio_kawel
 */
class Puis {
    private $id;
    private $datecreation;
    private $idAgent;
    private $donateur;

    public function __construct($id, $datecreation,$idAgent,$donateur)
    {
        $this->id = $id;
        $this->datecreation = $datecreation;
        $this->idAgent = $idAgent;
        $this->donateur = $donateur;
    }
    
    function getId() {
        return $this->id;
    }

    function getDatecreation() {
        return $this->datecreation;
    }

    function getIdAgent() {
        return $this->idAgent;
    }

    function getDonateur() {
        return $this->donateur;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDatecreation($datecreation) {
        $this->datecreation = $datecreation;
    }

    function setIdAgent($idAgent) {
        $this->idAgent = $idAgent;
    }

    function setDonateur($donateur) {
        $this->donateur = $donateur;
    }

   
    
}
