<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BetterController
{
    public function test()
    {
        return new Response('toto');
    }
}
