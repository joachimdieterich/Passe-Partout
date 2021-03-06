<?php

include("../../connexion/logs.php");
require_once("../../connexion/SQLconnect.php");

  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result= array();


  if (!($req = $con->prepare("SELECT * FROM DefiClassement WHERE etat = 'publier'"))) {
    echo "Echec de la prÃ©paration : (" . $con->errno . ") " . $con->error;
  }
      
  if (!$req->execute()) {
    echo "Echec lors de l'exÃ©cution de la requÃªte : (" . $req->errno . ") " . $req->error;
  }            


  $meta = $req->result_metadata(); 
  while ($field = $meta->fetch_field()) 
  { 
      $params[] = &$row[$field->name]; 
  } 

  call_user_func_array(array($req, 'bind_result'), $params); 

  while ($req->fetch()) { 
      foreach($row as $key => $val) 
      { 
          $c[$key] = $val; 
      } 
      $result[] = $c; 
  } 

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  echo json_encode($result);


  mysqli_close($con);

  ?>  