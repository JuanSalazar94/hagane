<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagane</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/separacionIzqDere.css') }}">
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">  
    <script src="{{ URL::asset('js/Dynamic-Table.js') }}"></script>
    <script src="{{ URL::asset('js/Sidebar-Menu.js') }}"></script>

    <script src="{{ URL::asset('js/jquery.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>
</head>

<body>
    <!--
    <nav class="navbar navbar-default custom-header" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="navbar-header"><a href="#"><img src="logo.png" alt="" style="margin-right: 40px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li><a href="#">Alta de usuarios</a></li>
                    <li><a href="#">Clientes</a></li>
                    <li><a href="#">Proyectos </a></li>
                    
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Sony <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Tablet</a></li>
                      <li><a href="#">Smartphone</a></li>
                    </ul>
                </div>

                

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="#">Perfil </a></li>
                            <li role="presentation" class="active"><a href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    -->

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html"><img src="logo.png" alt="" style="margin-right: 40px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <!--<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
        
        <!-- 


        MENÚ DROPDOWN

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="">Usuarios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Clientes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="empleado.html">Empleados</a></li>
          </ul>
        </li> -->

        <li class=""><a href="{{ url('empresa') }}">Empresas<span class="sr-only">(current)</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Cliente</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('cliente') }}">Ver clientes</a></li>
            <li><a href="{{ url('relacionProyectoCliente') }}">Clientes y sus proyectos</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Proyecto</span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('proyecto') }}">Ver proyectos</a></li>
            <li><a href="{{ url('modulo') }}">Módulos</a></li>
            <li><a href="{{ url('progreso') }}">Progreso de proyectos</a></li>
            <li><a href="{{ url('avance') }}">Documentos de avances</a></li>
          </ul>
        </li>

        <li class=""><a href="{{ url('historial') }}">Historial de contacto<span class="sr-only">(current)</span></a></li>

        <li class=""><a href="{{ url('recordatorio') }}">Recordatorios<span class="sr-only">(current)</span></a></li>
<!-- 
        <li role="presentation"><a href="proyecto.html">Proyectos </a></li>
                    <li role="presentation"><a href="cliente.html">Clientes </a></li>
                    <li role="presentation"><a href="empresa.html">Empresas </a></li>
                    <li role="presentation"><a href="historial.html">Historial de contacto </a></li>
                    <li role="presentation"><a href="#">Línea de tiempo </a></li> -->

      </ul>
      
      <!-- INICIO DE SECCIÓN DE PERFIL -->

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Perfil</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

      <!-- FIN DE SECCIÓN DE PERFIL -->

    <!-- Empieza Modal button (Alta de cliente)-->
    <button type="button" class="btn btn-success gradient"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="margin-bottom: 25px;">Registrar empresa</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Alta de empresa</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!--<span aria-hidden="true">&times;</span>-->
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Nombre</label>
                <input type="text" class="form-control" id="nombreEmpresa" 
               minlength="8" maxlength="20">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Razón Social</label>
                <input type="text" class="form-control" id="razonSocial" minlength="8" maxlength="20">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">RFC</label>
                <input type="text" class="form-control" id="rfc" minlength="8" maxlength="20">
              </div>

              <p><b>Dirección:</b></p>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Calle y número</label>
                <input type="text" class="form-control" id="calleYnumero" maxlength="50">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Colonia</label>
                <input type="text" class="form-control" id="coloniaEmpresa" maxlength="50">
              </div>

              <div class="form-group">
                <label for="recipient-name" class="form-control-label">Código Postal</label>
                <input type="text" class="form-control" id="codigoPostal" maxlength="50">
              </div>

              <div class="half left cf">
              <label for="recipient-name" class="form-control-label">Ciudad</label>
                <input type="text" class="form-control" id="ciudadEmpresa" maxlength="20">
              </div>
              <div class="half right cf">
                <label form="recipient-name" class="form-control-label">Estado</label>                
                <select class="form-control" id="estadoEmpresa">
                  <option>Nuevo León</option>
                  <option>Coahuila</option>
                  <option>Tamaulipas</option>
                </select>
              </div>

              <div class="form-group">
                <label form="recipient-name" class="form-control-label">País</label>
                <select class="form-control" id="paisEmpresa">
                  <option>México</option>
                  <option>Estados Unidos</option>
                  <option>Canadá</option>
                </select>
              </div>

              <!-- Caja de comentarios

              <div class="form-group">
                <label for="message-text" class="form-control-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
              -->
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger gradient" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success gradient">Guardar</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        $('#altaUsuario').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
      })

    </script>


    <!-- Termina Modal button (Alta de cliente)-->

    <!-- -->

<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Razon Social</th>
                <th>Dirección</th>
                <th>RFC</th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Razon Social</th>
                <th>Dirección</th>
                <th>RFC</th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Starbucks</td>
                <td>Café Sirena</td>
                <td>UDEM</td>
                <td>AESEDEEFE123456</td>
                <td><span class = "glyphicon glyphicon-info-sign" class='clickable' data-toggle="modal" data-target="#infoModal" aria-hidden="true"></span>  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
            </tr>

        </tbody>
</table>      

<script type="text/javascript">
  
  $(document).ready(function() {
    $('#example').DataTable();
  } );

</script>


<!-- -->

    
</body>

</html>

<!-- OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO
OBSOLETO -->

<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagane</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css"> -->

    <!-- INICIO SCRIPTS CALENDARIO -->
    <!-- Include Bootstrap Datepicker -->
<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
/**
 * Override feedback icon position
 * See http://formvalidation.io/examples/adjusting-feedback-icon-position/
 */
#dateRangeForm .form-control-feedback {
    top: 0;
    right: -15px;
}

#codigoPostal{
  width: 80px;
}
</style> -->

    <!-- FIN SCRIPTS CALENDARIO -->

    <!--
    LIGAS PARA MODULO
    -->
    <!-- <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script> -->

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- </head>

<body>
    <nav class="navbar navbar-default custom-header" style="margin-bottom: 50px;">
        <div class="container-fluid">
            <div class="navbar-header"><a href="#"><img src="logo.png" alt="" style="margin-right: 40px;"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse"><span class="sr-only"></span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav links">
                    <li role="presentation"><a href="proyecto.html">Proyectos </a></li>
                    <li role="presentation"><a href="cliente.html">Clientes </a></li>
                    <li role="presentation"><a href="empresa.html">Empresas </a></li>
                    <li role="presentation"><a href="historial.html">Historial de contacto </a></li>
                    <li role="presentation"><a href="#">Línea de tiempo </a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"> <span class="caret"></span><img src="assets/img/avatar.jpg" class="dropdown-image"></a>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li role="presentation"><a href="#">Perfil </a></li>
                            <li role="presentation" class="active"><a href="#">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

 -->

<!--
MODAL
-->

    <!-- <button class="btn btn-success gradient" type="button" style="margin-right: 15px;">Registrar proyecto</button> -->

<!-- <button class="btn btn-success gradient" type="button" data-toggle="modal" data-target="#myModal" style="margin-right: 15px;">Registrar empresa</button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registro de empresa</h4>
        </div>
        <div class="modal-body">
        <div class="form-inline">
          <table>
            <tr>
              <th>Nombre</th>
              <th>Razon social</th>
              <th>RFC</th>
            </tr>
            <tr>
              <th><input type="text" name="nombreEmpresa"></th>
              <th><input type="text" name="razonSocial"></th>
              <th><input type="text" name="erreEfeSe"></th>              
            </tr>
          </table>

          <br><p>Dirección</p><br>

          <table>
            <tr>
              <th>Calle y número</th>
            </tr>
            <tr>
              <th><input type="text" name="calleYnumero"></th>       
            </tr>
            <tr>
              <th>Colonia</th>
            </tr>
            <tr>
              <th><input type="text" name="colonia"></th>       
            </tr>
            <tr>
              <th>Código postal</th>
            </tr>
            <tr>
              <th><input type="text" name="codigoPostal" id="codigoPostal"></th>       
            </tr>
            <tr>
              <th>Ciudad</th>
              <th>Estado</th>
            </tr>
            <tr>
              <th>
                <input type="text" name="ciudad">
              </th>      
              <th>
                <select>
                <option>Nuevo León</option>
                <option>Saltillo</option>
                <option>Tamaulipas</option>
                </select>
              </th> 
            </tr>
            <tr>
              <th>
                País
              </th>              
            </tr>
            <tr>
              <th>
                <select>
                <option>México</option>
                <option>Estados Unidos</option>
                <option>Canadá</option>
                </select>
              </th>
            </tr>
          </table>

          




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Registrar empresa</button>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Búsqueda">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th>#</th>
      <th class="col-md-5 col-xs-5">Nombre</th>
      <th class="col-md-4 col-xs-4">Razon Social</th>
      <th class="col-md-3 col-xs-3">Dirección</th>
      <th class="col-md-2 col-xs-2">RFC</th>
      <th class="col-md-2 col-xs-1"></th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No se encontraron resultados</td>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td>Softek</td>
      <td></td>
      <td>Gonzalitos</td>
      <td>ASDF9405122536</td>
      <td> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></td>
    </tr>
  </tbody>
</table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html> -->