<?php
    $title = "Modifier stagiaire";
    require_once 'masterPage.php';
?>
<div class="container mx-4">
<form action="./modifier-stagiaire.php" method="post">
    <div class="form-group">
        <input type="hidden" class="form-control" id="id" name="id" value="<?= $list['id'];?>">
    </div>
    <div class="form-group my-3">
        <label for="nom">nom</label>
        <input type="text" class="form-control" name="nom" value="<?= $list['nom']; ?>">
    </div>
    <div class="form-group my-3">
        <label for="prenom">prenom</label>
        <input type="text" class="form-control" name="prenom" value="<?= $list['prenom']; ?>">
    </div>
    <div class="form-group my-3">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email" value="<?= $list['email']; ?>">
    </div>
    <div class="form-group my-3">
        <label for="login">login</label>
        <input type="text" class="form-control" name="login" value="<?= $list['login']; ?>">
    </div>
    <div class="form-group">
    <!-- <a href="./modifier-stagiaire.php?id=<?php echo $id ?>" class="btn btn-primary  m-3">Modifier</a> -->
    <input type="submit" class="btn btn-primary  m-3" value="Modifier">
    </div>
</form>
</div>
<?php require_once 'masterPage.php';?>