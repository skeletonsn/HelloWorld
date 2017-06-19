<?php
/**
 * Created by PhpStorm.
 * User: plenty
 * Date: 19.06.17
 * Time: 10:44
 */

namespace HelloWorld\Controllers;


use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function sayHello(Twig $twig):string
    {
        return $twig->render('HelloWorld::content.hello');
    }
}