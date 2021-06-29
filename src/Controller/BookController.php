<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
    #[Route('/book', name: 'book')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
        ]);
    }

    #[Route('/book/{id}', name: 'book')]
    public function bookData(int $id, BookRepository $bookRepository): Response
    {
        return $this->render('book/index.html.twig', [
            'book' => $bookRepository->findOneBy(['id' => $id]),
        ]);
    }
}
