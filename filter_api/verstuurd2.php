<?php
      include_once 'config/database.php';
      $db = new Database();
      $conn = $db->getConnection();
$my_str = strtolower($_POST["word"]);


$sql = "INSERT INTO `words_to_filter`(`word`) VALUES ('$my_str')";

// Poging uitvoeren query
if ($conn->query($sql) === TRUE) {
    // Uitvoeren query gelukt
    header("Location: index.php");

 } else {
    // Uitvoeren query mislukt
    echo "Error: " . $sql . "<br>" . $conn->error;
 }

$conn->close();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>received</title>
</head>
<body>
    <div id="container">
        <h1>error</h1>
        
    </div>
</body>
</html>