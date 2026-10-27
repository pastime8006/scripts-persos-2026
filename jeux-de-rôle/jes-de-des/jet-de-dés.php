<?php

function lancerDes(int $nombre, int $faces): array
{
    $resultats = [];

    for ($i = 0; $i < $nombre; $i++) {
        $resultats[] = random_int(1, $faces);
    }

    return $resultats;
}

// Exemples
$d6  = lancerDes(1, 6);
$d8  = lancerDes(1, 8);
$d10 = lancerDes(1, 10);
$d12 = lancerDes(1, 12);
$d20 = lancerDes(1, 20);

echo "2d6 : " . implode(" + ", $d6) . " = " . array_sum($d6) . PHP_EOL;
echo "1d8 : " . $d8[0] . PHP_EOL;
echo "1d10 : " . $d10[0] . PHP_EOL;
echo "1d12 : " . $d12[0] . PHP_EOL;
echo "1d20 : " . $d20[0] . PHP_EOL;
?>

<table> 
    <tr>
        <th>Type de dé</th>
        <th>Résultat</th>
    </tr>
    <tr>
        <td>1d6</td>
        <td><?php echo implode(" + ", $d6) . " = " . array_sum($d6); ?></td>
    </tr>
    <tr>
        <td>1d8</td>
        <td><?php echo $d8[0]; ?></td>
    </tr>
    <tr>
        <td>1d10</td>
        <td><?php echo $d10[0]; ?></td>
    </tr>
    <tr>
        <td>1d12</td>
        <td><?php echo $d12[0]; ?></td>
    </tr>
    <tr>
        <td>1d20</td>
        <td><?php echo $d20[0]; ?></td>
    </tr>
</table>                    