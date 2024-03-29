
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
$sql = "SELECT * FROM agriculture";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AGRICULTURE</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <header class="header">
      <div class="container">
        <nav class="navigation">
          <img src="Assets/images/logo.PNG" alt="Logo" class="logo" />
          <ul>
            <li><a href="templates/about-us.php">About us</a></li>
            <li><a href="templates/contact-us.php">Contact</a></li>
            <li><a href="scripts/gallery.php">Gallery</a></li>
            <li><a href="scripts/tours.php">Agriculture</a></li>
            <li><a href="templates/upload.php">Upload</a></li>
            <li><a href="templates/signup.php">Sign up</a></li>
            <li><a href="templates/login.php">Login</a></li>
          </ul>

          <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512" class="hamburger"><path d="M64,384H448V341.33H64Zm0-106.67H448V234.67H64ZM64,128v42.67H448V128Z"/ ></svg>
        </nav>
      </div>
    </header>
    <div class="section-hero">
      <div class="container hero-cont">
        <div class="hero">
          <h1 class="main-heading">Welcome to Modern Agriculture</h1>
          <p class="hero-text">
          Agriculture sustains life, bridging nature and civilization. 
          It embodies the art and science of cultivating crops and raising livestock, 
          fostering food security, economic vitality, and environmental stewardship.
          </p>
          <a href="#categ" class="btn btn-getstarted">Get started</a>
        </div>
      </div>
    </div>
    <main>
      <section class="section-categories" id="categ">
        <div class="container">
          <h2 class="secondary-heading">Browse various categories</h2>
          <div class="categories">


         <?php
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                echo  "<div class='category'>";
                echo "<div class='img-cat'>";
                echo   "<img src='" . $row['pkgimg'] ." ' alt='' />";
                echo "</div>";
                echo "<ul class='cat-details'>";
                  echo  "<li class='cart-head'> ". $row['head'] ."</li>";
                  echo  "<li class='cart-txt'> ". $row['description']."</li>";
                  echo  "<li><a href='#' class='btn btn-category'>View</a> </li>";
                echo "</ul>";
                echo"</div>";
                }}
                ?>
          </div>
        </div>
      </section>

      <section class="section-popular">
        <div class="container">
          <div class="sec-polular">
            <h2 class="secondary-heading">Best Farming Techniques</h2>
            <div class="popular-grid popular-1">
              <div class="item">
                <div class="img">
                  <img src="Assets/images/popular-1.jpg" alt="Popular-1" />
                </div>
              </div>
              <div class="item-det">
                <ul>
                  <li>
                    <span class="popular-heading">Modern Agriculture</span>
                  </li>
                  <li class="popular-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum aliquid ad sit quidem eligendi tempore modi Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Rerum
                    aliquid ad sit quidem eligendi tempore modi Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Rerum aliquid
                    ad sit quidem eligendi tempore modi
                  </li>
                  <li class="popular-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum aliquid ad sit quidem eligendi tempore modi Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Rerum
                    aliquid ad sit quidem eligendi tempore modi Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Rerum aliquid
                    ad sit quidem eligendi tempore modi
                  </li>
                </ul>
              </div>
            </div>
            <div class="popular-grid popular-2">
              <div class="item-det">
                <ul>
                  <li>
                    <span class="popular-heading">Ultimate Agrifarming</span>
                  </li>
                  <li class="popular-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum aliquid ad sit quidem eligendi tempore modi Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Rerum
                    aliquid ad sit quidem eligendi tempore modi Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Rerum aliquid
                    ad sit quidem eligendi tempore modi
                  </li>
                  <li class="popular-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Rerum aliquid ad sit quidem eligendi tempore modi Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Rerum
                    aliquid ad sit quidem eligendi tempore modi Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Rerum aliquid
                    ad sit quidem eligendi tempore modi
                  </li>
                </ul>
              </div>
              <div class="item">
                <div class="img">
                  <img src="Assets/images/popular-2.jpg" alt="Popular-1" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-chooseus">
        <div class="container">
          <h2 class="secondary-heading choose-us-head">Why Agriculture?</h2>
          <div class="choose-us">
            <div class="choose-item">
              <ul>
                <li>
                  <svg
                    id="icons"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M121.72,32A4,4,0,0,0,118,37.56l2.3,5.43L161,137.89a4,4,0,0,0,6.88.82L243,38.4a4,4,0,0,0-3.2-6.4Z"
                    />
                    <path
                      d="M419.93,58.06l-41.28,96.37a4,4,0,0,0,3.68,5.57h101a4,4,0,0,0,3.4-6.11L427,57.53A4,4,0,0,0,419.93,58.06Z"
                    />
                    <path
                      d="M85,57.57,25.29,153.89a4,4,0,0,0,3.4,6.11h101a4,4,0,0,0,3.67-5.58L92,58.1A4,4,0,0,0,85,57.57Z"
                    />
                    <path
                      d="M393.27,32H267.82a1.94,1.94,0,0,0-1.56,3.11l79.92,106.46a1.94,1.94,0,0,0,3.34-.4L391.6,43,395,34.66A1.92,1.92,0,0,0,393.3,32Z"
                    />
                    <path
                      d="M239,448,149.57,194.51A3.78,3.78,0,0,0,146,192H25.7a3.72,3.72,0,0,0-2.95,6l216,279.81a5.06,5.06,0,0,0,6.39,1.37h0a5,5,0,0,0,2.39-6.08Z"
                    />
                    <path
                      d="M486.3,192H366a3.75,3.75,0,0,0-3.54,2.51L264.26,472.67a5.21,5.21,0,0,0,2.42,6.31h0a5.22,5.22,0,0,0,6.61-1.39L489.25,198h0A3.72,3.72,0,0,0,486.3,192Z"
                    />
                    <path
                      d="M259.2,78.93l56,74.67A4,4,0,0,1,312,160H200a4,4,0,0,1-3.2-6.4l56-74.67A4,4,0,0,1,259.2,78.93Zm-7,310.31L184.5,197.33a4,4,0,0,1,3.77-5.33H323.73a4,4,0,0,1,3.77,5.33L259.77,389.24A4,4,0,0,1,252.23,389.24Z"
                    />
                  </svg>
                </li>
                <li class="choose-head">Transparent</li>
                <li class="choose-txt">
                  Accountability to our day to day activities
              </ul>
            </div>
            <div class="choose-item">
              <ul>
                <li>
                  <svg
                    id="icons"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M121.72,32A4,4,0,0,0,118,37.56l2.3,5.43L161,137.89a4,4,0,0,0,6.88.82L243,38.4a4,4,0,0,0-3.2-6.4Z"
                    />
                    <path
                      d="M419.93,58.06l-41.28,96.37a4,4,0,0,0,3.68,5.57h101a4,4,0,0,0,3.4-6.11L427,57.53A4,4,0,0,0,419.93,58.06Z"
                    />
                    <path
                      d="M85,57.57,25.29,153.89a4,4,0,0,0,3.4,6.11h101a4,4,0,0,0,3.67-5.58L92,58.1A4,4,0,0,0,85,57.57Z"
                    />
                    <path
                      d="M393.27,32H267.82a1.94,1.94,0,0,0-1.56,3.11l79.92,106.46a1.94,1.94,0,0,0,3.34-.4L391.6,43,395,34.66A1.92,1.92,0,0,0,393.3,32Z"
                    />
                    <path
                      d="M239,448,149.57,194.51A3.78,3.78,0,0,0,146,192H25.7a3.72,3.72,0,0,0-2.95,6l216,279.81a5.06,5.06,0,0,0,6.39,1.37h0a5,5,0,0,0,2.39-6.08Z"
                    />
                    <path
                      d="M486.3,192H366a3.75,3.75,0,0,0-3.54,2.51L264.26,472.67a5.21,5.21,0,0,0,2.42,6.31h0a5.22,5.22,0,0,0,6.61-1.39L489.25,198h0A3.72,3.72,0,0,0,486.3,192Z"
                    />
                    <path
                      d="M259.2,78.93l56,74.67A4,4,0,0,1,312,160H200a4,4,0,0,1-3.2-6.4l56-74.67A4,4,0,0,1,259.2,78.93Zm-7,310.31L184.5,197.33a4,4,0,0,1,3.77-5.33H323.73a4,4,0,0,1,3.77,5.33L259.77,389.24A4,4,0,0,1,252.23,389.24Z"
                    />
                  </svg>
                </li>
                <li class="choose-head">Transparent</li>
                <li class="choose-txt">
                  Our services are transparent and there is no fishy business
                </li>
              </ul>
            </div>
            <div class="choose-item">
              <ul>
                <li>
                  <svg
                    id="icons"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M121.72,32A4,4,0,0,0,118,37.56l2.3,5.43L161,137.89a4,4,0,0,0,6.88.82L243,38.4a4,4,0,0,0-3.2-6.4Z"
                    />
                    <path
                      d="M419.93,58.06l-41.28,96.37a4,4,0,0,0,3.68,5.57h101a4,4,0,0,0,3.4-6.11L427,57.53A4,4,0,0,0,419.93,58.06Z"
                    />
                    <path
                      d="M85,57.57,25.29,153.89a4,4,0,0,0,3.4,6.11h101a4,4,0,0,0,3.67-5.58L92,58.1A4,4,0,0,0,85,57.57Z"
                    />
                    <path
                      d="M393.27,32H267.82a1.94,1.94,0,0,0-1.56,3.11l79.92,106.46a1.94,1.94,0,0,0,3.34-.4L391.6,43,395,34.66A1.92,1.92,0,0,0,393.3,32Z"
                    />
                    <path
                      d="M239,448,149.57,194.51A3.78,3.78,0,0,0,146,192H25.7a3.72,3.72,0,0,0-2.95,6l216,279.81a5.06,5.06,0,0,0,6.39,1.37h0a5,5,0,0,0,2.39-6.08Z"
                    />
                    <path
                      d="M486.3,192H366a3.75,3.75,0,0,0-3.54,2.51L264.26,472.67a5.21,5.21,0,0,0,2.42,6.31h0a5.22,5.22,0,0,0,6.61-1.39L489.25,198h0A3.72,3.72,0,0,0,486.3,192Z"
                    />
                    <path
                      d="M259.2,78.93l56,74.67A4,4,0,0,1,312,160H200a4,4,0,0,1-3.2-6.4l56-74.67A4,4,0,0,1,259.2,78.93Zm-7,310.31L184.5,197.33a4,4,0,0,1,3.77-5.33H323.73a4,4,0,0,1,3.77,5.33L259.77,389.24A4,4,0,0,1,252.23,389.24Z"
                    />
                  </svg>
                </li>
                <li class="choose-head">Responsibility</li>
                <li class="choose-txt">
                 Responsibility is what drives us
                </li>
              </ul>
            </div>
            <div class="choose-item">
              <ul>
                <li>
                  <svg
                    id="icons"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M121.72,32A4,4,0,0,0,118,37.56l2.3,5.43L161,137.89a4,4,0,0,0,6.88.82L243,38.4a4,4,0,0,0-3.2-6.4Z"
                    />
                    <path
                      d="M419.93,58.06l-41.28,96.37a4,4,0,0,0,3.68,5.57h101a4,4,0,0,0,3.4-6.11L427,57.53A4,4,0,0,0,419.93,58.06Z"
                    />
                    <path
                      d="M85,57.57,25.29,153.89a4,4,0,0,0,3.4,6.11h101a4,4,0,0,0,3.67-5.58L92,58.1A4,4,0,0,0,85,57.57Z"
                    />
                    <path
                      d="M393.27,32H267.82a1.94,1.94,0,0,0-1.56,3.11l79.92,106.46a1.94,1.94,0,0,0,3.34-.4L391.6,43,395,34.66A1.92,1.92,0,0,0,393.3,32Z"
                    />
                    <path
                      d="M239,448,149.57,194.51A3.78,3.78,0,0,0,146,192H25.7a3.72,3.72,0,0,0-2.95,6l216,279.81a5.06,5.06,0,0,0,6.39,1.37h0a5,5,0,0,0,2.39-6.08Z"
                    />
                    <path
                      d="M486.3,192H366a3.75,3.75,0,0,0-3.54,2.51L264.26,472.67a5.21,5.21,0,0,0,2.42,6.31h0a5.22,5.22,0,0,0,6.61-1.39L489.25,198h0A3.72,3.72,0,0,0,486.3,192Z"
                    />
                    <path
                      d="M259.2,78.93l56,74.67A4,4,0,0,1,312,160H200a4,4,0,0,1-3.2-6.4l56-74.67A4,4,0,0,1,259.2,78.93Zm-7,310.31L184.5,197.33a4,4,0,0,1,3.77-5.33H323.73a4,4,0,0,1,3.77,5.33L259.77,389.24A4,4,0,0,1,252.23,389.24Z"
                    />
                  </svg>
                </li>
                <li class="choose-head">Competence</li>
                <li class="choose-txt">
                  Competence is our Thing
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="section-numbers">
        <div class="container">
          <div class="numbers-sect">
            <div class="item">
              <p>
                <span class="num-h">200+</span>
                <span class="num-t">Tours</span>
              </p>
            </div>
            <div class="item">
              <p>
                <span class="num-h">50+</span>
                <span class="num-t">Visitors</span>
              </p>
            </div>
            <div class="item">
              <p>
                <span class="num-h">100+</span>
                <span class="num-t">Tours guides</span>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

   <?php include 'templates/footer.php';?>

    <script src="js/smooth.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>


<?php
$conn->close();
?>