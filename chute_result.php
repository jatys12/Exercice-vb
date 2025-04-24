<!DOCTYPE html>
<html>
<head>
    <title>Résultat - Chute Libre</title>
</head>
<body>
    <h2>Résultat pour <?= esc($astre) ?> après <?= esc($temps) ?> secondes :</h2>
    <p>Champ de pesanteur : <?= esc($g) ?> N/kg</p>
    <p>Distance parcourue : <?= esc(round($distance, 2)) ?> m</p>
    <p>Vitesse acquise : <?= esc(round($vitesse, 2)) ?> m/s</p>

    <h3>Tableau de variation (bonus) :</h3>
    <table border="1">
        <tr>
            <th>Temps (s)</th>
            <th>Distance (m)</th>
            <th>Vitesse (m/s)</th>
        </tr>
        <?php
        for ($i = 0; $i <= $temps; $i++) {
            $d = $g * $i * $i / 2;
            $v = $g * $i;
            echo "<tr><td>$i</td><td>" . round($d, 2) . "</td><td>" . round($v, 2) . "</td></tr>";
        }
        ?>
    </table>
    <br><a href="/chutelibre">Retour</a>
</body>
</html>
