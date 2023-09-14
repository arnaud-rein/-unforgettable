<?php 

$dsn = 'mysql:dbname=davision;host=127.0.0.1:3306';
$dbUser = 'root';
$dbPwd = '';


try {
$conn = new PDO($dsn, $dbUser, $dbPwd);
    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // Insérer la nouvelle donnée dans la table ma_table
  $sql = "INSERT INTO date_center(date_input, rappel) VALUES (NOW(), 'unforget<br>')";
  $stmt = $conn->prepare($sql);    
  $stmt->execute();

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>



<link rel="stylesheet" href="style.css">
<h1>Formulaire HTML</h1>
        
        <form action="test.php" method="post">
            <div class="c100">
                <label for="rappel">Message :</label>
                <input type="text" id="rappel" name="rappel">
            </div>
            
           
            <div class="c100" id="submit">
                <input type="submit" value="Envoyer">
            </div>
        </form>


<?php 
require "affichage.php";


