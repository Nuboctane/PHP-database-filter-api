<?php
	require 'config/config.php'; 

	$servername = "localhost";
	$dbname     = "s_filter";
	$username   = "root";
	$password   = "";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	   die("Connection failed: " . $conn->connect_error);
	}else{
		//connected
	}

	$sql = "SELECT * FROM words";
	if ($result = $conn->query($sql)) {
	  $str = "<lu style='list-style-type:none; margin:0; padding:0; margin-top:60px'>";
	  $str .= "</lu>";
	  $result->free();
	}
	$conn->close();


?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset='utf-8'>
	<meta name='description' content='bad word filter'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<meta http-equiv='x-ua-compatible' content='ie=edge'>
	<link href='css/bootstrap.min.css' rel='stylesheet'>
	<title>bad word filter</title>
</head>
<body>
	<div class='container' style="margin: auto; width: 95%;">
		<div class='row'>
			<div class='col-lg-12 col-lg-offset-2'>
				<div class='col-lg-12 col-lg-offset-2'>
					<h3 hidden>User Data</h3>
					<hr>
					<div class='table-responsive'>
						<table class='table table-striped'>
							<thead hidden>
								<tr>
									<th>word</th>
								</tr>
							</thead>
							<tbody hidden>
								<?php
									$query = "SELECT * FROM `words`";
									$result = mysqli_query($con, $query) or die('Cannot fetch data from database. '.mysqli_error($con));
									if(mysqli_num_rows($result) > 0) {
									 	while($word = mysqli_fetch_assoc($result)) {
									   		echo '<tr>';
									  		echo '<td>' . $word['woord']  . '</td>';
									   		echo '</tr>';
									 	}
									}
									mysqli_free_result($result);
									mysqli_close($con);
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class='row' >
			<div class='col-lg-8 col-lg-offset-2'>
				<div class='col-lg-6 col-lg-offset-3'>
				<h3>add a bad word to the database</h3>
					<hr/>
					<form name='send' id='send' action='verstuurd2.php' method='post'>
						<div class='form-group'>
							<label for='word'>add a word:</label>
							<input name='word' id='word' type='text' class='form-control' placeholder='fuck' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
							<button>add</button>
						</div>
						</form>
						<hr/>

					<h3>bad word filter</h3>
					<hr/>
					<form name='send' id='send' action='verstuurd.php' method='post'>
						<div class='form-group'>
							<label for='word'>say something bad:</label>
							<input name='word' id='word' type='text' class='form-control' placeholder='fuck' style='cursor:text; background-color:#fff;' onfocus='this.removeAttribute("readonly");' readonly required />
							<button>send</button>
						</div>
						<hr>
						<p>grade:</p>
					  <input type="radio" id="1" name="gradatie" value="1" checked>
					  <label for="1">1: filters matching</label><br>
					  <input type="radio" id="2" name="gradatie" value="2">
					  <label for="2">2: filters when correct spelling</label><br>
					  <input type="radio" id="3" name="gradatie" value="3">
					  <label for="3">3: filters nothing</label>
					</form>
					<hr>
					<h1>response:</h1>
					<br>
<?php
	$val = "";
	if( isset($_POST['characters']) ) {
	$val = $_POST['word'];
	}

    include_once 'config/database.php';
    $db = new Database();
    $conn = $db->getConnection();

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

			$sql = "SELECT * FROM words ORDER BY id DESC";
			if ($result = $conn->query($sql)) {
			$str = "<lu style='list-style-type:none; margin:0; padding:0; margin-top:60px'>";
			while ($row = $result->fetch_assoc()) {
				$str .= 
				"<form action='delet.php' method='POST'> "
				. "<li><div style='border:1px gray; margin:3px; padding:2px; height: 100px; color: white; font-size: xx-large;'>"
				. "<button type='submit' name='id' type='text' class='isbn13'" 
				.'value=' . $row['id'] . " >X</button> " . "#" . $row['id'] 
				. " grade " . $row['gradatie'] 
				. ": " 
				. $row['woord']  
				. "</div></li></form>";
			}
			$str .= "</lu>";

			$result->free();
			}
	$conn->close();
?>
 <div><?php echo $str; ?></div>

				</div>	
			</div>
		</div>
	</div>
</body>
</html>