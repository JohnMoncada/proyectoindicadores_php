

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <ul class="navbar-nav mr-auto"></ul>
        <form class="form-inline">
             <button class="btn btn-outline-success" type="button">Login</button>
        </form>
    </nav>
    </head>

    <body class="background">
       
        <div class="contenedor">
             
        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="../img/legal.png">
            <div class="card-body" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <h5 class="card-title" style="font-weight: bold;">Modulo Legal</h5>
            <p class="card-text">El módulo Legal, constituido por las tablas y los datos definidos en el decreto 1330 de 2019</p>
            <a href="#" class="btn btn-danger ">mas info</a>
        </div>
            <div class="rectangulo-rojo" style="background-color: #dc3545"></div>
        </div>

        <div class="card " style="width: 18rem;">
        <form id="frmUsuarios" method="post" action="vistaTipoindicador.php">
            <img class="card-img-top" src="../img/indicador.png" alt="Card image cap">
            <div class="card-body" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <h5 class="card-title" style="font-weight: bold;"> Modulo Indicador</h5>
            <p class="card-text" >El módulo de indicadores, constituido por las tablas asociadas a la gestión de indicadores.</p>
            <input type ="submit" href="#" class="btn btn-primary" id="btnIndicador" name="boton" value="Mas info"></input>
        </div>
        <div class="rectangulo-rojo" style="background-color: #007bff"></div>
        </form>
        </div>

        <div class="card" style="width: 18rem;">
        <form id="frmUsuarios" method="post" action="vistaUsuarios.php">
            <img class="card-img-top" src="../img/usuario.png" alt="Card image cap">
            <div class="card-body" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
            <h5 class="card-title" style="font-weight: bold;">Modulo Usuario</h5>
            <p class="card-text" >El módulo de usuarios, constituido por las tablas asociadas a la gestión de usuarios.</p>
            <input type="submit" href="#" class="btn btn-warning" id="btnUsuario" name="boton" value="Mas info"></input>
        </div>
        <div class="rectangulo-rojo" style="background-color: #ffc107"></div>
        </form>
        </div>
        
    </div>

        <script src="" async defer></script>
    </body>
</html>