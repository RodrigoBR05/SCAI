<?php

session_start(); 
if (!isset($_SESSION['admin'],$_SESSION['tipo'])) {
    $_SESSION['tipo'] = $_GET['tipo'];
    $_SESSION['admin'] = $_GET['admin'];
}
if (isset($_SESSION['admin'],$_SESSION['tipo'])) {
    include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/Head.php'; 
    if($_SESSION['tipo']==1){
        include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminGeneral.php';
    }elseif($_SESSION['tipo']==2){
        include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminActivos.php';
    }elseif($_SESSION['tipo']==3){
        include $_SERVER['DOCUMENT_ROOT'].'/SCAI/Views/HeaderAdminInventarioComedor.php';
    }
?>

<header>
    <nav class="top-nav">
        <div class="container center">
          <div class="nav-wrapper"><a class="page-title">Centro Diurno Paraíso</a></div>
        </div>
    </nav>
</header>

    <main>
        <div class="container">
            <div class="row">
                <form class="col s12 background light-blue" id="agregar_form">
                    <h5 class="bold">Acerca De</h5>    
                        <p class="black-text background light-blue"> El Sistema de Control de Activos e Inventarios (SCAI) fue desarrollado como parte de un proyecto 
                            de la carrera Informática Empresarial del Recinto de Paraíso de la Universidad de Costa Rica. Agradecemos al Centro
                            Diruno de Paraíso por confiar en nosotros y brindarnos el espacio.</p>
                        <h6 class="black-text bold">Desarrollado por:</h6>
                        <h6 class="black-text bold">Rodrigo Brenes Ramírez</h6>
                        <h6 class="black-text bold">Melvin Marín Navarro</h6>
                        <h6 class="black-text bold">Rocío Oconitrillo Segura</h6>

                        <P class="black-text background light-blue"></P>       
                </form>
            </div>
        </div>
<?php }else{ header('Location: '.URL.'autenticacion');}?>

