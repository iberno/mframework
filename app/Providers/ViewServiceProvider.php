<?php

namespace App\Providers;

use Twig_Loader_Filesystem;
use Twig_Environment;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        View::class
    ];
    public function register()
    {
        $container = $this->getContainer();
        
        /**
         * Local to render views TWIG
         */
        $container->share(View::class, function () {
            $loader = new Twig_Loader_Filesystem(__DI__ . '/../../views');
            
            $twig = new Twig_Environment($load, [
                'cache' => false,
            ]);
            
            return new View($twig);
        });
    }
}

//Nem tudo que conta pode ser contado e nem tudo o que é contado, verdadeiramente conta.