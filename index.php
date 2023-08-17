<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "likebarb_er";
$a = 1;

// Create connection
$conn = new mysqli("localhost", "root", "","likebarb_er");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT fullname, email,password,phone FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    // output data of each row
  while($row = $result->fetch_assoc()) {

    //  echo $row["fullname"].$row["email"].$row["password"].$row["phone"];

    echo '<tr>
       <th> fullname</th>
      <td>'.$row["fullname"].'</td>
      <th>            </th>
      <th>'.$row["email"].'</th>
      <th>            </th>
      <th>'.$row["password"].'</th>
      <th>            </th>
      <th>'.$row["phone"].'</th>
    </tr>';
    
  

  }
  echo '</table>';
} else {
  echo "0 results";
}
$conn->close();


?>
    
</body>
</html>