 <?php 
    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];
    $censura = str_replace($word, '***', $paragraph, $num_censura);


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
    <h2>paragrafo: <?= $paragraph; ?></h2>
    <h2>paragrafo con parola censurata: <?= $word; ?> </h2>
    <p> paragrafo con parola censurata: <?= $censura; ?> </p>
    <p> parole censurate: <?= $num_censura;?></p>
    <h4>lunghezza paragrafo: <?= strlen($paragraph);?></h4>
</body>
</html>