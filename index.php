<?php

include_once 'Request.php';
include_once 'Router.php';
$router = new Router(new Request);

$router->get('/', function() {
  require_once('home.php');
});


$router->get('/checkout', function($request) {

    require_once('checkout.php');
});

$router->get('/admin', function($request) {

    require_once('admin.php');
});


$router->get('/admin/addproduct', function($request) {

    require_once('addproduct.php');

});

$router->post('/admin/addproduct', function($request) {

    return json_encode($request->getBody());
    
});

$router->post('/data', function($request) {

  return json_encode($request->getBody());
});

?>