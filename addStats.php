<?php
    session_start();
    
    if(isset($_SESSION['userLog'])) {
        
    } else {
        location(header('index.php'));
    }
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
                    
                    <form action="">
                        <fieldset>
                            <legend>
                                <h1>Ajouter une stats</h1>
                            </legend>
                            <input type="number" name="but" placeholder=" But " min="0" max="30" autofocus />
                            <input type="number" name="assist" placeholder=" Assist " min="0" max="30" />
                            <input type="number" name="plusMin" placeholder=" +/- " min="-50" max="50" />
                            <input type="number" name="penalite" placeholder=" Pénalité " min="0" max="100" step="2" />
                            
                            <?php 
//                                if($err_form == TRUE){
//                                    echo '<p class="erreur_form"> Il y a un champ vide! Veuillez remplir tout les champs!</p>';
//                                }
//                            ?>
                            
                            <input type="button" name="ajouter" value=" Ajouter stats " onclick="location.href='index.php'" class="myButton">
                            <input type="button" name="annuler" value=" Annuler " onclick="location.href='index.php'" class="myButton">
                        </fieldset>
                    </form>
                    
                </article>
            </section>
        </div>
        
        <?php
        include './Include/footerInclude.php';
        ?>
    </body>
</html>

