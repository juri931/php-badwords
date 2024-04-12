<?php
  
  $paragrafo = $_POST["paragrafo"];

  $censura = $_POST["censura"];

  $lunghezza_stringa = strlen($paragrafo);

  $parola_censurata = str_replace($censura, '***', $paragrafo);

  $lunghezza_censurata = strlen($parola_censurata);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css'
    integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ=='
    crossorigin='anonymous' />
  <title>PHP Badwords Landing</title>
</head>
<body>

<div class="container m-5 ">
  <h1 class="my-5">Ed ecco i dati inviati</h1>
  
  <h1>Paragrafo: <?php echo $paragrafo ?></h1>
  <h3>La lunghezza del paragrafo è di <?php echo $lunghezza_stringa?> caratteri</h3>


  <h1>Censura: <?php echo $parola_censurata ?></h1>
  <h3>La lunghezza del paragrafo è di <?php echo $lunghezza_censurata?> caratteri</h3>


</div>
  
</body>
</html>