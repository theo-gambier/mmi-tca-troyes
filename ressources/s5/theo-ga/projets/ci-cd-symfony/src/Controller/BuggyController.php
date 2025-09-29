<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BuggyController extends AbstractController
{
    /**
     * @return array<string, float|int>
     */
    private function getData(): array
    {
        return [
            'key1' => 5,
            'key2' => 5.4,
        ];
    }
}
