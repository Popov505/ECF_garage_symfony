<?php

namespace App\Controller;

use App\Entity\Prestations;
use App\Repository\CarsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CarsController extends AbstractController
{
    #[Route('/show_cars', name: 'app_show_cars')]
    public function showCars(CarsRepository $carsRepository): Response
    {
        $cars = $carsRepository->findBy([],['id' => 'ASC']);
    
        return $this->render('cars/show_cars.html.twig', [
            'cars' => $cars,
        ]);
    }
}
