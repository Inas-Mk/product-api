<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface; 

class ProductController extends AbstractController
{
    private HttpClientInterface $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    #[Route('/products', name: 'products')]
    
    public function index(): Response
    {
        $response = $this->client->request('GET', 'http://127.0.0.1:8000/api/products');
        $products = $response->toArray();
        return $this->render('products/index.html.twig', [
        'products' => $products,
        
        ]);
    }
}
