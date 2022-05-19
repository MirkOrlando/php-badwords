<?php

/* Creare una variabile con 
un paragrafo di testo a vostra scelta. */
 $text = '
 Io sono un disonesto, 
 e un disonesto puoi sempre confidare che sia disonesto. 
 Onestamente parlando, 
 è dagli onesti che devi guardarti, 
 perché non puoi mai prevedere quando faranno qualcosa di incredibilmente stupido.
 ';

 /* Stampare a schermo il paragrafo e la sua lunghezza. */
 var_dump($text);

 /* Una parola da censurare viene 
passata dall'utente tramite parametro GET. */
$bad_word = $_GET['bad_word'];
var_dump($bad_word);

/* Stampare di nuovo il paragrafo e la sua lunghezza, 
dopo aver sostituito con tre asterischi (***) tutte 
le occorrenze della parola da censurare. */
$new_text = str_replace($bad_word,'***',$text);
var_dump($new_text);

?>