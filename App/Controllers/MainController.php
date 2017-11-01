<?php

namespace App\Controllers;


class MainController
{
  public $app_name = 'Slim & Twig App';
  public $logger;
  public $twig;

  public function __construct(){
    // Twig (View template engine)
    $loader = new \Twig_Loader_Filesystem('./templates');
    $this->twig = new \Twig_Environment($loader, array(
      'debug' => true,
    ));
    $this->twig->addExtension(new \Twig_Extension_Debug());
  }

// End Class
}
