<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
        // put your code here
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="css/myStyle.css" rel="stylesheet" type="text/css"/>
        <link href="css/myConnexion.css" rel="stylesheet" type="text/css"/>
        <link href="css/myNav.css" rel="stylesheet" type="text/css"/>
        <link href="css/myFont.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        <title>Hockey Stats - Bienvenue</title>
    </head>
    <body>
        
        <?php
            
        include './include/headerInclude.php';
        include './include/navInclude.php';
        
        ?>
        
        <div id="contenu">
            <section>
                <article id="articleIndex">
                    <h1>Bienvenue</h1>
                    <p>Vous êtes sur HockeyStats le sites spécialisé dans les statistiques personnels de hockey.</p>
                </article>
            </section>
            <aside>
                <form action="">
                    <fieldset>
                        <legend>
                            <h1>Connexion</h1>
                        </legend>
                        <input type="text" name="pseudoConnexion" placeholder="Pseudo" />
                        <input type="password" name="passwordConnexion" placeholder="Mot de passe" />
                        <input type="submit" name="connexion" value=" Connexion " class="myButton">
                        <input type="button" name="inscription" value=" Inscription " onclick="location.href='inscription.php'" class="myButton">
                    </fieldset>
                </form>
                <div id="reseauSociaux">
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
