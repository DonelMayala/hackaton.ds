<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Agent
 *
 * @author junio_kawel
 */
class Agent {
    private $db;
   
    public function __construct(){
			$this->db = ConnexionDB::getConnexion();
	}
        
      public function Seconnecter($id, $login,$password){
        return True;
    }
    public function renouvellerCoupon($idcoupon, $montant){
        return true;
        
    }
    public function enregistrerTransaction($idtransaction){
        return true;
        
    }
    public function payer($quantite, $montant){
        return true;
    }
    public function envoyer($idpuit, $typepanne, $description){
        return true;
    }
}

