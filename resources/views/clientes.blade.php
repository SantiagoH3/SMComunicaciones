<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../sass/_clientes.scss">
    <link rel="stylesheet" href=" {{ mix ('/css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <title>Clientes</title>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand logobrand" href="home.html">SM Comunicaciones</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active menu">
                <a class="nav-link" href="clientes.html">Clientes <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="pagos.html">Pagos</a>
            </li>
            <li class="nav-item menu">
                <a class="nav-link" href="morosos.html">Morosos</a>
            </li>
            </ul>
        </div>
      </nav>
</body>
<body style='font-family: poppins; background-color: #E8F1FD;'>
    <div class="contain">
        <div class="table-container">
            <div class="table-header">
                <button class="btn-filtro" type="image" value="Filtro" src="../src/assets/filter.svg"><i class="fa fa-filter"></i><span class="filtro">&nbsp;&nbsp;Filtro</span></button>
            </div>
            <table class="table-sm">
                <thead>
                    <tr>
                        <th class="hcenter" scope="col">No.</th>
                        <th class="hcenter" scope="col">IP</th>
                        <th class="hcenter" scope="col">Localidad</th>
                        <th class="nom" scope="col">Nombre</th>
                        <th class="hcenter" scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>192.168.10.2</td>
                        <td>San Alexis</td>
                        <td class="nom">José Curiel</td>
                        <td>
                            <button class="edit"><i class="fas fa-pencil-alt"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>192.168.10.3</td>
                        <td>San Luis</td>
                        <td class="nom">Luis Alvarez</td>
                        <td>
                            <button class="edit"><i class="fas fa-pencil-alt"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>192.168.10.4</td>
                        <td>San Antonio</td>
                        <td class="nom">Santiago Hernández </td>
                        <td>
                            <button class="edit"><i class="fas fa-pencil-alt"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>192.168.10.5</td>
                        <td>San Diego</td>
                        <td class="nom">Diego Jimenez</td>
                        <td>
                            <button class="edit"><i class="fas fa-pencil-alt"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#delete"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="table-footer">
                <button class="btn-nc" data-toggle="modal" data-target="#exampleModal" type="submit">Nuevo Cliente</button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">			
                        <h4 class="modal-title">Nuevo Cliente</h4>
                    </div>
                    <div class="modal-body">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="text" class="input-nc nc-nombre" name="nombre" placeholder="Nombre(s)" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc nc-localidad border-nc" name="localidad" placeholder="Localidad" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc nc-fechaderegistro border-nc" name="fecharegistro" placeholder="Fecha de Registro" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc nc-telefono border-nc" name="telefono" placeholder="Número Telefónico" required="required">		
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-nc np-border" name="ip" placeholder="Dirección IP" required="required">		
                            </div> 
                            <div class="modal-footer">
                                <button type="button" class="btn-mnc btn-cerrar" data-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn-mnc btn-guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal eliminar cleinte -->
        <div class="modal fade modal-ec" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <h2>¿Seguro que quieres eliminar este Cliente?</h2>
                        <div class="buttons">
                            <button class="si-bc">Si</button>
                            <button class="no-bc" data-dismiss="modal">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>