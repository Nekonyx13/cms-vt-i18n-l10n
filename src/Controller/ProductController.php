<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class ProductController extends AbstractController
{
    #[Route('/{_locale}/product', name: 'app_product', requirements: ['_locale' => 'en|fr'])]
    public function index(TranslatorInterface $translator): Response
    {
        $translated = $translator->trans('Symfony is great');
        echo $translated;
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }
}
