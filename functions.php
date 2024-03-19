<?php
function MixPassword($selectedChars, $passwordLength) {
    // Mescola l'array di caratteri
    shuffle($selectedChars);

    // Genera la password
    $password = "";
    for ($i = 0; $i < $passwordLength; $i++) {
        $password .= $selectedChars[$i];
    }

    return $password;
    
}