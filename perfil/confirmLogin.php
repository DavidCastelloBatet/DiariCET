<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="../images/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>El Diari</title>
  </head>
  <body>
    <!--start header-->
    <header>
      <a href="../index.html">
        <img src="../images/logo.png" alt="logo del diari" width="200"
      /></a>
      <h1>El Diari</h1>
    </header>
      <!--end header-->
    <?php
      echo "Benvingut "; 
      echo $_POST["emailsignup"];
    ?>
  </body>
</html>
