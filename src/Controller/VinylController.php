<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class VinylController
{

  #[Route('/')]
  public function homepage(): Response
  {
    return new Response('Title: PB and Jams');
  }

  #[Route('/browse/{slug}')]
  public function browse(string $slug = null): Response
  {
    if ($slug) {
      $title = 'Genre: ' .ucfirst(str_replace('-', ' ', $slug));
    } else {
      $title = 'All Genres';
    }

    return new Response($title);
  }

}
