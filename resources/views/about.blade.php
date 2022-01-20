<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <title>Starry X About</title>
    </head>
    <body>
        <h1> Halaman About </h1>
        <h3> <?= $nama; ?> </h3>
        <p> <?= $email; ?> </p>
        <img src="images/<?php echo $gambar; ?>" alt="<?php echo $nama; ?>" width="338px">
    </body>
</html>