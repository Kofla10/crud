<?php

require_once '../models/person.model.php';

echo json_encode(Person::showData());



// valida si una ruta existe
// $ruta = '../models/person.model.php';

// if (file_exists($ruta)) {
//     echo "La ruta es válida.";
// } else {
//     echo "La ruta no es válida o el archivo no existe.";
// }