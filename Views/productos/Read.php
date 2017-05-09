<?php
/* 
 Read Producto
 */

session_start(); 
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Detalles del producto</a></div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
    <div class="row">
        <form class="col s12" method="POST" enctype="multipart/form-data">
          <div class="row">                    
            <div class="input-field col s6">
              <input type='text' id="nombre" name="nombre" class="validate" value="<?php echo $datos['nombre']; ?>" readonly="">
              <label for="nombre" data-error="inválido" data-success="válido">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input type="text" id="proveedor" name="proveedor"  class="validate" value="<?php echo $datos['proveedor']; ?>" readonly="">
              <label for="proveedor" data-error="inválido" data-success="válido">Proveedor</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea" class="validate" readonly=""><?php echo $datos['descripcion']; ?></textarea>
                <label for="descripcion" data-error="inválido" data-success="válido">Descripción del producto</label>
            </div>
            
              
            <div class="input-field col s6">
                <input type='text' id="peso" name="peso" class="validate" value="<?php echo $datos['peso']; ?>" readonly="">
              <label for="peso" data-error="inválido" data-success="válido">Peso</label>
            </div>   
              
          </div>       
            <div class="row">
            <div class="input-field col s6">
                <input type="number" id="cantidadMinima" name="cantidadMinima" class="validate"
                       value="<?php echo $datos['cantidad_minima']; ?>" readonly="">
              <label for="cantidadMinima" data-error="inválido" data-success="válido">Cantidad Mínima</label>
            </div>            
            <div class="input-field col s6">
                <input type="number" id="cantidadActual" name="cantidadActual" class="validate" 
                       value="<?php echo $datos['cantidad_actual']; ?>" readonly="">
              <label for="cantidadActual" data-error="inválido" data-success="válido">Cantidad actual</label>
            </div>            
          </div>
          <div class="row center">
                <img src="<?php echo URL.$datos['ruta_imagen']; ?>" alt="Activo" width="150" height="150" alt="" class="circle responsive-img">
          </div>
        </form>
    </div>
    </div>
</main>
<?php }else{ header('Location: '.URL.'autenticacion');}?>




