<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Book;

#[Route('/api', name: 'api_')]
class BookController extends AbstractController
{
    #[Route('/books', name: 'book_index', methods:['get'] )]
    public function index(ManagerRegistry $doctrine): JsonResponse
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

    #[Route('/books', name: 'book_create', methods:['post'] )]
    public function create(ManagerRegistry $doctrine, Request $request): JsonResponse
    {
        $entityManager = $doctrine->getManager();

        $book_id = $request->get('bookId');
        $book_exist = $doctrine->getRepository(Book::class)->findOneBy(['bookId' => $book_id]);

        if ($book_exist) {

            $book_exist->setName($request->get('name'));
            $book_exist->setTitle($request->get('title'));
            $book_exist->setBody($request->get('body'));
            $entityManager->flush();

            $data =  [
                'id' => $book_exist->getId(),
                'bookId' => $book_exist->getBookId(),
                'name' => $book_exist->getName(),
                'title' => $book_exist->getTitle(),
                'body' => $book_exist->getBody(),
            ];

            return $this->json($data);
        }

        $book = new Book();
        $book->setBookId($request->get('bookId'));
        $book->setName($request->get('name'));
        $book->setTitle($request->get('title'));
        $book->setBody($request->get('body'));

        $entityManager->persist($book);
        $entityManager->flush();

        $data =  [
            'id' => $book->getId(),
            'bookId' => $book->getBookId(),
            'name' => $book->getName(),
            'title' => $book->getTitle(),
            'body' => $book->getBody(),
        ];

        return $this->json($data);
    }

    #[Route('/books/{id}', name: 'book_show', methods:['get'] )]
    public function show(ManagerRegistry $doctrine, int $id): JsonResponse
    {
        $book_id = $id;//$request->get('bookId');
        //$book = $doctrine->getRepository(Books::class)->find($id);
        $book = $doctrine->getRepository(Book::class)->findOneBy(['bookId' => $book_id]);

        if (!$book) {

            return $this->json('Nie znaleziono ksiazki o bookId ' . $id, 404);
        }

        $data =  [
            'id' => $book->getId(),
            'bookId' => $book->getBookId(),
            'name' => $book->getName(),
            'title' => $book->getTitle(),
            'body' => $book->getBody(),
        ];

        return $this->json($data);
    }


    #[Route('/books/{id}', name: 'book_delete', methods:['delete'] )]
    public function delete(ManagerRegistry $doctrine, int $id): JsonResponse
    {
        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            return $this->json('Ne znaleziono ksiazki z id ' . $id, 404);
        }

        $entityManager->remove($book);
        $entityManager->flush();

        return $this->json('Usunieto ksiazke z id ' . $id);
    }
}
