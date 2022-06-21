<?php

$text = 'Dai cazzo, oggi dobbiamo andare a quella cazzo di festa di quella caca cazzo di Sofia.';
$bad_word = $_GET['censor'];
$text_censored = str_replace($bad_word, '***', $text);

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
  <main>
    <section>
      <h1>Paragrafo non censurato:</h1>
      <p>
        <?= $text ?>
      </p>
      <p>Numero di caratteri: <?= mb_strlen($text) ?>
    </section>

    <section>
      <h1>Paragrafo censurato: (Parola censurata: "<?= $bad_word ?>")</h1>
      <p>
        <?= $text_censored ?>
      </p>
      <p>Numero di caratteri: <?= mb_strlen($text_censored) ?>
    </section>
  </main>
</body>

</html>
