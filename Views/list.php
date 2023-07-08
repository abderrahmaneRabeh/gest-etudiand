<?php
    $title = "list de stagiaire";
    require_once 'masterPage.php';
?>
<div class="container m-4">
<a href="./creat.php" class="btn btn-primary">Ajouter un stagiaire</a>
    <table class="table table-striped m-4">
    <thead>
        <tr class="text-center">
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>login</th>
            <th>Action</th>
        </tr>
    </thead>
    <?php foreach ($stagiaire as $list) :  ?>
    <tbody>
        <tr class="text-center">
            <td><?= $list['id']; ?></td>
            <td><?= $list['nom']; ?></td>
            <td><?= $list['prenom']; ?></td>
            <td><?= $list['email']; ?></td>
            <td><?= $list['login']; ?></td>
            <td>
                <a href="supprimer.php?id=<?php echo $list['id']; ?>" class="btn btn-danger btn-sm">supprimer</a>
                <a href="modifie.php?id=<?php echo $list['id']; ?>" class="btn btn-success btn-sm">modifier</a>
            </td>
        </tr>
    </tbody>
    <?php endforeach; ?>
    </table>
</div>
<?php require_once 'masterPage.php';?>