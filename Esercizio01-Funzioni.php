<?php
/*
ESERCIZIO 1
Utilizzando un approccio funzionale (piccole funzioni che risolvono un piccolo problema), riscrivere il programma fatto in precedenza che stampi in console tutti i numeri da 1 a 30.
Se il numero eʼ multiplo di 3, non deve stampare il numero ma “PHPˮ;
Se multiplo di 5 deve stampare “JAVASCRIPTˮ;
Se multiplo di 3 e 5 15 deve stampare Talentform";
*/
/*
function controllo($a){
   if ($a % 3 == 0 || $a % 5 == 0  ) {
    if ($a % 3 == 0 && $a % 5 == 0 ){
            //  echo "Il numero ". $i ." è multiplo di 3 e 5 ". "\n";
              echo "Talentform". "\n";
          } else if ($a % 5 == 0){
            //  echo "Il numero ". $i ." è multiplo di 5 ". "\n";
              echo "JAVASCRIPT". "\n";
          } else if ($a % 3 == 0 ){
            //  echo "Il numero ". $i ." è multiplo di 3 ". "\n";
              echo "PHP". "\n";
          } 
        } else  {
          echo $a. "\n";
          //  echo "Il numero ". $i ." non è multiplo ne de 3 ne di 5 ". "\n";
          }
}


function stampaNumeri($numeros) {
    for ($i = 1; $i <= $numeros; $i++) {
       // echo $i . " ";
        controllo($i);
    }
}

stampaNumeri(30);


*/
    
  
  function numero($n){
    for ( $i = 1; $i <= $n; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "Il numero ". $i ." è multiplo di 3 e 5 ". "\n";
        } else if ($i % 5 === 0) {
            echo "Il numero ". $i ." è multiplo di 5 ". "\n";
        } else if ($i % 3 === 0) {
            echo "Il numero ". $i ." è multiplo di 3 ". "\n";
        } else {
            echo $i;
        }
    }
}

numero(15);