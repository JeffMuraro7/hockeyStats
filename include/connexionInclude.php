<?php
    include './FunctionPHP/function.php';

    $err_connexion = false;
    
    if(isset($_REQUEST['connexion'])) {
        if($_REQUEST['pseudoConnexion']=="" || $_REQUEST['passwordConnexion']=="") {
            $err_connexion = true;
        } else {
            $err_connexion = false;
            
            $pseudo = $_REQUEST['pseudoConnexion'];
            $password = $_REQUEST['passwordConnexion'];
            
            loginUser($pseudo, $password);
        }
    }
?>

<form action="" method="post">
    <fieldset>
        <legend>
            <h1>Connexion</h1>
        </legend>
        <input type="text" name="pseudoConnexion" placeholder="Pseudo" />
        <input type="password" name="passwordConnexion" placeholder="Mot de passe" />
        
        <?php 
            if($err_connexion == TRUE){
                echo '<p class="erreur_form"> Il y a un champ vide!</p>';
            }
        ?>
        
        <input type="submit" name="connexion" value=" Connexion " class="myButton">
        <input type="button" name="inscription" value=" Inscription " onclick="location.href='inscription.php'" class="myButton">
    </fieldset>
</form>