<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coupon
 *
 * @author Mayala
 */
class Coupon {
    private $db;
   
    public function __construct(){
			$this->db = ConnexionDB::getConnexion();
	}
        public function renouveller($idcoupon) {
            
        }
        public function acheterCoupon($id,$idcoupon,$quantite,$idtransaction) {
            
        }
        
}
