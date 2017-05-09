<?php
$departamento = 'Segundo piso';
$codigo = substr($departamento, 0, 3);

print (strtoupper ( $codigo.date("is")));
