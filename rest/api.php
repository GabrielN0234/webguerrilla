<?php
include "config.php";
include "utils.php";


$dbConn =  connect($db);

/*
*********************************metodos GET********************************
 */
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if (isset($_GET['inspectGuerrilla']))
    {
      //Mostrar un post
      //$sql = $dbConn->prepare("SELECT * FROM guerrilla where nombre=:id");
      $sql = $dbConn->prepare("call sp_perfil(:id)");
      $sql->bindValue(':id', $_GET['inspectGuerrilla']);
      $sql->execute();
      header("HTTP/1.1 200 OK");
      echo json_encode(  $sql->fetch(PDO::FETCH_ASSOC)  );
      exit();
    }
    else {
      //Mostrar ranking
      $sql = $dbConn->prepare("SELECT * FROM guerrilla");
      $sql->execute();

      $sql->setFetchMode(PDO::FETCH_ASSOC);
      header("HTTP/1.1 200 OK");
      echo json_encode( $sql->fetchAll()  );
      exit();
  }
}
/****************************metodos post**********************************************/
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
  if (isset($_GET['buy']))
    {
      $input = $_POST;
        $sql = "call sp_compra(:id,:assault,:engineer,:tank,:bunker)";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        $postId = $dbConn->lastInsertId();
        if($postId)
        {
          $input['id'] = $postId;
          header("HTTP/1.1 200 OK");
          echo json_encode($input);
          exit();
        }
    }if (isset($_GET['attack']))
    {
      $input = $_POST;
        $sql = "call sp_procedure(:id)";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        $postId = $dbConn->lastInsertId();
        if($postId)
        {
          $input['id'] = $postId;
          header("HTTP/1.1 200 OK");
          echo json_encode($input);
          exit();
        }
    }else{
        $input = $_POST;
        $sql = "call sp_insertarGuerrilla( :usuario, :correo, :faction, :timestamp, :rank, :resurcesID, :buildingsID, :armyID)";
        $statement = $dbConn->prepare($sql);
        bindAllValues($statement, $input);
        $statement->execute();
        $postId = $dbConn->lastInsertId();
        if($postId)
        {
          $input['id'] = $postId;
          header("HTTP/1.1 200 OK");
          echo json_encode($input);
          exit();
        }
    }
}



//Actualizar
if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
    $input = $_GET;
    $postId = $input['id'];
    $fields = getParams($input);

    $sql = "call sp_comprar(:id,:assault,:engineer,:tank,:bunker)";

    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);

    $statement->execute();
    header("HTTP/1.1 200 OK");
    exit();
}


//En caso de que ninguna de las opciones anteriores se haya ejecutado
header("HTTP/1.1 400 Bad Request");

?>