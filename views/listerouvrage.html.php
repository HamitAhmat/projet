<?php
$ouvrages= find_all_ouvrage_auteur_rayon();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>Code</th>
                <th>Titre</th>
                <th>Auteurs</th>
                <th>Rayon</th>
                <th>Date d'edition</th>
            </tr>
            <?php foreach ($ouvrages as $value):?>
                <tr>
                <td><?= $value['code'] ?></td>
                   <td><?= $value['titre'] ?></td>
                    <td>
                    <?php echo (implode(",",$value['auteur'])) ?>
                    </td> 
                    <td><?= $value['rayon'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                    <td><?= $value['date_d_edition'] ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>