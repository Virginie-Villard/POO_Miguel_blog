<?php

class BilletPro extends Billet {
    public function __construct($tab) {
    parent::__construct($tab);
    }

    public function __toString() {
        return  parent::getInfo() .'<br/>Membre premium *';
    }
    public function affiche() {
          parent::affiche();
    }
}

?>