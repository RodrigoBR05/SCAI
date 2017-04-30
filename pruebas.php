<?php
$contrasena = password_hash('micontraseña', PASSWORD_DEFAULT, [15]);
echo $contrasena;

if(password_verify('micontraseña2', $contrasena)){
    // Password correcto!
    echo "Sirve el método de encriptacion";
}

print (date("d/m/Y"));
