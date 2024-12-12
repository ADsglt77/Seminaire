<?php 
include "./vue/entete.php";
?>

<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <th>Conférence</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Profession</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($conferences as $conference) {
            if (!empty($conference->participants)) {
                foreach ($conference->participants as $participant) {
                    echo "<tr>";
                    echo "<td>" . $conference->id . ' - ' . $conference->creneau . ' - ' . $conference->description . "</td>";
                    echo "<td>" . $participant->nom . "</td>";
                    echo "<td>" . $participant->prenom . "</td>";
                    echo "<td>" . $participant->ville . "</td>";
                    echo "<td>" . $participant->profession . "</td>";
                    echo "<td>" . $participant->mail . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td colspan='6'>Aucun participant inscrit pour la conférence : " . $conference->id . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </tbody>
</table>

<?php 
include "./vue/pied.php";
?>
