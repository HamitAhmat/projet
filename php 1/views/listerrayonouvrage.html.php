<?php
$ouvrages= find_all_ouvrage_auteur_rayon();
?>
<div class="conteneur">
    <div class="classe">
        <table>
            <tr>
                <th>Titre</th>
                <th>Rayon</th>
            </tr>
            <?php foreach ($ouvrages as $value):?>
                <tr>
                   <td><?= $value['titre'] ?></td>
                    <td><?= $value['rayon'] ?></td> <!-- syntaxe abrégée de celui du haut-->
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</div>