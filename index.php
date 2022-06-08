<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>badwords</title>
</head>
<body>
  <?php 
    $paragraph = "Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.";

    $bad_word = $_GET['censor'];
  ?>

  <p>
    <?php echo $paragraph?>
  </p>

  <p>
    <?php 
    $censored_paragraph = str_replace($bad_word, "***", $paragraph);
    echo strlen($censored_paragraph);
    echo $censored_paragraph;
    ?>
  </p>
</body>
</html>