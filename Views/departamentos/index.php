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
        $('#tableDepartamentos').DataTable({
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
          <div class="nav-wrapper"><a class="page-title">Departamentos</a></div>
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
    
    <table class="display" id="tableDepartamentos">
            <thead>
              <tr>
                  <th class="center">Id</th>
                  <th class="center">Registrado/Modificado por</th>
                  <th class="center">Código</th>
                  <th class="center">Nombre</th>
                  <th class="center">Acciones</th>
              </tr>
            </thead>

            <tbody>
                <?php while($row = mysqli_fetch_array($datos)){ ?>
                    <tr>
                        <td class="center"><?php echo $row['id_departamento']; ?></td>
                        <td class="center"><?php echo $row['nombre_usuario']; ?></td>
                        <td class="center"><?php echo $row['codigo']; ?></td>
                        <td class="center"><?php echo $row['nombre']; ?></td>
                        <td class="center">
                            <a class="btn-floating waves-effect waves-light green" href="<?php echo URL; ?>departamentos/read/<?php echo $row['id_departamento']; ?>"><i class="material-icons">zoom_in</i></a>                       
                            <a class="btn-floating waves-effect waves-light orange" href="<?php echo URL; ?>departamentos/update/<?php echo $row['id_departamento']; ?>"><i class="material-icons">build</i></a>                       
                            <a class="btn_delete btn-floating waves-effect waves-light red" href="<?php echo URL; ?>departamentos/delete/<?php echo $row['id_departamento']; ?>"><i class="material-icons">delete_forever</i></a>
                        </td>
                    </tr>
                <?php } ?>              
              
            </tbody>
          </table>
        </div>
        
</main>
<?php }else{ header('Location: '.URL.'autenticacion');}?>