<?php  
session_start(); 
include '../Head.php'; 
include '../HeaderAdminGeneral.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/SCAI/Controllers/UsuariosController.php';

$usuariosController = new \Controllers\UsuariosController();
$datos = $usuariosController->index();
?>

<!--Inicio de los elementos-->
<script>
    $(document).ready(function(){
        $('#tableUsuarios').DataTable({
            "dom": '<"left"f>rt<"bottom"ip><"clear">',
            "order": [[1,"asc"]],
            "language": {
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "No se encontraron registros coincidentes",
            "paginate": {
                "next": "Siguiente",
                "previous": "Anterior"
            },
        }
        });
        
    });
  
</script>
    
<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Usuarios</a></div>
        </div>
    </nav>
</header>

<main >
    <div class="container center">
        <div class="input-field  col l3 offset-l1"><a class="waves-effect waves-light btn light-blue darken-1">Generar reporte</a></div>             
    </div>
    <br>    
    
    <div class="divider"></div>
    <div class="row responsive-table">       
    
    <table class="display" id="tableUsuarios">
            <thead>
              <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Email</th>
                  <th>Teléfono</th>
                  <th>Puesto</th>
                  <th>Fecha ingreso</th>
                  <th>Acciones</th>
              </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($datos)){ ?>
                    <tr>
                        <td><?php echo $row['id_usuario']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellidos']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td><?php echo $row['puesto']; ?></td>
                        <td><?php echo $row['fecha_ingreso']; ?></td>
                        <td class="center">
                            <a class="btn-floating waves-effect waves-light orange"><i class="material-icons">build</i></a>                       
                            <a class="btn_delete btn-floating waves-effect waves-light red" id="<?php echo $row['id_usuario']; ?>"><i class="material-icons">delete_forever</i></a>
                        </td>
                    </tr>
                <?php } ?>              
              
            </tbody>
          </table>
        </div>
        
</main>
<?php    include '../Footer.php';?>