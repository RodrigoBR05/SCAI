<?php
session_start(); 
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Detalles del activo</a></div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
    <div class="row">
        <form class="col s12" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="input-field col s6">
                <input type='text' id="numSerie" name="numSerie" class="validate" value="<?php echo $datos['numero_serie']; ?>" readonly="">
              <label for="numSerie" data-error="inválido" data-success="válido">Número de serie</label>
            </div>         
              <div class="input-field col s6">
              <input type='text' id="nombre" name="nombre" class="validate" value="<?php echo $datos['nombre']; ?>" readonly="">
              <label for="nombre" data-error="inválido" data-success="válido">Nombre</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
                <textarea id="descripcion" name="descripcion" class="materialize-textarea" class="validate" readonly=""><?php echo $datos['descripcion']; ?></textarea>
                <label for="descripcion" data-error="inválido" data-success="válido">Descripción del activo</label>
            </div>
            <div class="input-field col s6">
                <input type="text" id="donadoPor" name="donadoPor"  class="validate" value="<?php echo $datos['donado_por']; ?>" readonly="">
              <label for="donadoPor" data-error="inválido" data-success="válido">Donado por</label>
            </div>
              <div class="input-field col s6">                 
                 <select class="browser-default" name="departamento" readonly="">
                  <option value="" disabled selected>Seleccione el departamento</option>
                  <option value="OFICINA" <?php if($datos['ubicacion_departamento'] == "OFICINA"){?> selected="selected" <?php }?>>Oficina</option>
                  <option value="FISIOTERAPIA" <?php if($datos['ubicacion_departamento'] == "FISIOTERAPIA"){?> selected="selected" <?php }?>>Sala de fisioterapia</option>
                  <option value="COMEDOR" <?php if($datos['ubicacion_departamento'] == "COMEDOR"){?> selected="selected" <?php }?>>Sala de comedor</option>
                  <option value="TELEVISIÓN" <?php if($datos['ubicacion_departamento'] == "TELEVISION"){?> selected="selected" <?php }?>>Sala de televisión</option>
                </select>
          </div>
          </div>       
            <div class="row">
            <div class="input-field col s6">
                <input type="number" id="valorAdquisicion" name="valorAdquisicion" class="validate"
                       value="<?php echo $datos['valor_adquisicion']; ?>" readonly="">
              <label for="valorAdquisicion" data-error="inválido" data-success="válido">Valor de aquisición</label>
            </div>            
            <div class="input-field col s6">
                <input type="number" id="valorActual" name="valorActual" class="validate" 
                       value="<?php echo $datos['valor_actual']; ?>" readonly="">
              <label for="valorActual" data-error="inválido" data-success="válido">Valor actual</label>
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
        </form>
    </div>
    </div>
</main>
<?php include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Footer.php';?>
<?php }else{ header('Location: '.URL.'autenticacion');}?>


