<?php

session_start();

if(isset($_SESSION['username'])){
if(isset($_GET['action'])){
if($_GET['action']=='add'){
?>

<form action="" method="post">
<h3>Titre du produit: </h3><input type="text" name="title"/>
<h3>Description du produit: </h3><input type="text" name="description"/>
<h3>Prix du produit: </h3><input type="text" name="price"/><br/><br/>
<input type='submit' name='submit'/>
</form>

<?php
    }else if($_GET['action']=='modify'){
    }else if($_GET['action']=='delete'){
    }else{
        die('Une erreur est apparue');
    }
}else{
    header('Location: index.php');
}
?>

<h1>Bienvenue: <?php echo $_SESSION['username']; ?> </h1>
<a href="?action=add">Ajouter un produit</a>
<a href="?action=modify">Modifier un produit</a>
<a href="?action=delete">Supprimer un produit</a>