<?php
$text= 'Correva l anno 1994 quando Rasmus Lerdorf, giovane programmatore groenlandese, ipotizzò un nuovo linguaggio di programmazione per rendere le pagine web più dinamiche: l 8 giugno 1995 presentò la prima versione di PHP. PHP è un acronimo ricorsivo che sta per “PHP: Hypertext Preprocessor”, anche se in origine stava per “Personal Home Page Tools”. Si tratta di un linguaggio di scripting definito server side, ovvero un linguaggio che risiede in un server in remoto e che interpreta le istruzioni del client, le elabora e le restituisce al client che ha formulato la richiesta. PHP è infatti un linguaggio interpretato, ovvero esiste un programma, chiamato appunto “interprete”, che si occupa di tradurre il codice PHP in un linguaggio comprensibile al computer.';

$replace = $_GET['replace_word'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sostituisci</title>
</head>

<body>
  <p>
    <?php
    echo $text;
    echo $censured_text = strlen(str_replace($replace, '***' ,$text));
    ?>
  </p>
  <p>
    Il testo e' lungo:
    <?php echo strlen($text) ?> caratteri
  </p>
  <p>
    Testo con Censura:
    <?php echo str_replace($replace, '***' ,$text); ?>
  </p>
  <p>
    Il testo ora e' lungo: <?php echo $censured_text; ?>
  </p>
</body>

</html>