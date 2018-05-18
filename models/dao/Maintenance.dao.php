<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Maintenance
 *
 * @author Mayala
 */
class Maintenance {
    private $db;
   
    public function __construct(){
			$this->db = ConnexionDB::getConnexion();
	}
        public function arrangerPuit($idpuis) {
            
            
        }
        public function contacterAgent($idagent) { }

     
 }

