<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Renouvellement
 *
 * @author junio_kawel
 */
class Renouvellement {
    private $id;
    private $idcoupon;
    private $idtransaction;

    public function __construct($id,$idcoupon,$idtransaction)
    {
        $this->id = $id;
        $this->idcoupon = $idcoupon;
        $this->idtransaction;
    }
    
    function getId(){
        return $this->id;
    }

    function getIdcoupon() {
        return $this->idcoupon;
    }

    function getIdtransaction() {
        return $this->idtransaction;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdcoupon($idcoupon) {
        $this->idcoupon = $idcoupon;
    }

    function setIdtransaction($idtransaction) {
        $this->idtransaction = $idtransaction;
    }


}
