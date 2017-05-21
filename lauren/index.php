<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Aplicación</title>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>
    <form action="home.php">
     <div class="container">
     <div>
     </div>

       <label><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="uname" required>

       <label><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="psw" required>

       <button type="submit">Login</button>

     </div>
     <div class="g-recaptcha" data-sitekey="6Ld-VyIUAAAAAFejMEpjvVPPWZkrU_koBlbU9GSR"></div>
    </form>

  </body>
</html>
