<?php
  try {
	require_once 'connect.php';
	$conn=conexao();
	
     $stmt = $conn->prepare("SELECT id,nome, email FROM testandopdo"); 
     $stmt->execute();

    
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>  
