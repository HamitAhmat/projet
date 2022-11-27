<?php
$exemplaires=find_exemplaireouvrage();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>Code de l'exemplaire</th>
                <th>Titre de l'ouvrage</th>
                <th>Rayon</th>
                <th>Date d'enregistrement</th>
                <th>Statut</th>
            </tr>
            <?php foreach ($exemplaires as $value):?>
                <tr>
                   <td><?= $value['code'] ?></td>
                   <td><?= $value['titre'] ?></td>
                    <td><?= $value['rayon'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                    <td><?= $value['dateenre'] ?></td>
                    <td><?= $value['statut'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>