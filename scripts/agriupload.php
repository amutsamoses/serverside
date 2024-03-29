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


// Process form data
$tourname = $_POST["farming-name"];
$rating=$_POST["rating"];
$people=$_POST["people"];
$difficulty=$_POST["difficulty"];
$price=$_POST["price"];

// Handle file upload
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_path = "uploads/" . $image;
move_uploaded_file($image_tmp, $image_path);

// Insert data into database
$sql = "INSERT INTO farming (farmingname, rating,people,difficulty,price, img)
        VALUES ('$farmingname', $rating, '$people', '$difficulty', '$price', '$image_path')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>