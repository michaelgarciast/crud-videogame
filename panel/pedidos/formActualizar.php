
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CREATIC</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">CREATIC</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right">
            <li class="active">
            <a href="index.php" class="btn">Pedido</a>
            </li>
            <li>
            <a href="../animes/index.php" class="btn">Anime</a>
            </li> 
            <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                Admin <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Salir</a></li>
                </ul>
            </li>
        </ul>

        </div><!--/.nav-collapse -->
    </div>
    </nav>

    <div class="container" id="main">      
        <div class="row">
            <div class="col-md-6">
                <fieldset>
                    <legend>Datos del anime</legend>
                        <form method="POST" action="../acciones.php" enctype ="multipart/form-data">
                            <div class="mb-3">
                                <label>Titulo</label>
                                <input type="text" name="titulo" class="form-control"required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label>Descripcion</label>
                                <textarea name="descripcion" class="form-control" id="" cols="4" required></textarea>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label>Categoria</label>
                                <select class="form-control" name="categoria-i_" required>
                                    <option value="">--Seleccionar--</option>
                                </select>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label>Foto</label>
                                <input type="file" name="foto" class="form-control"required>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label>Precio</label>
                                <input type="text" name="precio" class="form-control" placeholder="0.00" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="index.php" class="btn btn-primary">Cancelar</a>
                        </form>
            </fieldset>
            </div>
        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>

</body>
</html>
