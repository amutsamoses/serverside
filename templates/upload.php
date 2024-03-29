<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload tour</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/upload.css" />
  </head>
  <body class="upload">
    <div class="container">
      <div class="upload-content">
        <form action="../scripts/tourUpload.php" 
          method="post"
          enctype="multipart/form-data"
        class="form-upload">
          <label for="tour-name">farming name*</label>
          <input type="text" id="tour-name" name="tour-name" required />
          <label for="rating">Rating*</label>
          <input type="number" id="rating" name="rating" required />
          <label for="people">People</label>
          <input type="number" id="people" name="people" required />
          <label for="difficulty">Difficulty</label>
          <input type="text" id="difficulty" name="difficulty" required />
          <label for="price">Price</label>
          <input type="number" id="price" name="price" required />
          <label for="image">Image must be less than 5mb</label>
          <input type="file" id="image" name="image" required />

          <input
            type="submit"
            name="submit"
            value="Submit"
            class="btn btn-upload"
          />
          <a
            href="../index.php"
            class="btn"
            style="
              align-self: self-start;
              background-color: black;
              color: #fff;
              font-size: 1.2rem;
            "
            >Home</a
          >
        </form>
      </div>
    </div>
  </body>
</html>