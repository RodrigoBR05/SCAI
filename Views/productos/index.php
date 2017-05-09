<?php
session_start(); 
if (!isset($_SESSION['admin'])) {
   $_SESSION['admin'] = $_GET['admin'];
}
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>

<!--Inicio de los elementos-->
<script>
    $(document).ready(function(){
        $('#tableProductos').DataTable({
            "dom": '<"left"f>rt<"bottom"ip><"clear">',
            "order": [[0,"asc"]],
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
          <div class="nav-wrapper"><a class="page-title">Productos</a></div>
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
    
    <table class="display" id="tableProductos">
            <thead>
              <tr>
                  <th class="center">Nombre</th>
                  <th class="center">Descripcion</th>
                  <th class="center">Peso</th>
                  <th class="center">Proveedor</th>
                  <th class="center">Cantidad Minima</th>
                  <th class="center">Cantidad Actual</th>
                  <th class="center">Acciones</th>
              </tr>
            </thead>

            <tbody>
                <?php
                if (!empty($datos)) {
                    
                  while($row = mysqli_fetch_array($datos)){ ?>
                    <tr>
                        <td class="center"><?php echo $row['nombre']; ?></td>
                        <td class="center"><?php echo $row['descripcion']; ?></td>
                        <td class="center"><?php echo $row['peso']; ?></td>
                        <td class="center"><?php echo $row['proveedor']; ?></td>
                        <td class="center"><?php echo $row['cantidad_minima']; ?></td>
                        <td class="center"><?php echo $row['cantidad_actual']; ?></td>
                        <td class="center">
                            <a class="btn-floating waves-effect waves-light green " href="<?php echo URL; ?>productos/read/<?php echo $row['id_producto']; ?>" ><i class="material-icons">zoom_in</i></a>                       
                            <a class="btn-floating waves-effect waves-light orange" href="<?php echo URL; ?>productos/update/<?php echo $row['id_producto']; ?>"><i class="material-icons">build</i></a>                       
                            <a class="btn_delete btn-floating waves-effect waves-light red" href="<?php echo URL; ?>productos/delete/<?php echo $row['id_producto']; ?>"><i class="material-icons">delete_forever</i></a>
                        </td>
                    </tr>
                <?php }
                }?>              
              
            </tbody>
          </table>
        </div>
        
</main>
<?php }else{ header('Location: '.URL.'autenticacion');}?>
<!--index productos-->

