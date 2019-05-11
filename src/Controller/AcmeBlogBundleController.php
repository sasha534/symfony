<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AcmeBlogBundleController extends AbstractController
{
    /**
     * @Route("/acme/blog/bundle", name="acme_blog_bundle")
     */
    public function index()
    {
        return $this->render('acme_blog_bundle/index.html.twig', [
            'controller_name' => 'AcmeBlogBundleController',
        ]);
    }
}
