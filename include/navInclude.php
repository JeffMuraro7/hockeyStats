<nav>
    <ul>
        <?php
            if(isset($_SESSION['userLog'])) {
                echo "<li><a href='index.php'>Bienvenue</a></li>
                      <li><a href='profil.php'>Profil</a></li>
                      <li><a href='statistiques.php'>Statistiques</a></li>
                      <li><a href='./FunctionPHP/deconnexion.php'>Deconnexion</a></li>";
            } else {
                echo "<li><a href='index.php'>Bienvenue</a></li>
                      <li><a href='aPropos.php'>A propos</a></li>
                      <li><a href='inscription.php'>Inscription</a></li>";
            }
        ?>
    </ul>
</nav>

