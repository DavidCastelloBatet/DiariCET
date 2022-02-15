<!DOCTYPE html>
<html lang="ca">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/icon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Registre / Login</title>
  </head>
  <body>
    <!--start header-->
    <header>
      <a href="index.html">
        <img src="../images/logo.png" alt="logo del diari" width="200"
      /></a>
      <h1>El Diari</h1>
    </header>
      <!--end header-->
    
      <main>
      <!--start main registre-->
      <section class="registre" id="registre">
        <h2>Registre</h2>
        <!-- Ull!!!!     start code "copy pega"-->
        <form action="confirmRegister.php" method="post" autocomplete="off">
          <p>
            <label for="usernamesignup" class="uname">Nom</label>
            <input
              id="usernamesignup"
              name="usernamesignup"
              required="required"
              type="text"
              placeholder="Nom"
            />
          </p>
          <p>
            <label for="emailsignup" class="youmail">Email</label>
            <input
              id="emailsignup"
              name="emailsignup"
              required="required"
              type="email"
              placeholder="exemple@mail.com"
            />
          </p>
          <p>
            <label for="passwordsignup" class="youpasswd">Password</label>
            <input
              id="passwordsignup"
              name="passwordsignup"
              required="required"
              type="password"
              placeholder="eg. X8df!90EO"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Ha de contenir al menys un número y una lettra majúscula i minúscula, y al menys 8 carácters"
            />
          </p>
          
          <p>
            <label for="passwordsignup_confirm" class="youpasswd"
              >Confirma password
            </label>
            <input
              id="passwordsignup_confirm"
              name="passwordsignup_confirm"
              required="required"
              type="password"
              placeholder="eg. X8df!90EO"
            />
          </p>
        
          <p class="signin button">
            <button type="submit">Registre</button>
          </p>
        </form>
      </section>
      <!-- end main registre-->

      <!-- start main login -->
      <section class="login" id="login">
      <h2>Login</h2>
      <form action="confirmLogin.php" method="post" autocomplete="off">
          <p>
            <label for="emailsignup" class="youmail">Email</label>
            <input
              id="emailsignup"
              name="emailsignup"
              required="required"
              type="email"
              placeholder="exemple@mail.com"
            />
          </p>
          <p>
            <label for="passwordsignup" class="youpasswd">Password</label>
            <input
              id="passwordsignup"
              name="passwordsignup"
              required="required"
              type="password"
              placeholder="eg. X8df!90EO"
              pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
              title="Ha de contenir al menys un número y una lettra majúscula i minúscula, y al menys 8 carácters"
            />
          </p>
          <p class="signin button">
            <button type="submit">Login</button>
          </p>
        </form>
      </section>
    </main>

    <!--start footer-->
    <footer>
      <h2>El Diari</h2>
      <p>
        Copyright &copy;
        <script>
          document.write(new Date().getFullYear()); // Method that utomatically updates the year
        </script>
        El Diari
      </p>
    </footer>
    <!--end footer-->
  </body>
</html>