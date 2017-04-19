<?php namespace Views;

    $template = new Template();

    class Template{
        
        public function __construct() {
?>
         <!DOCTYPE html>
         <html lang="es">
          <head>
            <meta charset="UTF-8">
            <title>Sistema de Control de Activos e Inventario</title>
            <!--Import Google Icon Font-->
            <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <!--Import materialize.css-->
            <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>Views/template/css/materialize.css"  media="screen,projection"/>
            <link type="text/css" rel="stylesheet" href="<?php echo URL; ?>Views/template/css/scaicss.css"  media="screen,projection"/>

            <!--Let browser know website is optimized for mobile-->
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          </head>

          <body>              
              
              <header>
                <div class="container">
                  <a href="#" data-activates="slide-out" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons white-text">menu</i></a>

                  <ul id="slide-out" class="side-nav fixed light-blue darken-1">
                    <li><div class="userView">
                      <img class="circle" src="Views/template/img/logo.png">
                    </div></li>
                    <li><a href="#!" class="white-text">PORTAFOLIO</a></li>
                    <li><a href="#!" class="white-text">TARJETAS DE PRESENTACIÓN</a></li>
                    <li><a href="#!" class="white-text">LOGOTIPOS</a></li>
                    <li><div class="divider"></div></li>
                    <li><a href="#!" class="white-text">AFICHES</a></li>
                    <li><a href="#!" class="white-text">SITIOS WEB</a></li>
                    <li><a href="#!" class="white-text">CONTÁCTANOS</a></li>            

                  </ul>        
                </div>
              </header>
              
              
            
<?php            
        }
        
        public function __destruct() {
 ?>
        <footer class="page-footer">   
            <div class="footer-copyright">
                <div class="container center">
                Copyright © 2017 Centro Diurno Paraíso
                </div>
            </div>
        </footer>
        <!--Import jQuery before materialize.js-->
            <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script type="text/javascript" src="<?php echo URL;?>Views/Template/js/materialize.min.js"></script>
            
            <!--Inicio de los elementos-->
            <script type="text/javascript">
              $( document ).ready(function(){
                $(".button-collapse").sideNav({
                  menuWidth: 300
                });


              });
            </script>
          </body>
        </html>
 <?php
            
        }
    }

?>

