<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }

    #[Route('/movies_view', name: 'app_movies_view')]
    public function moviesView(): Response
    {
        $movies = [
            'Inception',
            'The Dark Knight',
            'Forrest Gump',
            'Fight Club',
            'The Lord of the Rings: The Return of the King',
            'Schindler\'s List',
            'The Silence of the Lambs',
            'The Godfather',
            'Pulp Fiction',
            'The Shawshank Redemption',
            'The Matrix',
            'Interstellar',
        ];
        return $this->render('movies_view.html.twig', [
            'title' => 'Movies View',
            'description' => 'This is the movies view page.',
            'movies' => $movies,
        ]);
    }
}
