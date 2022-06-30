<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (id, designation, quantité, prix)
VALUES ('c', 'designation[i]', 'quantite[i]', 'prix[i]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

<p id="x" onclick="myFunction()">Validate</p>
<p id="y" onclick="myFunction()">Delete</p>

<script>
function myFunction() {
    document.getElementById("x").innerHTML = "Click to delete your insertion.";
    document.getElementById("y").innerHTML = "Click to validate  your insertion.";
}
</script>

$conn->close();
?>
