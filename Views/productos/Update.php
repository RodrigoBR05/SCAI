<?php

/* 
 productos
 */
session_start(); 
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Actualizar producto</a></div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
    <div class="row">
        <form class="col s12" method="POST" id="actualizar_form" enctype="multipart/form-data">
          <div class="row">                   
              <div class="input-field col s6">
              <input type='text' id="nombre" name="nombre" class="validate" value="<?php echo $datos['nombre']; ?>" required>
              <label for="nombre" data-error="inválido" data-success="válido">Nombre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea" class="validate"><?php echo $datos['descripcion']; ?></textarea>
                <label for="descripcion" data-error="inválido" data-success="válido">Descripción del producto</label>
            </div>
            <div class="input-field col s6">
                <input type="text" id="proveedor" name="proveedor"  class="validate" value="<?php echo $datos['proveedor']; ?>" required>
              <label for="proveedor" data-error="inválido" data-success="válido">Proveedor</label>
            </div>
            <div class="input-field col s6">
              <input type='text' id="peso" name="peso" class="validate" value="<?php echo $datos['peso']; ?>" required>
              <label for="peso" data-error="inválido" data-success="válido">Peso</label>
            </div>
          </div>       
            <div class="row">
            <div class="input-field col s6">
                <input type="number" id="cantidadMinima" name="cantidadMinima" class="validate" 
                       value="<?php echo $datos['cantidad_minima']; ?>" required>
              <label for="cantidadMinima" data-error="inválido" data-success="válido">Cantidad Mínima</label>
            </div>            
            <div class="input-field col s6">
                <input type="number" id="cantidadActual" name="cantidadActual" class="validate"  
                       value="<?php echo $datos['cantidad_actual']; ?>" required>
              <label for="cantidadActual" data-error="inválido" data-success="válido">Cantidad actual</label>
            </div>            
          </div>
            <img src="Views/activos/imagenes/1908archivero.jpg" alt="Activo">
            <?php echo $datos['ruta_imagen'];?>
            <div class="row">       
            <div class="input-field col s6">
                <label for="imagen">Cambiar imagen</label>
                 </div>
            </div>
            <div class="row">                
                <div class="input-field col s6">
                    <input type="file" name="imagen" id="imagen" >
                </div>
            </div>
            <div class='row center'>
              <button data-target="modalActualizarProducto" name='btn_reg_producto' class='col s12 l4 offset-l4 btn waves-effect blue darken-4'>Actualizar producto</button>
            </div>
        </form>
    </div>
    </div>
    <!--MODAL DE CONFIRMACIÓN-->
    <div id="modalActualizarProducto" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Actualizar producto</h4>
          <p>¿Desea actualizar el producto?</p>
        </div>
        <div class="modal-footer">
            <button type="reset" form="actualizar_form" class="modal-action modal-close waves-light waves-green btn-flat black-text">Cancelar</button>
            <button type="submit" form="actualizar_form" class="modal-action modal-close waves-light waves-green btn-flat white-text blue darken-4">Aceptar</button>
        </div>
      </div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Footer.php';?>
<?php }else{ header('Location: '.URL.'autenticacion');}?>



