<?php
// Database connection
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "Agriculture";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM farming";
$result = $conn->query($sql);

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tours</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
   <?php include '../templates/header.php';?>
    <div class="hero-t farming-bg">
      <div class="hero-det">
        <h1 class="hero-main-heading">View some intresting Farm Lands</h1>
      </div>
    </div>

    <main>
      <section class="section-tours">
        <div class="container">
          <div class="maintours">
            <h2 class="tours-subheading">View all Farming Techniques</h2>

            <div class="tours">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                 echo "<div class='farming'>";
                 echo  "<div class='img-t'>";
                 echo   "<img src=' ".$row['img'] ."' alt='Package' />";
                 echo    "<p class='farming-name'>" .$row['farmingname'] ."</p>";
                 echo  "</div>";
                 echo  "<ul class='tour-detcont'>";
                 echo   "<li>";
                 echo     "<span>Place :</span>";
                 echo     "<span>Nairobi</span>";
                 echo    "</li>";
                 echo  " <li>";
                 echo      "<span>Rating :</span>";
                 echo     "<span>" . $row['rating'] ."</span>";
                 echo    "</li>";
                 echo   "<li>";
                 echo     "<span>people :</span>";
                 echo     "<span>" .$row['people'] ."</span>";
                 echo    "</li>";
                 echo   "<li>";
                 echo    " <span>Difficulty :</span>";
                 echo     "<span>" .$row['difficulty'] ."</span>";
                 echo   "</li>";
                 echo   "<li>";
                 echo     "<span>Price :</span>";
                 echo     "<span>" .$row['price'] ."$</span>";
                 echo   "</li>";
                 echo  "</ul>";
                 echo "</div>";
                    
                }
            } else {
                echo "No farm found";
            }
            ?>
             
             

            </div>
          </div>
        </div>
      </section>
    </main>
     <?php include '../templates/footer.php';?>
  </body>
</html>


<?php
$conn->close();
?>