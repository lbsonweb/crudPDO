<?php
  try {
   require_once 'connect.php';
     $conn=conexao();
     $sql = "DELETE FROM testandopdo WHERE id=1";
  
    $conn->exec($sql);
    echo "Record deleted successfully";
  }
  catch(PDOException $e){
    echo $sql . "<br>" . $e->getMessage();
  }

$conn = null;
?>
