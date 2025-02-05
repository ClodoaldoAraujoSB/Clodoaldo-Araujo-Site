<?php
include_once("empresas/ca3.php");
include_once("empresas/ca3_steel.php");
include_once("empresas/circuit.php");
include_once("empresas/isteel.php");
include_once("empresas/point_pixel.php");
include_once("empresas/rota_da_inovacao.php");
include_once("empresas/spyder_race.php");
include_once("empresas/startup_school.php");
include_once("empresas/super_business.php");
include_once("empresas/ca3inc.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Empresas || Clodoaldo Araújo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      font-family: Montserrat, sans-serif;
      background-color: #282828;
    }

    .lista_empresas {
      padding-bottom: 6px;
      background-color: #282828;
    }

    .div_lista_empresas {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .div_lista_empresas button {
      width: 400px;
      height: 100px;
      margin: 10px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      flex: 1;
      background-color: #282828;
      /* Cresce para ocupar o espaço restante */
    }

    @media only screen and (max-width: 768px) {
      .lista_empresas {
        padding-bottom: 6px;
      }

      .div_lista_empresas {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .div_lista_empresas button {
        width: 90%;
        height: 100px;
        margin: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      /*.btn {
        width: 100%;
      }*/

    }
  </style>

  </head>
  <body>
    <!-- MENU SUPERIOR - INICIO -->
    <?php
    $caminho = $_SERVER['PHP_SELF']; 
    include("header.php"); 
    ?>
    <!-- MENU SUPERIOR - FINAL -->

    <!-- TITULO - INICIO -->
    <h2 style="text-align: center; padding-top: 15px; background-color: #282828; margin: 0px; color: #e2e2e2;">Empresas</h2>
    <!-- TEXTO - INICIO -->

    <!-- LISTA DE EMPRESAS - INICIO -->
    <div class="lista_empresas">
      <div class="div_lista_empresas">
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#ca3Modal"><img src="../logos/logo-ca3.png" alt="ca3" style="height: 60px;"></button>
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#ca3_steelModal"><img src="../logos/logo-ca3_steel.png" alt="ca3 steel" style="height: 50px;"></button>
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#circuitModal"><img src="../logos/logo-circuit.png" alt="circuit" style="height: 50px;"></button>
      </div>
      <div class="div_lista_empresas">
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#isteelModal"><img src="../logos/logo-isteel.png" alt="isteel" style="height: 50px;"></button>
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#point_pixelModal"><img src="../logos/logo-point_pixel.png" alt="Point Pixel" style="width: 230px;"></button>
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#ca3_incModal"><img src="../logos/logo-ca3_inc.png" alt="ca3" style="height: 100px; width: 350px;"></button>
      </div>
      <div class="div_lista_empresas">
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#rota_da_inovacaoModal"><img src="../logos/logo-rota.png" alt="Rota da Inovaçao" style="height: 50px;"></button>
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#spyder_raceModal"><img src="../logos/logo-spyderrace.png" alt="Spyder Race" style="height: 50px;"></button>
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#startup_schoolModal"><img src="../logos/logo ss_resized.png" alt="Startup School" style="width: 140px;"></button>
      </div>
      <div class="div_lista_empresas" style="display:flex; justify-content:center">
        <button type="button" class="btn btn-dark" style="background-color: #161616;" data-bs-toggle="modal" data-bs-target="#super_businessModal"><img src="../logos/logo-super_business.png" alt="Super Business" style="height: 60px;"></button>
      </div>
    </div>
  </div>
  <!-- LISTA DE EMPRESAS - FIM -->

  <div class="content"></div>

  <!-- RODAPÉ -->
  <?php include("footer.php"); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>