<?php

/*
Pour ce travail, vous devez faire en sorte de lire le contenu du fichier "text.txt"
et, à l'aide des fonctions que nous avons vu en classe, afficher, via la commande echo
chaque ligne du fichier. Mais ATTENTION, les lignes vides ne doivent pas s'afficher!!

Afin de vous aider, voici quelques fonctions que vous aurez besoins pour réaliser ce travail:
file (https://www.php.net/manual/fr/function.file.php) *Prenez soin de regarder la section flags pour les lignes vides
foreach (https://www.php.net/manual/fr/control-structures.foreach.php)
str_pad (https://www.php.net/manual/fr/function.str-pad.php) *Pour ce travail, privilégier STR_PAD_LEFT
*/


$text = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($text as $line) {
    echo $line . '<br>';
}