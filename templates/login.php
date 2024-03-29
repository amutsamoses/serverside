<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/upload.css" />
  </head>
  <body class="upload">
    <div class="container">
      <div class="upload-content">
        <form action="" class="form-upload">
          <label for="name">Name*</label>
          <input type="name" id="name" name="name" required />
          <label for="password">Password*</label>
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
              Dont have an account signup
              <a href="signup.html" class="btn" style="color: black">Signup</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>