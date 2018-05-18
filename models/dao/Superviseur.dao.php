<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Superviseur
 *
 * @author junio_kawel
 */
class Superviseur {
    private $db;
    public function __construct(){
			$this->db = ConnexionDB::getConnexion();
	}
        
      public function Seconnecter($id, $login,$password){
        return True;
    }
    public  function geolocaliserPuits($idpuis){
        
    }
    public function voirEtatPuits($idagent,$idpuis){
        
    }
    public function modifierEtat($idpuis,$donnateur) {
        
    }
    public function voirAgenda($idpuis,$date,$idagent){}
public function ajouterContact($idmaintenance) {
    
}
public function contacterIngenieur($idmaintenance) {}
public function editerRapport($idtransaction) {}

}
