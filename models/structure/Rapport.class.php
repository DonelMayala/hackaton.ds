<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rapport
 *
 * @author junio_kawel
 */
class Rapport {
    private $id;
    private $idtransaction;

    public function __construct($id, $idtransaction)
    {
        $this->id = $id;
        $this->idtransaction = $idtransaction;
    }
    
    function getId() {
        return $this->id;
    }

    function getIdtransaction() {
        return $this->idtransaction;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdtransaction($idtransaction) {
        $this->idtransaction = $idtransaction;
    }


}
