<?php



/**
 * Description of Transaction
 *
 * @author junio_kawel
 */
class Transaction {
    private  $id;
    private  $idpuis;
    private  $date;
    private  $type;

    public function __construct($id,$idpuis,$date,$type)
    {
        $this->id = $id;
        $this->idpuis;
        $this->date;
        $this->type;
    }
    
    function getId() {
        return $this->id;
    }

    function getIdpuis() {
        return $this->idpuis;
    }

    function getDate() {
        return $this->date;
    }

    function getType() {
        return $this->type;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdpuis($idpuis) {
        $this->idpuis = $idpuis;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setType($type) {
        $this->type = $type;
    }

}
