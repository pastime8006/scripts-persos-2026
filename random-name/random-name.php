<?php

$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
$nom = '';

for ($i = 0; $i < 7; $i++) {
    $nom .= $caracteres[random_int(0, strlen($caracteres) - 1)];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">          
    <title>Document</title>
</head>
<body>

    <div class="container">
            <h1>VOILA UN NOUVEAU NOM</h1>
            <form action="">
                <input type="submit" value="Générer un nouveau nom">
                <input type="text" name="nom" value="<?php echo $nom; ?>">
            </form>
    </div>

</body>
</html>





