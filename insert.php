<?php
  require_once'connect.php';
    $conn=conexao();
      try{
        $sql="INSERT INTO tabela(nome)VALUES('Leandro')";
        echo "Valor inserido";
      }catch(PDOException $e){
        echo $sql."<br>".$e->getMessege();
      }$conn=null;
?>
        
