<?php 

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = [
    "/user-management/" => "controllers/index.php",
    "/user-management/add-user" => "controllers/add_user.php",
    "/user-management/view-users" => "controllers/view_users.php",
    "/user-management/user-profile" => "controllers/user_profile.php"
];

redirect($uri,$routes);
function abort($response){
    require "controllers/" . $response . ".php";
    die();
}

function redirect($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}