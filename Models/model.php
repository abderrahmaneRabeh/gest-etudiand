<?php
    function connect_bd(){
        return new PDO("mysql:host=localhost;dbname=mvc1", 'root', '');
    }
    function affichage(){
        $cnx=connect_bd();
        $requet=$cnx->prepare("SELECT * FROM stagiaire");
        $requet->execute();
        $list = $requet->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    function creat(){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $login=$_POST['login'];
        $cnx=connect_bd();
        $requet=$cnx->prepare("INSERT INTO stagiaire VALUES (null,?,?,?,?)");
        return $requet->execute([$nom,$prenom,$email,$login]);
    }
    function supprimer($id){
        $cnx=connect_bd();
        $requet=$cnx->prepare("DELETE FROM stagiaire WHERE id = ?");
        $requet->execute([$id]);
    }
    function update($id){
        $cnx=connect_bd();
        $requet=$cnx->prepare("SELECT * FROM stagiaire WHERE id = ?");
        $requet->execute([$id]);
        $list = $requet->fetch(PDO::FETCH_ASSOC);
        return $list;
    }
    function modifier($id,$nom,$prenom,$email,$login){
        $con= connect_bd();
        $requete=$con->prepare("UPDATE stagiaire SET nom=:nom,prenom=:prenom,email=:email,login=:login WHERE id=:id");
        $requete->bindParam(':nom',$nom);
        $requete->bindParam(':prenom', $prenom);
        $requete->bindParam(':email', $email);
        $requete->bindParam(':login', $login);
        $requete->bindParam(':id', $id);
        $requete->execute();
        }
?>
