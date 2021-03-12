<?php
$name=$_POST['name'];
$rollno=$_POST['rollno'];
echo "Form Submitted". "<br/>";

include 'conn.php';





$sql = "SELECT `id`, `name`, `roll number` FROM student";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["roll number"]. "<br>";
  }
} else {
  echo "0 results";
}







$sql = "INSERT INTO `student` (`id`, `name`, `roll number`)
VALUES (null, '$name', '$rollno')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>