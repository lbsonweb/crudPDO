<?php
  functino conexao(){
    try{
    $pdo=new PDO("mysql:host=localhost;dbname=database","root","senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
      echo "error:".$e->getMessege();
    }return $conn:
  }    
