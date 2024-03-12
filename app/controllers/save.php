<?php

require_once '../models/person.model.php';

$array  = array(
    'name'  => $_POST['name'],
    'email' => $_POST['email'],
    'age'   => $_POST['age']
);

echo json_encode(Person::saveData($array));