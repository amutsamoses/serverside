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
    <title>View | Gallery</title>
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>
  <header class="header">
      <div class="container">
        <nav class="navigation">
          <img src="../Assets/images/logo.PNG" alt="Logo" class="logo" />
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../templates/about-us.php">About us</a></li>
            <li><a href="contact-us.php">Contact</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="tours.php">Tours</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <div class="hero-t">
      <div class="hero-det">
        <h1 class="hero-main-heading">Some best of the best images</h1>
      </div>
    </div>
    <main>
      <div class="gallery">
        <div class="container">
          <div class="gallery-images">

          <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
             echo "<div class='img-gall'>";
             echo "<img src=' ".$row['img'] ."' alt='img' />";
             echo "</div>";
              }
            }
            ?>
          </div>
        </div>
      </div>
    </main>     
     <?php include '../templates/footer.php';?>
  </body>
</html>

<?php
$conn->close();
?>