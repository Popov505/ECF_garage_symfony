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
    public function show(PrestationsRepository $prestationsRepository): Response
    {
        $prestations = $prestationsRepository->findBy([],['id' => 'ASC']);
        
        return $this->render('home/index.html.twig', [
            'prestations' => $prestations,
        ]);
    }


    #[Route('/prestations/{id}', name: 'app_show_prestations')]
    public function index(Prestations $prestations, CarsRepository $carsRepository): Response
    {
        $cars = $carsRepository->findBy([],['id' => 'ASC']);

        return $this->render('prestations/show_prestations.html.twig', [
            'cars' => $cars,
            'prestations' => $prestations,
        ]);
    }


}
