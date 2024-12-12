<?php 
include "./vue/entete.php";
print_r($_SESSION);
?>

<form action="./?action=choixconferences" method="POST">
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Heure</th>
                <th>Salle</th>
                <th>Choix</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($heures as $heure) {
                if (!empty($conferencesParHeure[$heure])) {
                    foreach ($conferencesParHeure[$heure] as $conference) {
                        echo "<tr>";
                        echo "<td>" . $heure . "</td>";
                        echo "<td>" . $conference->salle . "</td>";
                        echo "<td><input type='radio' name='choix_{$heure}' value='{$conference->id}'></td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
        </tbody>
    </table>

    <br><br>

    <table>
        <tr>
            <td><input type="submit" value="Valider" name="btn"></td>
            <td><input type="reset" value="Annuler" name="btn"></td>
        </tr>
    </table>
</form>

<?php 
include "./vue/pied.php";
?>
