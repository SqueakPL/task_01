<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpClient\HttpClient;

use Symfony\Component\HttpClient\AmpHttpClient;
use Symfony\Component\HttpClient\CurlHttpClient;
use Symfony\Component\HttpClient\NativeHttpClient;

use App\Controller\BookController;

class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(): JsonResponse
    {
        $client = HttpClient::create();
        $books = $client->request(
            'GET',
            'https://jsonplaceholder.typicode.com/posts'
        );
        $artists = $client->request(
            'GET',
            'https://jsonplaceholder.typicode.com/users'
        );

        $books = $books->toArray();
        $books_count = count($books);

        $artists = $artists->toArray();
        $artists_count = count($artists);

        for ($n = 0; $n < $books_count; $n++ ) {

            $userId = $books[$n]['userId'];
            $bookID = $books[$n]['id'];
            $title = $books[$n]['title'];
            $body = $books[$n]['body'];
            $name = '';

            for ($m = 0; $m < $artists_count; $m++ ) {

                if ($artists[$m]['id']==$userId) {

                    $name = $artists[$m]['name'];
                    break;
                }

            }

            $client = new CurlHttpClient(["verify_peer"=>false,"verify_host"=>false, "max_duration" => 1000]);///HttpClient::create();

            $payload = array(
                "book_id" => $bookID,
                "name" => $name,
                "title" => $title,
                "body" => $body,
            );

            //$response = $this->forward('App\Controller\BookController::POST', $payload );

            $request = $client->request(
                'POST',
                'https://localhost:8000/api/books',
                [
                    'headers' => [
                        'Content-Type' => 'application/json; charset=utf-8',
                        'Accept' => 'application/json'
                    ],
                    //'auth_basic' => ['API_258086_74490074', 'THE PASSWORD'],
                    'body' => json_encode($payload)
                ]
            );

            //return $this->json($response);

        }

        $arr = array('a' => $books[0]['title'], 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

        return $this->json($arr);
    }
}
