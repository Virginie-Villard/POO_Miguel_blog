<?php
class BilletManager
{
    private $bdd; // Instance de bdd.
    public function __construct($bdd) {
        $this->bdd = $bdd;
    }

    public function insert(Billet $billet){
        //
    }

    public function getList(){
        $billets = [];
        $reqSQL='SELECT *   FROM billet' ;
        $bddStat = $this->bdd->query($reqSQL);

        while ($donnees = $bddStat ->fetch(PDO::FETCH_ASSOC)) {
            $billets[] = new Billet($donnees);
        }
    return $billets;
    }
    public function count(){
        //
    }
}