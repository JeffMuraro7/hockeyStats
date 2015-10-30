<?php
    //Muraro Jeff
    require_once('mysqLinc.php');
    
    //Fonction pour la connection � la base de donn�es.
    function getConnection(){

        static $dbh = null;

        try {
            if($dbh === null) {
                $dbh = new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASS);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            echo "Erreur !: " . $e->getMessage() . "<br/>";
            echo 'N° : ' . $e->getCode();
            die('Could not connect to MySQL');
        }

        return $dbh;
    }
    
    function insertUser($prenom, $nom, $email, $birthday, $equipe, $poste, $pseudo, $password, $status) {
        if((isset($prenom)) && (isset($nom)) && (isset($email)) && (isset($birthday)) && (isset($equipe)) && (isset($poste)) && (isset($pseudo)) && (isset($password)) && (isset($status))) {
            $shaPassword = sha1($password);
            
            $user = getConnection()->prepare('INSERT INTO users (prenomUser, nomUser, emailUser, birthdayUser, equipeUser, posteUser, pseudoUser, mdpUser, statutUser) VALUES(:prenom, :nom, :email, :birthday, :equipe, :poste, :pseudo, :password, :status);');
            
            $user->bindParam(':prenom', $prenom, PDO::PARAM_STR);
            $user->bindParam(':nom', $nom, PDO::PARAM_STR);
            $user->bindParam(':email', $email, PDO::PARAM_STR);
            $user->bindParam(':birthday', $birthday, PDO::PARAM_STR);
            $user->bindParam(':equipe', $equipe, PDO::PARAM_STR);
            $user->bindParam(':poste', $poste, PDO::PARAM_STR);
            $user->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
            $user->bindParam(':password', $shaPassword, PDO::PARAM_STR);
            $user->bindParam(':status', $shaPassword, PDO::PARAM_STR);

            $user->execute();
        }
    }
    
    function loginUser($pseudo, $password) {
        
        
        $mdpSHA = sha1($password);
        
        $connect = getConnection()->prepare("SELECT * FROM users WHERE pseudoUser='$pseudo' AND mdpUser='$mdpSHA'");
        $connect->execute();
        $result = $connect->fetch(PDO::FETCH_ASSOC);
        
        if($result) {
            $_SESSION['userLog'] = $result['idUser'];
            $_SESSION['idUser'] = $result['idUser'];
            $_SESSION['pseudoUser'] = $result['pseudoUser'];
            $_SESSION['posteUser'] = $result['posteUser'];
            $_SESSION['teamUser'] = $result['equipeUser'];
            header( "location: index.php" ); 
        }
    }
?>