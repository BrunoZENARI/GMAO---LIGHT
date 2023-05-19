<?php
    require_once('connect.php');

    $sql = "SELECT * FROM intervention";
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    require_once('./close.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <figure>
            <a href="index.php"><img src="./img/pngegg.png" alt="home"></a>
        </figure>
        <h1>GMAO - LIGHT </h1>
    </header>

    <div>
        <h1>Liste d'intervention</h1>
        <table>
            <thead>
                <th>id</th>
                <th>Date</th>
                <th>Étage</th>
                <th>Exposition</th>
                <th>Prix</th>
                <th>Inter finie</th>
                <th>Supprimer</th>
            </thead>
    
            <tbody>
                <?php
                    //pour chaque résultat de la variable résult, on affiche le  stagiaire dans le tableau
                    foreach($result as $inter){
                        // print_r($stagiaire);
                ?>  
                        <tr>
                            <td><?= $inter['id'] ?></td>
                            <td><?= $inter['date'] ?></td>
                            <td><?= $inter['floor'] ?></td>
                            <td><?= $inter['position'] ?></td>
                            <td><?= $inter['price'] ?></td>
                            <td><input type="checkbox" name="checkbox1" value="<?= $inter['checkbox1'] ?>"></td>
                            <td><input type="checkbox" name="checkbox1" value="<?= $inter['checkbox2'] ?>"></td>
                            
                            <!-- <td>
                                <a href="inter.php?id=<?= $inter['id'] ?>">Age</a>
                                <a href="delete.php?id=<?= $inter['id'] ?>">Supprimer</a>
                                <a href="edit.php?id=<?= $inter['id'] ?>">Modifier</a>
                            </td> -->
                        </tr>
                <?php
                    }
                ?>
            </tbody>

        </table>
        
    </div>                
</body>
</html>