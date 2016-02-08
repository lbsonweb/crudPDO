<?php
  try {
    require_once 'connect.php';
	  $conn=conexao();

    $sql = "UPDATE testandopdo SET nome='pdo' WHERE id=1";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    echo $stmt->rowCount() . " records UPDATED successfully";
  }
  catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
  }$conn = null;
?>
