<?php
    require_once('connect.php');
    session_start();

    $sql = "SELECT * FROM intervention";
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($result);
    // echo "</pre>";
    
    // $_SESSION["id"] = $id;
    // if ($_POST){

    //     var_dump($_POST);
    // };

    // {
    //     for ($i=0; $i < count($result); $i++){
    //         if (isset($_POST["checkboxDel"]))
    //     }

    // $ids = $_POST["id"];
    // echo "<pre>";
    // print_r($ids);
    // echo "</pre>";
    // $final = $db->prepare("DELETE  FROM intervention WHERE Id IN ($ids)");
    // $final->execute();
    // }

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

        <main class="list-page">
            <section>
                <form method="post" class="container-list">
                    <h1>Liste d'intervention</h1>    
                    <table>
                        <thead>
                            <th>id</th>
                            <th>Date</th>
                            <th>Étage</th>
                            <th>Exposition</th>
                            <th>Prix</th>
                            <th>Modif</th>
                            <th>Del</th>
                        </thead>
                    
                        <tbody>
                            <?php
                            //pour chaque résultat de la variable résult, on affiche le  stagiaire dans le tableau
                                foreach($result as $inter){
                                
                            ?>  
                            <tr>
                                <td><?= $inter['id'] ?></td>
                                <!-- <input type="hidden" name="id" value="<?= $inter['id'] ?>"> -->
                                <td><?= $inter['dating'] ?></td>
                                <td><?= $inter['floor'] ?></td>
                                <td><?= $inter['position'] ?></td>
                                <td><?= $inter['price'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $inter['id'] ?>">Modifier</a>
                                </td>
                                <td>
                                    <a href="./delete.php?id=<?= $inter['id']; ?>" onclick="return confirm('Etes-vous certain de vouloir supprimer l intervention n°<?php echo $inter['id']; ?>');">Supprimer</a>
                                </td>
                                <!-- <td><input type="checkbox" name="checkboxDel" value="<?= $inter['id'] ?>"></td> -->
                            </tr> 
                        
                                <?php
                                    }
                                ?>
                        </tbody>
                        
                    </table>
<!--                                     
                    <div class="element-list">
                        <input type="submit" value="Delete" id="delete">
                    </div> -->

                    <a href="./add.php" class="add">
                        
                            <h2>Ajouter INTERVENTION</h2>               
                        
                    </a>
                </form>
            </section>
        </main>  
        
        <footer class="footer-gmao">
            <div><a href="./logout.php">Déconnexion</a></div>
        </footer>

        <script src="./script.js"></script>

    </body>

</html>