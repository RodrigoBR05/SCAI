<?php
session_start(); 
if (isset($_SESSION['admin'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Agregar usuario</a></div>
        </div>
    </nav>
</header>

<main>
    <div class="container">
    <div class="row">
        <form class="col s12" method="POST">
          <div class="row">
            <div class="input-field col s6">
              <input type='text' id="nombre" name="nombre" class="validate" required>
              <label for="nombre" data-error="inválido" data-success="válido">Nombre</label>
            </div>
            <div class="input-field col s6">
              <input type='text' id="apellidos" name="apellidos" class="validate" required>
              <label for="apellidos" data-error="inválido" data-success="válido">Apellidos</label>
            </div>              
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input type="email" id="email" name="email"  class="validate" required>
              <label for="email" data-error="inválido" data-success="válido">Email</label>
            </div>
            <div class="input-field col s6">
                <input type="tel" id="telefono" name="telefono"  class="validate" placeholder="00000000" required>
              <label for="telefono" data-error="inválido" data-success="válido">Teléfono</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input type='text' id="puesto" name="puesto" class="validate" required>
              <label for="puesto" data-error="inválido" data-success="válido">Puesto</label>
            </div>            
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input type='text' id="user" name="user" class="validate" required>
              <label for="user" data-error="inválido" data-success="válido">Usuario</label>
            </div>
            <div class='input-field col s6'>
              <input type='password' name='password' id='password' class='validate' required/>
              <label for='password' data-error="inválido" data-success="válido">Contraseña</label>
            </div>             
          </div>
          <div class="row">
             
             <div class="input-field col s12">                 
                 <select class="browser-default" name="id_tipo_usuario" required>
                  <option value="" disabled selected>Seleccione el tipo de usuario</option>
                  <option value="1">Administrador general</option>
                  <option value="2">Administrador de activos</option>
                  <option value="3">Administrador de inventario comedor</option>
                </select>
              </div>
          </div>
            <div class='row center'>
              <button type='submit' name='btn_login' class='col s12 l4 offset-l4 btn waves-effect blue darken-4'>Registrar usuario</button>
            </div>
        </form>
    </div>
    </div>
</main>
<?php }else{ header('Location: '.URL.'autenticacion');}?>