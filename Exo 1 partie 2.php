<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1 : Les conditions</title>
</head>
<body>
    <h1>Exo 1 : Les conditions</h1>
    <?php
      $age= 16;
      if ($age < 18)
      {
      echo 'Vous êtes mineur';
      }
      else {
        echo 'Vous êtes majeur';
      }
    ?>
</body>
</html>