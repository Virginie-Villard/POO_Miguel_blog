<?php
// liste des 5 derniers billets

//Création d'une class Billet
class Billet
{
    protected int $id = 0;   // L'id du billet
    protected string $titre = ''; // Le titre du billet
    protected string $contenu = ''; // Le contenu du billet 
    
    public function hydrate(array $donnees) {
        foreach ($donnees as $key => $value) {
            // On fabrique le nom du setter correspondant à l'attribut :
            // ucfirst met la première lettre du mot en majuscule, ça crée donc un nom setKey en camelCase !
            $setter = 'set'.ucfirst($key);
            // Si le setter correspondant existe :
            if (method_exists($this, $setter)) {
                // On appelle le setter = $setter contient son nom !!!
                $this->$setter($value);
            }
        }
    }

    public function getInfo() {
        return $this->titre;
    }

    public function affiche() {
        var_dump($this);
     }
     
    public function __construct($tab) {
        $this->hydrate($tab);
        var_dump($tab);
    }

    // setteurs
    private function setTitre($titre) {
        $this->titre = $titre;
        var_dump($titre);
    }
    private function setcontenu($contenu) {
        $this->contenu = $contenu;
        var_dump($contenu);
    }
}

?>