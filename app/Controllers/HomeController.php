<?php
namespace App\Controllers;

use App\Views\View;

class HomeController
{
    protected $view;
    
    public function __construct(View $view)
    {
        $this->view = $view;
    }
    
    public function index($request, $response)
    {
        $response->view->render($response, 'home.twig');
    }
}