<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ZhazgulKadyrbekovaController extends AbstractController
{
    /**
     * @Route("/zhazgul/kadyrbekova", name="zhazgul_kadyrbekova")
     */
    public function index(): Response
    {
        $info = array("Zhazgul", "Kadyrbekova", "1804.01026", "Engineering", "Computer Engineering", "3-grade");
        return $this->render('zhazgul_kadyrbekova/index.html.twig', [
            'title' => 'Student Info',
            'info' => $info,
        ]);
    }
}
