<?php

header("location:message.php");

// Connexion à la base de données
$dsn = 'mysql:dbname=davision;host=127.0.0.1:3306';
$dbUser = 'root';
$dbPwd = '';


try {
$conn = new PDO($dsn, $dbUser, $dbPwd);
    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $rappele = $_POST["rappel"];

    // Insérer la nouvelle donnée dans la table ma_table
    $sql = "UPDATE date_center SET rappel = CONCAT(rappel, '<br>', :rappele)WHERE date_input = date(NOW())";
    $stmt = $conn->prepare($sql);   
    $stmt->bindParam(':rappele', $rappele, PDO::PARAM_STR); 
    $stmt->execute();
    echo "Mise à jour effectuée avec succès.";


    





} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<a href="affichage.php">go sur affichage</a>