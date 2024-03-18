<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Myads;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListController extends AbstractController
{
    #[Route('/list')]
    public function show(EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Myads::class)->findAll();

        if (!$products) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }
        return $this->render('list.html.twig', ['products' => $products]);
    }
}
