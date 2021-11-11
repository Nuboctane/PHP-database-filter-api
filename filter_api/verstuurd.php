<?php
    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();

$my_str = strtolower($_POST["word"]);

if ($_POST["gradatie"] == 1){
    $sql_list_of_words = "SELECT word FROM words_to_filter";
    $result1 = $conn->query($sql_list_of_words);
    
    while($row=mysqli_fetch_assoc($result1)){
        $word = $row['word'];
        $good_word = "<...>";
        $my_str = str_ireplace($word, $good_word, $my_str);
    }
}

if ($_POST["gradatie"] == 2){
    $sql_list_of_words = "SELECT word FROM words_to_filter";
    $result1 = $conn->query($sql_list_of_words);
    
    while($row=mysqli_fetch_assoc($result1)){
        $word = $row['word'];
        $good_word = "<...>";
        $my_str = str_ireplace($word, $good_word, $my_str);
    }
}

if ($_POST["gradatie"] == 3){
    //no filter
}

$sql = "INSERT INTO `words`(`woord`, `gradatie`) VALUES ('$my_str', '$_POST[gradatie]')";

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