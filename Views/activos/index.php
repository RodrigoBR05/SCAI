<?php    include '../Head.php';?>
<?php    include '../HeaderAdminGeneral.php';?>

<!--Inicio de los elementos-->
<script>
    $(document).ready(function(){
        $('#tableUsuarios').DataTable({
            "dom": '<"right"i>rt<"left"fl>rt<"bottom"p><"clear">',
        });
        
        $("select").val('10');
  $('select').addClass("browser-default");
  $('select').material_select();
    });
  
</script>
    
<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Activos</a></div>
        </div>
    </nav>
</header>

<main >
    <br>    
    <div class="row">
        <div class="input-field  col l3 offset-l1"><a class="waves-effect waves-light btn light-blue darken-1">Generar reporte</a></div>         

            
    </div>
    <div class="divider"></div>
    <div class="row responsive-table">       
    
    <table class="display" id="tableActivos">
            <thead>
              <tr>
                  <th>Código</th>
                  <th>Número serie</th>
                  <th>Nombre</th>
                  <th>Departamento</th>
                  <th>Valor adquisición</th>
                  <th>Valor actual</th>
                  <th>Fecha ingreso</th>
                  <th>Actualizar</th>
                  <th>Eliminar</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>
                </td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>
                </td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>
                </td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>
                </td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              <tr>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>
                </td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              
               <tr>
                <td>Rodrigo</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td>Eclair</td>
                <td>$0.87</td>
                <td>Alvin</td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>
                </td>
                <td class="center">
                    <a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete_forever</i></a>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
          <ul class="pagination center">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
</main>
<?php    include '../Footer.php';?>




