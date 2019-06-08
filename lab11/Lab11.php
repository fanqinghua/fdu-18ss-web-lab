<?php
$servername = "localhost";
$username = "root";
$password = "15825553814";
$dbname = "travel";
// 创建连接
$conn = new mysqli($servername, $username, $password,$dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lab11</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    
    

    <link rel="stylesheet" href="css/captions.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />    

</head>

<body>
    <?php include 'header.inc.php'; ?>



    <!-- Page Content -->
    <main class="container">
        <div class="panel panel-default">
          <div class="panel-heading">Filters</div>
          <div class="panel-body">
            <form action="Lab11.php" method="get" class="form-horizontal">
              <div class="form-inline">
              <select name="continent" class="form-control">
                <option value="0 ">Select Continent</option>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "15825553814";
                $dbname = "travel";
                // 创建连接
                $conn = new mysqli($servername, $username, $password,$dbname);
                $sql = "SELECT ContinentCode,ContinentName FROM continents";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                  echo '<option value=' . $row['ContinentCode'] . '>' . $row['ContinentName'] . '</option>';
                }

                ?>
              </select>     
              
              <select name="country" class="form-control">
                <option value="0 ">Select Country</option>
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "15825553814";
                $dbname = "travel";
                // 创建连接
                $conn = new mysqli($servername, $username, $password,$dbname);
                $sql = "SELECT CountryName,ISO  FROM countries";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    echo '<option value=' . $row['ISO'] . '>' . $row['CountryName'] . '</option>';
                }
                ?>
              </select>    
              <input type="text"  placeholder="Search title" class="form-control" name=title>
              <button type="submit" class="btn btn-primary">Filter</button>
              </div>
            </form>

          </div>
        </div>     
                                    

		<ul class="caption-style-2">
            <?php
           $servername = "localhost";
            $username = "root";
            $password = "15825553814";
            $dbname = "travel";
            // 创建连接
            $conn = new mysqli($servername, $username, $password,$dbname);
            $continent1= isset($_GET["continent"])? $_GET["continent"] :'';
            $continent2 =isset($_GET["country"])? $_GET["country"] :'';
            if($continent1 || $continent2){
                $sql = "SELECT * FROM imagedetails WHERE ContinentCode='$continent1'or CountryCodeISO='$continent2'";
                $result = mysqli_query($conn,$sql);
            }else{
                $sql = "SELECT * FROM imagedetails ";
                $result = mysqli_query($conn,$sql);}
         while($row = $result->fetch_assoc()) {
                    $Path=$row['Path'];
                    $title=$row['Title'];
                    echo"
            <li>
              <a  href='detail.php?'  class=' img-responsive' >
                <img src='images/square-medium/$Path' alt='????'>
                <div class='caption'>
                  <div class='blur'></div>
                  <div class='caption-text'>
                    <p>$title</p>
                  </div>
                </div>
              </a>
            </li>  ";}

  ?>
       </ul>       

      
    </main>
    
    <footer>
        <div class="container-fluid">
                    <div class="row final">
                <p>Copyright &copy; 2017 Creative Commons ShareAlike</p>
                <p><a href="#">Home</a> / <a href="#">About</a> / <a href="#">Contact</a> / <a href="#">Browse</a></p>
            </div>            
        </div>
        

    </footer>


        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>