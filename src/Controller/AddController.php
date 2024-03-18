<?php

namespace App\Controller;

use App\Entity\Myads;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;


use Symfony\Component\Routing\Attribute\Route;

class AddController extends AbstractController
{
    #[Route('/add')]
    public function index(EntityManagerInterface $entityManager): RedirectResponse
    {
        $request = Request::createFromGlobals();
        $title = $request->query->get('title');
        $content = $request->query->get('content');
        var_dump($title, $content);
        $ads = new Myads();
        $ads->setTitle($title);
        $ads->setContent($content);
        $entityManager->persist($ads);
        $entityManager->flush();

        return $this->redirectToRoute('list');
    }
}
