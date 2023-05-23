<?php
if ($_POST){
    if (isset($_POST['dating'])
        && isset($_POST['floor'])
        && isset($_POST['position'])
        && isset($_POST['price']))
     {
        // var_dump($_POST['dating']);
        require_once('connect.php');
        $dating = strip_tags($_POST['dating']);
        $floor = strip_tags($_POST['floor']);
        $position = strip_tags($_POST['position']);
        $price = strip_tags($_POST['price']);


        $sql = "INSERT INTO intervention (dating, floor, position, price) VALUES (:dating, :floor, :position, :price)";
        $query = $db->prepare($sql);
        $query->bindValue(":dating", $dating,);
        $query->bindValue(":floor", $floor, PDO::PARAM_INT);
        $query->bindValue(":position", $position, PDO::PARAM_STR);
        $query->bindValue(":price", $price);
        // $query->bindValue(":checkbox1", $checkbox1, PDO::PARAM_INT);
        $query->execute();

        require_once('./close.php');
        header("Location: list.php");
    }
}
    include "includes/header.php";
?>


        <main class="list-page">
            <section>
                <form method="post" class="container-list-add">
                    <h1>Ajouter une intervention !</h1>
                    <table>
                        <thead>
                            <!-- <th>id</th> -->
                            <th>Date</th>
                            <th>Étage</th>
                            <th>Exposition</th>
                            <th>Prix</th>
                            <!-- <th>OK</th> -->
                        </thead>
                    
                        <tbody>
                            <tr>
                            
                                <td><input type="date" name="dating" required></td>
                                <td><input type="number" name="floor" required min="0" max="8" list="defaultFloor"></td>
                                    <datalist id="defaultFloor">
                                        <option value="0"></option>
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                        <option value="4"></option>
                                        <option value="5"></option>
                                        <option value="6"></option>
                                        <option value="7"></option>
                                        <option value="8"></option>
                                    </datalist>
                                <td><input type="text" name="position" required list="defaultPosition"></td>
                                    <datalist id="defaultPosition">
                                        <option value="Nord"></option>
                                        <option value="Sud"></option>
                                        <option value="Est"></option>
                                        <option value="Ouest"></option>
                                    </datalist>
                                <td><input type="number" step="0.01" name="price" required min="0"></td>
                                <!-- <td><input type="checkbox" name="checkbox1"></td> -->
                                <!-- <td><input type="checkbox" name="checkbox1" value="<?= $inter['checkbox1'] ?>"></td> -->
                                
                            </tr>
                        </tbody>
                        
                    </table>
                                    
                    <input type="submit" value="Envoyer">    
                    
                </form>
            </section>
        </main>

<?php
include "includes/footer_home.php";
?>