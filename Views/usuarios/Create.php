<?php
session_start(); 
if (isset($_SESSION['id_admin'])) {
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Usuarios</a></div>
        </div>
    </nav>
</header>

<main>
    
    
</main>

<?php }else{ header('Location: '.URL.'autenticacion');}?>