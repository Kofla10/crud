<?php

require_once "../models/person.model.php";

// $data  = array(
//     'id'  => $_POST['id']
// );

echo json_encode(Person::deleteData($_POST['id']));