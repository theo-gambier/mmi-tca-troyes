<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

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

    #[Route('/buggy', name: 'app_buggy', methods: ['GET'])]
    public function buggy(): JsonResponse
    {
        $array = $this->getData();

        return new JsonResponse($array);
    }
}
