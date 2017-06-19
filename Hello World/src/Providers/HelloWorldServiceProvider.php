<?php
/**
 * Created by PhpStorm.
 * User: plenty
 * Date: 19.06.17
 * Time: 10:41
 */

namespace HelloWorld\Providers;


use Plenty\Plugin\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     */

    public function register()
    {
        $this->getApplication()->register(HelloWorldRouteServiceProvider::class);
    }
}