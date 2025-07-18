<?php

//ESERCIZIO 2
//Dato il seguente array associativo:

$persons = [
  [
    'name' => 'Marco',
    'age' => 18,
  ],
  [
    'name' => 'Vanessa',
    'age' => 12,
  ],
  [
    'name' => 'Jack',
    'age' => 34,
  ],
  [
    'name' => 'Maria',
    'age' => 55,
  ],
];
//Scrivere un programma utilizzando le funzioni in grado di controllare l’ età  di ogni persona e stampare a video se:
//Maggiore o uguale di 18: "$nome_persona può votare"
//Minore di 18: "$nome_persona non può votare"


function controlloEta($nome, $eta) {
    if ($eta >= 18) {
        return "$nome può votare";
    } else {
        return "$nome non può votare";
    }
}


function verificaPersone($persone) {
    foreach ($persone as $persona) {
        echo controlloEta($persona['name'], $persona['age']) . "\n";
    }
}


verificaPersone($persons);