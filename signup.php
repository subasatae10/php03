<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php03</title>
</head>

<body>
    <p>Singup</p>
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $phone= $_POST["phone"];
   // Create connection
   $conn = new mysqli($servername, $username, $password, "likebarb_er");

    $sql = "INSERT INTO users (fullname, email, password,phone) 
VALUES ('$fullname', '$email', '$pass','$phone')"; //วงเล็บแแรกคือชื่อ ฟิลเท้านั้น 
//วงเล็บที่2 คือตัวแปรที่รับมา

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";//คำสั่งsave
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

    echo '<hr>';
    echo "$fullname.$email.$pass.$phone";

 

    // Check connection
    if ($conn->connect_error) {
        echo 'error';
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    echo '<br>';
    echo '<br>';


    ?>
    <?php
    echo '<form action="signup.php" method="post">';
    echo 'fullname.<input type="text" name="fullname">';
    echo '<br>';
    echo 'email.<input type="email" name="email">';
    echo '<br>';
    echo 'password.<input type="password" name="password">';
    echo '<br>';
    echo 'phone.<input type="text" name="phone">';
    echo '<br>';
    echo '<br>';
    echo '<button type="submit">ลงทะเบียนt</button>';
    echo '</form>';
    ?>

</body>

</html>