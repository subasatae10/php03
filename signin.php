<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $email = $_POST['email'];
    $pass = $_POST['password'];// $_POST คือการรับค่าจากอินพุท
    $dbname = "likebarb_er";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";


$sql = "SELECT email, password  FROM users WHERE email='$email' and password ='$pass'";
$result = mysqli_query($conn, $sql);//$result จะได้เปนตัวเลขกลับมาเสมอ 
    // echo 'ghg'.$result;
    echo '<form action="signin.php" method="post">';
    echo '<input type="email" name="email" >';
    echo '<input type="password" name="password" >';
    echo '<button type="submit">submit</button>';
      
    echo '</form>';
    if ( (mysqli_num_rows($result) > 0)) {
        # code...
         header("Location: index.php");
 exit();
    } else {
        # code...
        echo 'อีเมลของคุณไม่ถูก';
    }
    
$conn->close();
   ?> 
</body>
</html>