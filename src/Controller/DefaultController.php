<?php
/**
 * Created by PhpStorm.
 * User: o.sorokin
 * Date: 10.05.2019
 * Time: 15:38
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $number = random_int(0, 100);

        return $this->render('index.html.twig',
            ['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
              'number' => $number
            ]);
    }
}