<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class routerOne 
{
    /**
     * @Route("/routerOne")
     */
    public function routerOne()

    {

        echo 'Teste Primeira Rota!';
        exit();

    }
}