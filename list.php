<?php
    require_once('connect.php');
    session_start();

    $sql = "SELECT * FROM intervention ORDER BY dating ASC";
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    // $id = $db->last
    
    require_once('./close.php');
    include "./header.php";
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
                            <th>Expo</th>
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
                                    <a href="edit.php?id=<?= $inter['id'] ?>">Modif</a>
                                </td>
                                <td>
                                    <button id="Del" onclick="Toasts(); return confirm('Etes-vous certain de vouloir supprimer l intervention n°<?php echo $inter['id']; ?>')">Del</button>
                                    < id="Del" href="./delete.php?id=<?= $inter['id']; ?>"
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

                    <div id="snackbar">Intervention Supprimée</div>
                    <input type="button" class="add link-a" value="Ajouter INTERVENTION" onclick="window.location.href='add.php';">
                    
                </form>
               
                <!-- <button onclick="Toasts()">Show Snackbar</button> -->
                
                
            </section>
        </main>  
<?php
include "./footer.php";
?>