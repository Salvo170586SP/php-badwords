<?php 

//creo variabile della frase
$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque ex vero quibusdam maiores natus";

//creo variabile con la chiava 'parola'
$word = $_GET ? $_GET['parola'] : '';

//creo variabile della frase con la parola da sostituire
$text_censured = str_replace( $word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $text ?></p>
    <p> il testo è grande <?php echo strlen($text) ?> caratteri </p>
    <hr>
    <p><?php echo $text_censured ?></p>
</body>
</html>