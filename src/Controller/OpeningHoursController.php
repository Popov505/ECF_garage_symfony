<?php

namespace App\Controller;

use App\Entity\OpeningHours;
use App\Repository\OpeningHoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OpeningHoursController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function showOpeningHours(OpeningHoursRepository $openingHoursRepository): Response
    {
        $openingHourList = $openingHoursRepository->findBy([],['id' => 'ASC']);

        dd($openingHourList);

        return $this->render('home/index.html.twig', [
            '$openingHourList' => $openingHourList,
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test(OpeningHoursRepository $openingHoursRepository): Response
    {
        $openingHourList = $openingHoursRepository->findBy([],['id' => 'ASC']);

        dd($openingHourList);

        return $this->render('opening_hours/test.html.twig', [
            '$openingHourList' => $openingHourList,
        ]);
    }
}
