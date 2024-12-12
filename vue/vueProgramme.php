<?php 
include "./vue/entete.php";
?>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Heure</th>
            <th>Intervenant</th>
            <th>Salle</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($heures as $heure) {
            if (!empty($conferencesParHeure[$heure])) {
                foreach ($conferencesParHeure[$heure] as $conference) {
                    echo "<tr>";
                    echo "<td>" . $heure . "</td>";
                    echo "<td>" . $conference->intervenant . "</td>";
                    echo "<td>" . $conference->salle . "</td>";
                    echo "</tr>";
                }
            }
        }
        ?>
    </tbody>
</table>

<?php 
include "./vue/pied.php";
?>
