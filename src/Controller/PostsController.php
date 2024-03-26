<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Book;

class PostsController extends AbstractController
{
    #[Route('/posts', name: 'app_posts', methods:['get'])]
    public function index(ManagerRegistry $doctrine): Response
    {
        $products = $doctrine
            ->getRepository(Book::class)
            ->findAll();

        if (!$products) return $this->json("");

        $data = [];

        foreach ($products as $product) {
            $data[] = [
                'id' => $product->getId(),
                'bookId' => $product->getBookId(),
                'name' => $product->getName(),
                'title' => $product->getTitle(),
                'body' => $product->getBody(),
            ];
        }

        return $this->json($data);
    }
}
