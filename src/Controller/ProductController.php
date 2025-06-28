<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;


final class ProductController extends AbstractController
{
    #[Route('/product', name: 'product.index')]
    public function index(ProductRepository $repository): Response
    {

        $products = $repository->findAll();

        return $this->render('product/index.html.twig', [
            'products' => $products,
        ]);
    }

    #[Route('product/{id<\d+>}', name: 'product.show')]
    public function show(Product $product): Response {

        return $this->render('product/show.html.twig', [
            'product' => $product
        ]);
    }

    #[Route('product/new', name: 'product.new')]
    public function new(): Response {

        $form = $this->createForm(ProductForm::class);

        return $this->render('product/new.html.twig', [
            'form' => $form
        ]);
    }
}
