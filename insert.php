
<?php
include_once 'dbconnect.php';

include_once 'header.php'
?>

<?php 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$sql= "INSERT INTO userdata (fname, lname, email, comment) VALUES ('$fname', '$lname', '$email', '$comment')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>
<br/>
<a href="contact.php"><button type="button" class="btn btn-success" >Go Back</button></a>

<?php
include_once 'footer.php';
?>