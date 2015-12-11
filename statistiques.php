<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
    session_start();
    
    if(!isset($_SESSION['userLog'])) {
        header('location: index.php');
    } 
    
?>

<html>
    <head>
        <meta charset="UTF-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="./css/myStyle.css" rel="stylesheet" type="text/css"/>
        <link href="./css/myConnexion.css" rel="stylesheet" type="text/css"/>
        <link href="./css/myNav.css" rel="stylesheet" type="text/css"/>
        <link href="./css/myFont.css" rel="stylesheet" type="text/css"/>
        <link href="css/myProfilInclude.css" rel="stylesheet" type="text/css"/>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="./script.js"></script>
        <title>Hockey Stats - Statistiques</title>
    </head>
    <body>
        
        <?php
            
        include './include/headerInclude.php';
        include './include/navInclude.php';
        
        ?>
        
        <div id="contenu">
            <section>
                <article id="articleAPropos">
                    <h1>Statistiques</h1>
                    <input type="button" value="Nouvel stats" onclick="location.href='addStats.php'" />
                </article>
            </section>
            <aside>
                
                <?php  
                        include './include/profilInclude.php';
                ?>
                
            </aside>
        </div>
        
        <?php
        include './Include/footerInclude.php';
        ?>
    </body>
</html>

