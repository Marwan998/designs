<?php
 $mysqli = new mysqli("localhost", "root", "", "users");
 if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br />";
$name=$_POST["user-name"];
$pass= $_POST["password"];
$mail = $_POST["mail"];
if($name!="" && $pass !="" && $mail != ""){
$sql = "INSERT INTO `normal` (`NAME`, `PASSWORD`,`EMAIL`) VALUES ('$name', $pass,'$mail')";
if ($mysqli->query($sql) === TRUE) {
    $last_id = $mysqli->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;}
 else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
      }
}
else{
  echo "Check you inputs";
}
?>
