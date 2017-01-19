<?php

ini_set('display_errors', 1);
require_once '../config/build.php';

$username = $MBX_CONF['db_username'];
$password = $MBX_CONF['db_password'];
$dsn = $MBX_CONF['db_source'];
$dbh = new PDO($dsn, $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

switch ($_POST['funct']) {
    case "getArticles":
        getArticles($dbh);
        break;
    case "createArticles":
        createArticles($dbh, $_POST['title'], $_POST['order'], $_POST['href'], $_POST['description']);
        break;
    case "updateArticles":
        updateArticles($dbh, $_POST['id'], $_POST['title'], $_POST['href'], $_POST['description']);
        break;
    case "updateActive":
        updateActive($dbh, $_POST['id'], $_POST['active']);
        break;
    case "updateOrder":
        updateOrder($dbh, $_POST['id'], $_POST['order']);
        break;
    case "deleteArticles":
        deleteArticles($dbh, $_POST['id']);
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

function getArticles($dbh) {
  $sql = "SELECT * FROM news WHERE deleted='0'";

  $array = array();

  foreach($dbh->query($sql) as $row)
  {  
    array_push($array, $row);
  }

  echo json_encode($array);
}

function deleteArticles($dbh, $id) {

  //$sql = "DELETE FROM news WHERE id = '".$id."'";
  $sql = "UPDATE news SET deleted='1' WHERE id = '".$id."'";

  if($dbh->query($sql) === TRUE)
  {  
    //echo "Success";
  }
  getArticles($dbh);
  
}

function createArticles($dbh, $title, $order, $href, $description) {

  $sql = "INSERT INTO news (title, 'order', href, description, active, deleted) VALUES ('".$title."', '".$order."', '".$href."', '".$description."', '1', '0')";

  if($dbh->query($sql) === TRUE)
  {  
    //echo "Success";
  }
  getArticles($dbh);

}

function updateArticles($dbh, $id, $title, $href, $description) {

  $sql = "UPDATE news SET title='".$title."', href='".$href."', description='".$description."' WHERE id = '".$id."'";

  if($dbh->query($sql) === TRUE)
  {  
    //echo "Success";
  }
  getArticles($dbh);

}

function updateActive($dbh, $id, $active) {

  $sql = "UPDATE news SET active='".$active."' WHERE id = '".$id."'";

  if($dbh->query($sql) === TRUE)
  {  
    //echo "Success";
  }
  getArticles($dbh);

}

function updateOrder($dbh, $id, $order) {
  
  $sql = "UPDATE news SET 'order'='".$order."' WHERE id = '".$id."'";

  if($dbh->query($sql) === TRUE)
  {  
    //echo "Success";
  }
  getArticles($dbh);

}

?>