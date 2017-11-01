<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class HomeController extends MainController
{

  /**
   * Constructor
   */
  public function __construct(){
    parent::__construct();
  }

  /**
   * Homepage
   */
  public function getHome(Request $request, Response $response, $args) {
  
    // Pass data and serve View
    $response =  $this->twig->render('index.twig', array(
      'name' => $this->app_name,
    ));
    
    return $response;
  }

// End Class
}
