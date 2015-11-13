<!DOCTYPE html>
<?php
    session_start();
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
        <link href="css/myProfil.css" rel="stylesheet" type="text/css"/>
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
            <section id="sectionProfil">
                <article id="articleIndex">
                    <h1>Profil</h1>
                    
                </article>
            </section>
        </div>
        
        <?php
        include './Include/footerInclude.php';
        ?>
    </body>
</html>