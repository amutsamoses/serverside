<?php

// Check if form submitted and image uploaded
if (isset($_POST["submit"]) && isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
  include "dbonnect.php";
  // Get form data
  $tourname = $_POST["farming-name"];
  $rating=$_POST["rating"];
  $people=$_POST["people"];
  $difficulty=$_POST["difficulty"];
  $price=$_POST["price"];

  // Escape special characters
  $tourname = $conn->real_escape_string($farmingname);
  $rating=$conn->real_escape_string($rating);
  $people=$conn->real_escape_string($people);
  $difficulty=$conn->real_escape_string($difficulty);
  $price=$conn->real_escape_string($price);
  
  // Get image details
  $imageName = $_FILES["image"]["name"];
  $imageTmpName = $_FILES["image"]["tmp_name"];
  $imageError = $_FILES["image"]["error"];
  $imageType = $_FILES["image"]["type"];

  // Check for upload errors
  if ($imageError == 0) {

    // Allowed image extensions
    $allowedExtensions = array("jpg", "jpeg", "png");

    // Get image extension
    $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);

    // Validate image extension
    if (in_array(strtolower($imageExtension), $allowedExtensions)) {

      // Generate a unique filename
      $newImageName = uniqid("", true) . "." . $imageExtension;

      // Define upload path
      $uploadPath = "uploads/";

      // Upload the image
      if (move_uploaded_file($imageTmpName, $uploadPath . $newImageName)) {

        // Prepare SQL statement for data insertion
        $sqlData = "INSERT INTO farming (farmingname, rating,people,difficulty,price,img,imgpath) VALUES (?, ?, ?, ?, ?)";

        // Prepare the statement
        $stmtData = $conn->prepare($sqlData);

        // Bind parameters for data
        $stmtData->bind_param("sssss", $farmingname, $rating, $people,$difficulty,$price,$newImageName,);
        // $uploadPath . $newImageName
        // Execute the statement for data
        if ($stmtData->execute()) {
          echo "Data and Image uploaded successfully!";
        } else {
          echo "Error inserting data: " . $stmtData->error;
        }

        // Close data statement
        $stmtData->close();

      } else {
        echo "Failed to upload image.";
      }

    } else {
      echo "Invalid image extension.";
    }

  } else {
    echo "Upload error: " . $imageError;
  }

} else {
  echo "No image uploaded or form not submitted.";
}

// Close connection
$conn->close();

?>