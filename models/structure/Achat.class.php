<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Achat
 *
 * @author junio_kawel
 */
class Achat {
    private $id;
    private $idcoupon;
    private $quantite;
    private $typeAchat;
    
    function getId() {
        return $this->id;
    }

    function getIdcoupon() {
        return $this->idcoupon;
    }

    function getQuantite() {
        return $this->quantite;
    }

    function getTypeAchat() {
        return $this->typeAchat;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdcoupon($idcoupon) {
        $this->idcoupon = $idcoupon;
    }

    function setQuantite($quantite) {
        $this->quantite = $quantite;
    }

    function setTypeAchat($typeAchat) {
        $this->typeAchat = $typeAchat;
    }

    
}
