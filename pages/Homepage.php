<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="../resources/favicon.ico" />
    <link rel="stylesheet" href="../css/Homepage.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Parcel Serumpun</title>
  </head>
  <body>
    <div class="header">
      <div class="row" style="gap: 0px">
        <div class="box blue" style="position: relative; z-index: 0"></div>
        <div class="box trapezium" style="position: relative; z-index: 1"></div>
        <div class="row logos">
          <img class="logo" src="../resources/Header/image-10.png" />
          <div class="x">X</div>
          <img class="logo" src="../resources/Header/logo-k-14-10.png" />
        </div>
        <a href="Login.php">
          <button class="login-button">LOGIN</button>
        </a>
      </div>
    </div>

    <div class="content">
      <h2>Search for your parcel<br />here</h2>
      <p>
        Search for your parcel id number to check its availability in<br />Parcel
        Serumpun’s database
      </p>
      <form action="" method="post">
        <input class="search" type="text" id="name" name="name" placeholder="Enter your parcel ID">
      </form>

      <div class="divide">
        <div class="divider"></div>
        <div class="or">or</div>
        <div class="divider"></div>
      </div>

      <h2>Enter parcel arrival date<br />here</h2>
      <p>
        Generate a PDF report for the list of parcels arrived at a specific date
      </p>
      <form action="PDF.php" method="post">
        <div class="date-wrapper">
          <input class="date" type="date" id="name" name="name" required>
        </div><br>
        <input class="submit" type="submit">
      </form>

      <div class="trademark">
        Trademark ® 2025 Parcel Serumpun. All Rights Reserved
      </div>
    </div>
  </body>
</html>
