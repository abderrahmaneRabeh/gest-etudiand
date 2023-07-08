<?php
    $title = "supprimer stagiaire";
    require_once 'masterPage.php';
?>
<div class="container text-center my-5">
    <p class="h3 text-danger">Voulez vous vraiment supprimer le stagiaire</p>
    <a href="./Supp-stagiaire.php?id=<?php echo $id ?>" class="btn btn-danger  m-3">Supprimer</a>
    <a href="./index.php" class="btn btn-success m-3">Annuler</a>
</div>
<?php require_once 'masterPage.php';?>