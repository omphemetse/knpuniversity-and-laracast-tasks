<?php
/**
 * Created by PhpStorm.
 * User: samuelm
 * Date: 2017/10/24
 * Time: 2:39 PM
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function homepageAction()
    {
        return $this->render('main/homepage.html.twig');
    }
}