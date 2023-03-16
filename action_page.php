<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blg eklendi </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <pre>









    </pre>
        <h1 class="display-1">Bloğunuz eklenmiştir yeni bir blog yayınlamak veya eklenen diğer blogları okumk için geri gidin!</h1>
    <pre>








    
</pre>

    
</body>
</html>
<?php

    $setName=$_POST['name'];
    $setBlog=$_POST['blog'];

    echo $setName;
    echo $setBlog;
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blogDatas";
$tableName="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "INSERT INTO blog(userName, blogText)
VALUES ('$setName', '$setBlog')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


  
  
  $conn->close();





?>