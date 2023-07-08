<?php
    include_once './Models/model.php';
    function afficheAction(){
        $stagiaire = affichage();
        require_once './Views/list.php';
    }
    function creatAction(){
        require_once './Views/creation.php';
    }
    function Ajout_To_bdAction(){
        creat();
        header("location:index.php");
    }
    function supprimerAction(){
        $id=$_GET['id'] ;
        require_once './Views/suppresion.php';
    }
    function Supprimer_Action(){
        $id=$_GET['id'] ;
        supprimer($id);
        header("location:index.php");
    }
    function modifier_Action(){
        $id=$_GET['id'] ;
        $list = update($id);
        require_once './Views/modifier.php';
    }
    function modifierAction(){
        $id=$_POST['id'] ;
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $login=$_POST['login'];
        modifier($id,$nom,$prenom,$email,$login);
        header("location:index.php");
    }