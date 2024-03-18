<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


use Symfony\Component\Routing\Attribute\Route;

class AddController extends AbstractController
{
    #[Route('/add')]
    public function index(): JsonResponse
    {
        $request = Request::createFromGlobals();
        $title = $request->query->get('title');
        $content = $request->query->get('content');
        var_dump($title, $content);
        return new JsonResponse(array('name' => '11'));
    }
}
