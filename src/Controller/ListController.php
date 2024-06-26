<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Book;
use Doctrine\Persistence\ManagerRegistry;

class ListController extends AbstractController
{
    #[Route('/lista', name: 'app_list')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        //$user = $this->getUser();
        //$post = new Book();

        $books = $entityManager->getRepository(Book::class)->findAll();//find($id);

        $html = '<html><body>';

        $html .= 'Aktualnie jest ' . count($books) . ' ksiazek w bazie<br><br>';

        $html .= '<form action="/logout"><input type="submit" value="Wyloguj"></form><br>';

        $html .= '<table style="border: 1px solid;">';

        $html .= '<tr><td>Usun</td><td>Autor</td><td>Tytul</td><td>Tresc</td></tr>';

        foreach ($books as $book) {

            $html .= '<tr>';

            $html .= '<td><form action="/lista/' . $book->getId() . '"><input type="submit" value="Usun"></form></td>';

            $html .= '<td style="border: 1px solid;">' . $book->getName() . '</td><td style="border: 1px solid;">' . $book->getTitle() . '</td><td style="border: 1px solid;">' . $book->getBody() . '</td>';

            $html .= '</tr>';

        }

        $html .= '</table>';

        $html .= '</body></html>';

        return new Response($html);
    }

    #[Route('/lista/{id}', name: 'book_delete_from_list'/*, methods:['delete']*/ )]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $entityManager = $doctrine->getManager();
        $book = $entityManager->getRepository(Book::class)->find($id);

        if (!$book) {
            return new Response('nie znaleziono');
        }

        $html = '<html><body>';

        $html .= 'Usunieto ksiażke "' . $book->getTitle() . '" od autora "' . $book->getName() . '"<br>';

        $html .= '<a href="/lista">Powrot do listy</a>';

        $html .= '</body></html>';

        $entityManager->remove($book);
        $entityManager->flush();

        return new Response($html);
    }
}
