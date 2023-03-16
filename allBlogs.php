<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tüm bloglar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="/blog/index.html">ana sayfa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/blog/allBlogs.php">tüm bloglar</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container">
        <h1 class="display-6">Tüm bloglar</h1>
        <hr>
        <pre>

        </pre>

        <table class="table table-hover">
    <thead>
      <tr>
        <th>isim</th>
        <th>blog</th>
        
      </tr>
    </thead>
    <tbody>
    <?php

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
echo "Connected successfully <br>";


$sqlSelect = "SELECT * FROM blog";
$result = $conn->query($sqlSelect);



if ($result->num_rows > 0) {
// output data of each row


while($row = $result->fetch_assoc()) {


echo '<tr> 
<td>'. $row["userName"].'</td>
<td>'. $row["blogText"]. '</td>

</tr>';

}
} else {
echo "0 results";
}
$conn->close();

?>


      
    
    </tbody>
  </table>
  </div>   
</body>
</html>


