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
        createArticles($dbh, $_POST['title']);
        break;
    case "updateArticles":
        updateArticles($dbh, $_POST['key']);
        break;
    case "deleteArticles":
        deleteArticles($dbh, $_POST['key']);
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

function getArticles($dbh) {
  $sql = "SELECT * FROM news";

  $array = array();

  foreach($dbh->query($sql) as $row)
  {  
    array_push($array, $row);
  }

  echo json_encode($array);
}

function deleteArticles($dbh, $key) {

  $sql = "DELETE FROM news WHERE id = '".$key."'";

  if($dbh->query($sql) === TRUE)
  {  
    echo "Success";
  }

  
}

function createArticles($dbh, $art) {

  $sql = "INSERT INTO news (title, href, description, active) VALUES ('title','href','desc','1')";

  if($dbh->query($sql) === TRUE)
  {  
    echo "Success";
  }
  /*
  $array = array();

  foreach($dbh->query($sql) as $row)
  {  
    array_push($array, $row);
  }

  echo json_encode($array);*/
}

function updateArticles($dbh, $art) {

  $sql = "INSERT INTO news (title, href, description, active) VALUES ('title','href','desc','1')";

  if($dbh->query($sql) === TRUE)
  {  
    echo "Success";
  }
  /*
  $array = array();

  foreach($dbh->query($sql) as $row)
  {  
    array_push($array, $row);
  }

  echo json_encode($array);*/
}

?>