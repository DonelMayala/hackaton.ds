<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Serveur
 *
 * @author junio_kawel
 */
class Serveur {
    private $db;
   
    public function __construct(){
			$this->db = ConnexionDB::getConnexion();
	}
        
      public function enregistrerTransaction($idpuis, $typetransaction){
        return True;
    }
    public function genereCodeCoupon($idcoupon) {
        
    }
    public function getAlltransaction($idtransaction) {
        
    }
}
