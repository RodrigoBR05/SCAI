<!DOCTYPE html>
 <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Sistema de Control de Activos e Inventario</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../assets/css/scaicss.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
    <style>
        body {
            background-color: #eeeeee;
        }
    </style>
    
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>

    <!--Inicio de los elementos-->
    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav({
          menuWidth: 300
        });
        $(document).ready(function() {
          $('select').material_select();
        });
      });
    </script>
  </head>