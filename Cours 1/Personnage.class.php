<?php

class Personnage
{
    //Propriétés
    private $nom = "";
    private $force = 0;
    private $experience = 1;
    private $pv = 0;

    //Méthodes

    public function __construct($n, $f, $hp)
    {
        //Initialisation des propriétés
        $this->nom = $n;
        $this->force = $f;
        $this->pv = $hp;
        echo "Un nouveau personnage a été créé !<br>";
        echo "Nom : " . $this->nom . "<br>";
        echo "Force : " . $this->force . "<br>";
        echo "Points de vie : " . $this->pv . "<br>";
    }
    
    
    //get/set Nom
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function getNom()
    {
        return $this->nom;
    }

    //get/set Force
    public function setForce($f)
    {
        $this->force = $f;
    }

    public function getForce()
    {
        return $this->force;
    }

    //get/set PV
    public function setPV($hp)
    {
        $this->pv = $hp;
    }

    public function getPV()
    {
        return $this->pv;
    }

    //get/set Experience
    public function setExperience($exp)
    {
        $this->experience = $exp;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function combat(Personnage $p)
    {
        // Simule un combat à mort entre deux personnages
        echo "Le combat entre " . $this->nom . " et " . $p->nom . " commence !<br>";
        while ($this->pv > 0 && $p->pv > 0) {
            $this->frapper($p);
            if ($p->pv <= 0) {
                break;
            }
            $p->frapper($this);
        }
        if ($this->pv <= 0) {
            echo $this->nom . " a perdu le combat !<br>";
        } else {
            echo $this->nom . " a gagné le combat !<br>";
            $this->gagnerExperience(20);
        }
    }
    public function gagnerExperience($points)
    {
        // Le personnage gagne de l'expérience
        echo $this->nom . " gagne de l'expérience !<br>";
        echo "$points points d'expérience gagnés <br>";
        $this->experience += $points;
        echo "Nouvelle expérience : " . $this->experience . "<br>";

    }
    public function frapper(Personnage $p)
    {
        // Le personnage frappe un autre personnage
        $p->pv -= $this->force;
        echo $this->nom . " a frappé " . $p->nom . " ! Il reste " . $p->pv . " points de vie à " . $p->nom . " !<br>";
        $this->gagnerExperience(5);
    }
    public function parler()
    {
        // Le personnage se présente
        echo "Bonjour, je suis " . $this->nom . "<br>";
    }
    
   
}