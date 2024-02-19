<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Entity\Prestations;
use App\Repository\CarsRepository;
use App\Repository\PrestationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PrestationsController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function showHome(PrestationsRepository $prestationsRepository): Response
    {
        $prestationList = $prestationsRepository->findBy([],['id' => 'ASC']);

        return $this->render('home/index.html.twig', [
            'prestationList' => $prestationList,
        ]);
    }


    #[Route('/prestations/{id}', name: 'app_show_prestations')]
    public function showPrestations(PrestationsRepository $prestationsRepository, Prestations $prestation, CarsRepository $carsRepository): Response
    {
        $cars = $carsRepository->findBy([],['id' => 'ASC']);
        $prestationList = $prestationsRepository->findBy([],['id' => 'ASC']);

        dump($prestationList, $prestation);

        return $this->render('prestations/show_prestations.html.twig', [
            'cars' => $cars,
            'prestation' => $prestation,
            'prestationList' => $prestationList,
        ]);
    }

    #[Route('/test', name: 'app_test')]
    public function test(PrestationsRepository $prestationsRepository): Response
    {
        $prestationList = $prestationsRepository->findBy([],['id' => 'ASC']);

        return $this->render('opening_hours/test.html.twig', [
            'prestationList' => $prestationList,
        ]);
    }
}
