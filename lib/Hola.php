<?php
//Autor: Laura Hernández <laura.hercip@educa.jcyl.es>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre =trim(fgets(STDIN));
print new HolaMundo($nombre);


