<?php

$config = require "config.php";


$db = new database($config['database']);

if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $dob   = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO users (name, dob, email, phone)
              VALUES (:name, :dob, :email, :phone)";

    $db->query($query, [
        ':name'  => $name,
        ':dob'   => $dob,
        ':email' => $email,
        ':phone' => $phone
    ]);

    if ($db->rowCount() === 1) {
        echo "<script>alert('User added successfully');</script>";
    } else {
        echo "Failed to add user";
    }
}

require "views/add_user.view.php";
