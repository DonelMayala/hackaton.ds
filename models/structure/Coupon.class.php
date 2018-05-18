<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of coupon
 *
 * @author junio_kawel
 */
class coupon {
    private  $id;
    private  $codecoupon;
    private  $montant;
    
    public function __construct($id,$codecoupon,$montant) {
        $this->id = $id;
        $this->codecoupon = $codecoupon;
        $this->montant = $montant;    
    }

    function getId() {
        return $this->id;
    }

    function getCodecoupon() {
        return $this->codecoupon;
    }

    function getMontant() {
        return $this->montant;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodecoupon($codecoupon) {
        $this->codecoupon = $codecoupon;
    }

    function setMontant($montant) {
        $this->montant = $montant;
    }


    
}
