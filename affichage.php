<?php 


$dsn = 'mysql:dbname=davision;host=127.0.0.1:3306';
$dbUser = 'root';
$dbPwd = '';


try {
$conn = new PDO($dsn, $dbUser, $dbPwd);
    // Définir le mode d'erreur PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    // $lsq = "SELECT rappel FROM date_center WHERE date_input = date(NOW())";
    // $cor = $conn->prepare($lsq);    
    // $cor->execute();
    // $recipes= $cor->fetchAll();
    //     print_r($recipes);
        

    echo "<br>";

    $lll = "SELECT rappel FROM date_center WHERE date_input = date(NOW())";
    $car = $conn->query($lll);    
    
    // Afficher les résultats
    while ($row = $car->fetch(PDO::FETCH_ASSOC)) {
        echo "Colonne1 : <br>" . $row['rappel'] . "<br>";        
    }


    
    echo "<br><br><br><h1>J-1</h1>";

    $j = "SELECT  rappel FROM date_center WHERE date_input = date(NOW()) - 1";
    $prec = $conn->query($j);    
    
    // Afficher les résultats
    while ($row2 = $prec->fetch(PDO::FETCH_ASSOC)) {
        echo "Colonne1 : <br>" . $row2['rappel'] . "<br>";        
    }


    echo "<br><br><br><h1>J-7</h1>";

    $jj = "SELECT  rappel FROM date_center WHERE date_input = date(NOW()) - 7";
    $preced = $conn->query($jj);    
    
    // Afficher les résultats
    while ($row3 = $preced->fetch(PDO::FETCH_ASSOC)) {
        echo "Colonne1 : <br>" . $row3['rappel'] . "<br>";        
    }


    echo "<br><br><br><h1>J-31</h1>";

    $jjj = "SELECT  rappel FROM date_center WHERE date_input = date(NOW()) - 31";
    $precedent = $conn->query($jjj);    
    
    // Afficher les résultats
    while ($row4 = $precedent->fetch(PDO::FETCH_ASSOC)) {
        echo "Colonne1 : <br>" . $row4['rappel'] . "<br>";        
    }
    
    



} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>