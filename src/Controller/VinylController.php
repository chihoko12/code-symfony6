<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use function Symfony\Component\String\u;

class VinylController extends AbstractController
{

  #[Route('/', name: 'app_homepage')]
  public function homepage(): Response
  {

    $tracks = [
      ['song' => 'Gangsta\'s Paradise', 'artist' => 'Coolio'],
      ['song' => 'Waterfalls', 'artist' => 'TLC'],
      ['song' => 'Creep', 'artist' => 'Radiohead'],
      ['song' => 'Kiss From A Rose', 'artist' => 'Seal'],
      ['song' => 'On Bended Knee', 'artist' => 'Boyz II Men'],
      ['song' => 'Fantasy', 'artist' => 'Mariah Carey'],
      ['song' => 'Take A Bow', 'artist' => 'Madonna'],
      ['song' => 'You Are Not Alone', 'artist' => 'Michael Jackson'],
      ['song' => 'You Oughta Know', 'artist' => 'Alanis Morissette'],
      ['song' => 'One Sweet Day', 'artist' => 'Mariah Carey & Boyz II'],
    ];

    return $this->render('vinyl/homepage.html.twig', [
      'title' => 'PB & Jams',
      'tracks' => $tracks,
    ]);
  }

  #[Route('/browse/{slug}', name: 'app_browse')]
  public function browse(string $slug = null): Response
  {
    $genre = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;

    return $this->render('vinyl/browse.html.twig', [
      'genre' => $genre,
    ]);
  }

}
