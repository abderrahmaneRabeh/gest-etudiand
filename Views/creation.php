<?php
    $title = "Ajouter stagiaire";
    require_once 'masterPage.php';
?>
<div class="container mx-4">
<form action="./AjouteTobd.php" method="post">
    <div class="form-group my-3">
        <label for="nom">nom</label>
        <input type="text" class="form-control" name="nom">
    </div>
    <div class="form-group my-3">
        <label for="prenom">prenom</label>
        <input type="text" class="form-control" name="prenom">
    </div>
    <div class="form-group my-3">
        <label for="email">email</label>
        <input type="text" class="form-control" name="email">
    </div>
    <div class="form-group my-3">
        <label for="login">login</label>
        <input type="text" class="form-control" name="login">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-3" value="Ajouter">
    </div>
</form>
</div>
<?php require_once 'masterPage.php';?>