<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/comum.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/icofont.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <title>Facility Ponto</title>
</head>
<body>
    <form action="#" method="post" class="form-login">
      <div class="card login-card">
        <div class="card-header">
          <i class="icofont-travelling white"></i>
          <span class="font-weight-light facili">Facility</span>
          <span class="font-weight-bold pont">Ponto</span>
          <i class="icofont-runner-alt-1 white"></i>
        </div>
        <div class="card-body">
          <?= include(VIEW_PATH. '/template/messagens.php')?>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="<?= $_POST['email']?>" placeholder="Informe o e-mail">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Informe a senha">
          </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-lg">Entrar</button>
        </div>
      </div>
    </form>

    <?= $texto ?>
</body>
</html>