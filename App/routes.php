<?php
/**
 * Here are registered all your App's routes
 */




 /*** REGISTER CONTROLLERS TO USE WITH ROUTES AS CONTAINERS ***/
$container = $app->getContainer();

// Home
$container['HomeController'] = function ($c) {
  return new App\Controllers\HomeController();
};



 /*** REGISTER ROUTES ***/

// Homepage
$app->get('/', 'HomeController:getHome');


//Route with params
$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
  
  //Logs Visits to the log file
  //$container['logger']
  $this->logger->addInfo("$name just visited us!");
  
  // Get url param
  $name = $args['name'];
  // Output
  $response->getBody()->write("Hello, $name");
  return $response;
});