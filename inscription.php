<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    include './FunctionPHP/function.php';
    
    $err_form = false;
    
    if(isset($_REQUEST['inscription'])) {
        
        if($_REQUEST['prenom']=="" || $_REQUEST['nom']=="" || $_REQUEST['email']=="" || $_REQUEST['birthday']=="" || $_REQUEST['team']=="" || $_REQUEST['position']=="" || $_REQUEST['pseudo']=="" || $_REQUEST['password']=="") {
            $err_form = true;
        } else {
            $err_form = false;
            
            $prenom = $_REQUEST['prenom'];
            $nom = $_REQUEST['nom'];
            $email = $_REQUEST['email'];
            $birthday = $_REQUEST['birthday'];
            $equipe = $_REQUEST['team'];
            $poste = $_REQUEST['position'];
            $pseudo = $_REQUEST['pseudo'];
            $password = $_REQUEST['password'];
            $status = '0'; 
            
            insertUser($prenom, $nom, $email, $birthday, $equipe, $poste, $pseudo, $password, $status);
        }
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="./css/myStyle.css" rel="stylesheet" type="text/css"/>
        <!-- Lien css pour le formulaire -->
        <link href="./css/myInscription.css" rel="stylesheet" type="text/css"/> 
        
        <link href="./css/myNav.css" rel="stylesheet" type="text/css"/>
        <link href="./css/myFont.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="./script.js"></script>
        <title>Hockey Stats - A propos</title>
    </head>
    <body>
        
        <?php
            
        include './include/headerInclude.php';
        include './include/navInclude.php';
        
        ?>
        
        <div id="contenu">
            <section>
                <article id="articleInscription">
                    <form action="">
                        <fieldset>
                            <legend>
                                <h1>Inscription</h1>
                            </legend>
                            <input type="text" name="prenom" placeholder="Prenom" autofocus />
                            <input type="text" name="nom" placeholder="Nom" />
                            <input type="email" name="email" placeholder="E-mail" />
                            <input type="date" name="birthday" placeholder="Date de naissance" />
                            <select name="team">
                                <option value="" disabled selected>Votre équipe</option>
                                <option value="cpmeyrin">CPMeyrin</option>
                                <option value="gshc">Genève Servette HC</option>
                                <option value="troischene">HC Trois-Chênes</option>
                                <option value="morges">HC Morges</option>
                                <option value="lhc">Lausanne HC</option>
                            </select>
                            <select name="position">
                                <option value="" disabled selected>Ta position</option>
                                <option value="attaquant">Attaquant</option>
                                <option value="défenseur">Défenseur</option>
                            </select>
                            <input type="text" name="pseudo" placeholder="Pseudo" />
                            <input type="password" name="password" placeholder="Mot de passe" /></br>
                            
                            <?php 
                                if($err_form == TRUE){
                                    echo '<p class="erreur_form"> Il y a un champ vide! Veuillez remplir tout les champs!</p>';
                                } else {
                                    echo '<p></p>';
                                }
                            ?>
                            
                            <input type="submit" name="inscription" value=" Inscription " onclick="location.href='index.php'" class="myButton">
                            <input type="button" name="annuler" value=" Annuler " onclick="location.href='index.php'" class="myButton">
                        </fieldset>
                    </form>
                </article>
            </section>
            <aside>
                <div id="reseauSociauxInscription">
                    <img src="img/facebook64.png" class="sociale" />
                    <img src="img/twitter64.png" class="sociale" />
                    <img src="img/instagram64.png" class="sociale" />
                </div>
            </aside>
        </div>
        
        <?php
        include './Include/footerInclude.php';
        ?>
    </body>
</html>

