<?php
    
?>

<h1>
    <?php
        if(isset($_SESSION['pseudoUser'])) {
            echo $_SESSION['pseudoUser'];
        } else {
            echo 'Il y a un problème';
        }
    ?>
</h1>