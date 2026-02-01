
<?php

$config = require "config.php";

$db = new database($config['database']);

if (!isset($_GET['id'])) {
    die("User ID not provided");
}

$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id = :id";
$user = $db->query($query, [':id' => $id])->find();

if (!$user) {
    die("User not found");
}

require "views/user_profile.view.php";

