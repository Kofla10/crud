<?php

require_once "../models/person.model.php";

$data  = array(
    'id'    => $_POST['id'],
    'name'  => $_POST['names'],
    'email' => $_POST['email'],
    'age'   => $_POST['age'],
);
echo json_encode(Person::updateData($data));