<?php 

//creo variabile della frase
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ex vero quibusdam maiores natus";

//stampo la frase e la sua lunghezza
var_dump($text);

//creo variabile con la chiava 'parola'
$word = $_GET ? $_GET['parola'] : '';

//creo variabile della frase con la parola da sostituire
$text_censured = str_replace( $word, '***', $text);

//stampo la frase con la parola censurata
echo $text_censured;
?>
