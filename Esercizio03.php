<?php 
/*
Scrivere un programma funzionale che, dato un numero in input ($max), stampi a video:
PRIMA tutti i numeri Dispari
DOPO tutti i numeri PARI
//Esempio max = 10
1,3,5,7,9
0,2,4,6,8,10*/


function numero($max){
    for ( $a = 1; $a <= $max; $a++) {
        if ($a % 2 !== 0) {
            echo 'numero dispari ' . $a. "\n";
        }
    }

    for ( $a = 1; $a <= $max; $a++) {
        if ($a % 2 === 0) {
            echo 'numero pari ' . $a. "\n";
        }
    }
}

numero(14);