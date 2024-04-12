<?php
  
  $paragrafo = $_GET["paragrafo"];

  $censura = $_GET["censura"]

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
  <h1>Censura: <?php echo $censura ?></h1>

</div>
  
</body>
</html>