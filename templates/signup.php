<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/upload.css" />
  </head>
  <body class="upload">
    <div class="container">
      <div class="upload-content">
        <form action="" class="form-upload">
          <label for="name">Your Name*</label>
          <input type="text" id="name" name="name" required />
          <label for="email">Email*</label>
          <input
            type="number"
            id="rating"
            name="rating"
            placeholder="eg you@gmail.com"
            required
          />
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />

          <input
            type="submit"
            name="submit"
            value="Submit"
            class="btn btn-upload"
          />
          <div class="div">
            <a
              href="index.html"
              class="btn"
              style="
                align-self: self-start;
                background-color: black;
                color: #fff;
                font-size: 1.2rem;
              "
              >Home</a
            >
            <p style="margin-top: 2rem; font-size: 1.2rem">
              Already have an account
              <a href="login.html" class="btn" style="color: black">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>