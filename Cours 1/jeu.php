<?php

include_once './Personnage.class.php';

$bleu = new Personnage("Joueur Bleu", 600, 90);

$rouge = new Personnage("Joueur Rouge", 30, 700);


$bleu->combat($rouge);
