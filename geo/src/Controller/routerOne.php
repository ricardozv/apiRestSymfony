<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class routerOne 
{
    /**
     * @Route("/routerOne")
     */
    public function routerOne(Request $request) : Response

    {
        $pathInfo = $request -> getPathInfo();
        return new JsonResponse([ 'mensagem' => 'Tranformando em formato Json',
        'pathInfo' => $pathInfo]);

    }
}