<?php
    require_once('connect.php');
    session_start();

    $sql = "SELECT * FROM intervention";
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    

    require_once('./close.php');
    include "includes/header.php";
?>


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
<?php
include "includes/footer.php";
?>