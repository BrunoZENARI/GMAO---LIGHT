<?php
    if ($_POST){
        if (isset($_POST['id']) && isset($_POST['dating']) && isset($_POST['floor']) && isset($_POST['position']) && isset($_POST['price']) ){
            require_once('connect.php');
            $id = strip_tags($_POST['id']);
            $dating = strip_tags($_POST['dating']);
            $floor = strip_tags($_POST['floor']);
            $position = strip_tags($_POST['position']);
            $price = strip_tags($_POST['price']);
            $sql = "UPDATE intervention SET dating=:dating, floor=:floor, position=:position, price=:price WHERE id = :id";
            $query = $db->prepare($sql);
            $query->bindValue(':id', $id, PDO::PARAM_INT);
            $query->bindValue(':dating', $dating, PDO::PARAM_STR);
            $query->bindValue(':floor', $floor, PDO::PARAM_INT);
            $query->bindValue(':position', $position, PDO::PARAM_STR);
            $query->bindValue(':price', $price, PDO::PARAM_INT);
            $query->execute();
            require_once('./close.php');
            header('Location: list.php');

        } 
    }

    // var_dump($_GET['id']);
    if (isset($_GET['id']) && !empty($_GET['id'])){
        require_once('connect.php');

        $id = strip_tags($_GET['id']);
        $sql = "SELECT * FROM intervention WHERE id = :id";
        $query = $db->prepare($sql);
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $inter = $query->fetch();

    } else {
        header('Location: list.php');
    }
    include "includes/header.php";
?>


        <main class="list-page">
            <section>
                <form method="post" class="container-list">
                    <h1>Modification des données de l'intervention : <?= $inter['id'] . " date : " . $inter['dating'] ?></h1>
                    <table>
                        <thead>
                            <th>id</th>
                            <th>Date</th>
                            <th>Étage</th>
                            <th>Exposition</th>
                            <th>Prix</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $inter['id'] ?></td>
                                <!-- <input type="hidden" name="id" value="<?= $inter['id'] ?>"> -->
                                <td><input type="date" name="dating" required value="<?= $inter['dating'] ?>"></td>
                                <td><input type="number" name="floor" required min="0" max="8" list="defaultFloor" value="<?= $inter['floor'] ?>")></td>
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
                                <td><input type="text" name="position" required list="defaultPosition" value="<?= $inter['position'] ?>")></td>
                                    <datalist id="defaultPosition">
                                        <option value="Nord"></option>
                                        <option value="Sud"></option>
                                        <option value="Est"></option>
                                        <option value="Ouest"></option>
                                    </datalist>
                                <td><input type="number" step="0.01" name="price" required min="0" value="<?= $inter['price'] ?>")></td>
                                <!-- <td><input type="checkbox" name="checkboxDel" value="<?= $inter['id'] ?>"></td> -->
                            </tr> 
                        </tbody>
                        
                    </table>

                    <div class="element-list">
                        <input type="hidden" value="<?= $inter['id'] ?>" name="id">
                        <input type="submit" value="Envoyer" id="envoyer">
                    </div>
                </form>
            </section>                            
        </main>

<?php
include "includes/footer_home.php";
?>