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
                    
                    <table>
                        <caption>
                            <h1>Votre profil</h1>
                        </caption>
                        <tr>
                            <td colspan="2">
                                <?php
                                    if (isset($_SESSION['pseudoUser'])) {
                                        echo $_SESSION['pseudoUser'];
                                    } else {
                                        echo 'Il y a un problème';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Nom</b>
                            </td>
                            <td>
                                <?php
                                    if (isset($_SESSION['nomUser'])) {
                                        echo $_SESSION['nomUser'];
                                    } else {
                                        echo 'Il y a un problème';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Prenom</b>
                            </td>
                            <td>
                                <?php
                                    if (isset($_SESSION['prenomUser'])) {
                                        echo $_SESSION['prenomUser'];
                                    } else {
                                        echo 'Il y a un problème';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Date de naissance</b>
                            </td>
                            <td>
                                <?php
                                    if (isset($_SESSION['birthdayUser'])) {
                                        echo $_SESSION['birthdayUser'];
                                    } else {
                                        echo 'Il y a un problème';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Equipe</b>
                            </td>
                            <td>
                                <?php
                                    if (isset($_SESSION['teamUser'])) {
                                        echo $_SESSION['teamUser'];
                                    } else {
                                        echo 'Il y a un problème';
                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <b>Poste</b>
                            </td>
                            <td>
                                <?php
                                    if (isset($_SESSION['posteUser'])) {
                                        echo $_SESSION['posteUser'];
                                    } else {
                                        echo 'Il y a un problème';
                                    }
                                ?>
                            </td>
                        </tr>
                    </table>
                    
                </article>
            </section>
        </div>
        
        <?php
        include './Include/footerInclude.php';
        ?>
    </body>
</html>