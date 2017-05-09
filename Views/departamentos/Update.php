<?php
session_start(); 
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Actualizar departamento</a></div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
    <div class="row">
        <form class="col s12" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input type='text' value="<?php echo $datos['nombre']; ?>" id="nombre" name="nombre" class="validate black-text" required>
              <label  class="grey-text text-darken-3" for="nombre">Nombre</label>
            </div>                  
            <div class="input-field col s6">
              <input disabled  type='text' value="<?php echo $datos['codigo']; ?>" id="codigo" name="codigo" class="validate black-text" required>
              <label class="grey-text text-darken-3" for="codigo" data-error="inválido" data-success="válido">Código</label>
            </div>              
          </div>
          <div class="row">
            <div class="input-field col s12">
              <textarea id="descripcion" name="descripcion" class="materialize-textarea validate black-text" required><?php echo $datos['descripcion']; ?></textarea>
              <label for="descripcion" data-error="inválido" data-success="válido">Descripción</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input disabled  type='text' value="<?php echo $datos['nombre_usuario']." ".$datos['apellidos']; ?>" id="puesto" name="puesto" class="validate black-text" required>
              <label class="grey-text text-darken-3" for="puesto" data-error="inválido" data-success="válido">Registrado/Modificado por</label>
            </div>            
          </div>          
          <div class='row center'>
             <button type='submit' name='btn_login' class='col s12 l4 offset-l4 btn waves-effect blue darken-4'>Actualizar departamento</button>
          </div>
           <input type='text' id="id_usuario" name="id_usuario" value="<?php echo $_SESSION['admin']; ?>" style="visibility:hidden">
        </form>
    </div>
    </div>
</main>
<?php }else{ header('Location: '.URL.'autenticacion');}?>