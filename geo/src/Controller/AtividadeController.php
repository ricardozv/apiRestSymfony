<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AtividadeController
{
    /**
     * @Route("/atividade")
     */




    public function novo (Request $request): Response

    {
        $corpoRequisicao = $request ->getContent();

        return new Response($corpoRequisicao);

    }
}