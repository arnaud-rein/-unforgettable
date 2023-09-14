<?php

require "message.php";
// Connexion à la base de données
$dsn = 'mysql:dbname=davision;host=127.0.0.1:3306';
$dbUser = 'root';
$dbPwd = '';


try {
$conn = new PDO($dsn, $dbUser, $dbPwd);
    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  


    // Insérer la nouvelle donnée dans la table ma_table
    $sql = "INSERT INTO date_center(date_input) VALUES (NOW())";
    $stmt = $conn->prepare($sql);    
    $stmt->execute();





    $rappel = $_POST["rappel"];
    echo $rappel;

    // Requête d'insertion avec une requête préparée
    $cql = "INSERT INTO date_center(rappel) VALUES ($rappel) WHERE date_input = date(NOW())";
    $c = $pdo->prepare($cql);
      
    
    // Exécution de la requête
    $c->execute();



   



      
        
    echo "fin du programme";

    // echo "Donnée insérée avec succès";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>

<?php 

$dateActuelle = date("Y-m-d H:i:s"); // Format : Année-Mois-Jour Heure:Minute:Seconde
echo "La date actuelle est : " . $dateActuelle;

?>