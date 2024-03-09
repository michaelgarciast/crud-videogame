
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
          <div class="col-md-12">
            <div class="pull-right">
              <a href="formRegistrar.php" class="btn btn-primary"> <span class="glyphicon glyphicon-plus"></span> Nuevo</a>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <fieldset>
              <legend>Listado Anime</legend>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Titulo</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th class="text-center">Foto</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#</td>
                    <td>Titulo</td>
                    <td>Categoria</td>
                    <td>Precio</td>
                    <td class="text-center">Foto</td>
                    <td class="text-center">
                    <a href="formRegistrar.php" class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-trash"></span></a>
                    <a href="formActualizar.php" class="btn btn-success btn-sm"> <span class="glyphicon glyphicon-edit"></span></a>
                    </td>
                  </tr>
                </tbody>
              </table>
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
