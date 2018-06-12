<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageAboController extends Controller
{
    public function aboAction()
    {
        return $this->render('views/pageabo.twig');
    }
}