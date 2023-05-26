<?php
/**
 * Ici le code php
 */
require('session.class.php');
$Session = new Session();
$Session->setFlash('Intervention Supprimée', 'info');

 /**
  * On renvoit sur la page list.php
  */
header('Location: list.php');

/**
  * Partie suppression de la ligne
  */

if (isset($_GET['id']) && !empty($_GET['id'])){
    require_once('connect.php');

    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM intervention WHERE id = :id";
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetch();

    if(!$result){
        header('Location: index.php');
    }
    $sql = "DELETE FROM intervention WHERE id = :id";
    $query = $db->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    header('Location: list.php');

} else{
    header('Location: index.php');
}