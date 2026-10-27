```php
<?php

// Listes de données
$noms = [
    'Aron', 'Borin', 'Elwen', 'Galdor', 'Lina',
    'Mira', 'Thorin', 'Kael', 'Nalia', 'Eldric'
];

$sexes = [
    'Homme',
    'Femme'
];

$races = [
    'Humain',
    'Nain',
    'Elfe'
];

$metiers = [
    'Guerrier',
    'Magicien',
    'Voleur'
];

// Génération aléatoire
$nom = $noms[array_rand($noms)];
$sexe = $sexes[array_rand($sexes)];
$age = random_int(18, 100);
$race = $races[array_rand($races)];
$metier = $metiers[array_rand($metiers)];

// Affichage
echo "===== PERSONNAGE =====<br>";
echo "Nom : " . $nom . "<br>";
echo "Sexe : " . $sexe . "<br>";
echo "Age : " . $age . " ans<br>";
echo "Race : " . $race . "<br>";
echo "Métier : " . $metier . "<br>";

?>
```
