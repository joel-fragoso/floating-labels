<!DOCTYPE html>
<html lang="pt_BR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Joel Fragoso">

    <!-- TITLE -->
    <title>Login - ZapDelivery</title>

    <!-- STYLESHEET -->
    <link rel="stylesheet" href="css/login.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

  </head>
  <body>

    <div class="login-panel">

      <!-- IMAGE -->
      <img src="img/polygon.png" alt="Polygon">

      <!-- FORM -->
      <form class="" action="" method="post" autocomplete="off">

        <div class="form-group">
          <input type="email" id="inputEmail" placeholder="Endereço de e-mail" required autofocus>
          <label for="inputEmail">Endereço de e-mail</label>
          <i class="fas fa-user"></i>
        </div>

        <div class="form-group">
          <input type="password" id="inputPassword" placeholder="Senha" required>
          <label for="inputPassword">Senha</label>
          <i class="fas fa-key"></i>
          <i id="eye" class="fas fa-eye"></i>
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit"><i class="fas fa-check-circle"></i> Entrar</button>
        </div>

      </form>

    </div>

    <!-- jQuery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
