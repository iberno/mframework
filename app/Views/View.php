<?php

namespace App\Views;

use Psr\Http\Message\ResponseInterface;
use Twig_Environment;

class View
{
    protected $twig;
    
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }
    
    public function render(ResponseInterface $response, $view, $data = [])
    {
        return $response->getBody()->write(
            $this->twig->render($view, $data)
        );
        return $response;
    }
}