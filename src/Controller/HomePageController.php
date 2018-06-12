<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{
    public function homepageAction()
    {
        return $this->render('views/homepage.twig');
    }
}