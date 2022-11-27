<?php
$ouvrages= find_all_ouvrage_disponible();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>Titre</th>
                <th>Rayon</th>
                <th>Statut</th>
            </tr>
            <?php foreach ($ouvrages as $value):?>
                <tr>
                   <td><?= $value['titre'] ?></td>
                    <td><?= $value['rayon'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                    <td><?= $value['statut'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>