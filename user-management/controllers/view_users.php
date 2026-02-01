
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require "config.php";

$db = new database($config['database']);

$limit = 10;
$page  = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$start = (int) $start;
$limit = (int) $limit;

$query = "SELECT * FROM users LIMIT $start, $limit";
$users = $db->query($query)->findAll();


$countQuery = "SELECT COUNT(*) AS total FROM users";
$total_records = $db->query($countQuery)->find()['total'];

$total_pages = ceil($total_records / $limit);

require "views/view_user.view.php";



   