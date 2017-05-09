<?php
session_start(); 
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>
<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Detalles del departamento</a></div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
    <div class="row">
        <form class="col s12" method="POST">
          <div class="row">
            <div class="input-field col s6">
                <input disabled type='text' value="<?php echo $datos['nombre']; ?>" id="nombre" name="nombre" class="validate black-text" required>
              <label  class="grey-text text-darken-3" for="nombre">Nombre</label>
            </div>              
            <div class="input-field col s6">
              <input disabled  type='text' value="<?php echo $datos['codigo']; ?>" id="codigo" name="codigo" class="validate black-text" required>
              <label class="grey-text text-darken-3" for="codigo" data-error="inválido" data-success="válido">Código</label>
            </div>              
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea disabled id="descripcion" name="descripcion" class="materialize-textarea validate black-text" ><?php echo $datos['descripcion']; ?></textarea>
              <label for="descripcion" data-error="inválido" data-success="válido">Descripción</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input disabled  type='text' value="<?php echo $datos['nombre_usuario']." ".$datos['apellidos']; ?>" id="puesto" name="puesto" class="validate black-text" required>
              <label class="grey-text text-darken-3" for="puesto" data-error="inválido" data-success="válido">Registrado/Modificado por</label>
            </div>            
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input disabled  type='text' value="<?php echo $datos['fecha_ingreso']; ?>" id="fecha_ingreso" name="fecha_ingreso" class="validate black-text" required>
              <label class="grey-text text-darken-3" for="fecha_ingreso" data-error="inválido" data-success="válido">Fecha ingreso</label>
            </div>
            <div class="input-field col s6">
              <input disabled  type='text' value="<?php echo $datos['fecha_modificacion']; ?>" id="fecha_modificacion" name="fecha_modificacion" class="validate black-text" required>
              <label class="grey-text text-darken-3" for="fecha_modificacion" data-error="inválido" data-success="válido">Fecha modificación</label>
            </div>             
          </div>
        </form>
    </div>
    </div>
</main>
<?php }else{ header('Location: '.URL.'autenticacion');}?>