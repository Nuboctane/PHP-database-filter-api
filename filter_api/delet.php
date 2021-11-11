<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s_filter";

$conn = new mysqli($servername, $username, $password, $dbname);

//$sql = "DELETE FROM books WHERE isbn13 = '$_POST[isbn13]'";
$sql = "DELETE FROM words WHERE id = '$_POST[id]'";

// Poging uitvoeren query
if ($conn->query($sql) === TRUE) {
    // Uitvoeren query gelukt\
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
    <title>hired</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">
        <h1>book has been send to your email! <a href="actions.php">click here</a> to hire more books</h1>
    </div>
    <script src="js/fade.js"></script>
</body>
</html>