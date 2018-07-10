<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>

<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>MV - Ataíde Teruel</title>
  </head>
  <body>

    <header class="d-flex align-items-center">
      <div class="container text-center">
        <div class="confirmar">

          <div class="p-2 text-white title text-uppercase">
            <h3>Confirme seus dados para apoiar</h3>
          </div>

          <form class="form-inline">
            <input type="text" class="form-control mb-2 mr-sm-2" id="seunome" placeholder="Seu Nome">
            <input type="text" class="form-control mb-2 mr-sm-2" id="seuemail" placeholder="Seu Email">
            <input type="text" class="form-control mb-2 mr-sm-2" id="seuemail" placeholder="Seu Nascimento">
            <input type="text" class="form-control mb-2 mr-sm-2" id="whatsapp" placeholder="Celular">
            <select class="custom-select form-control">
              <option selected>Seu Estado...</option>
              <option value="1">AC</option>
              <option value="2">SP</option>
              <option value="3">TO</option>
            </select>
            <select class="custom-select form-control">
              <option selected>Sua Cidade...</option>
              <option value="1">Cosmopolis</option>
              <option value="2">Pindamoiangaba</option>
              <option value="3">Tucuruvi</option>
            </select>
            <button type="submit" class="btn btn-warning mb-2 p-3"><b>CONFIRMAR</b></button>
          </form>

        </div>
      </div>
    </header>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>