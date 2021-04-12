<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->twig->render('Home/index.html.twig');
    }

    public function hello(): string
    {
        $name = 'Twig';
        return $this->twig->render('Home/hello.html.twig', ['name' => $name]);
    }
    public function showProducts(): string
    {
        $products = ['product1', 'product2', 'product3', 'product4', 'product5'];
        return $this->twig->render('Products/products.html.twig', ['products' => $products]);
    }
}