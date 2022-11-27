<?php
$pret=find_all_pret_encours();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>Nom d'adherent</th>
                <th>Numero de telephone</th>
                <th>Adresse</th>
                <th>Titre d'ouvrages</th>
                <th>Statut de Pret</th>
            </tr>
            <?php foreach ($pret as $value):?>
                <tr>
                   <td><?= $value['nom_complet'] ?></td>
                    <td><?= $value['numero'] ?></td>
                    <td><?= $value['adresse'] ?></td>
                    <td><?= $value['titre'] ?></td>
                    <td><?= $value['statut'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>