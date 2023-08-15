<?php

declare(strict_types =1);

namespace Amedvedev\FirstPackage;

class MyWords
{
    private array $myWords = [
        'Hello everybody'
    ];

    /**
     * @return array|string[]
     */
    public function getMyWords(): array
    {
        return $this->myWords;
    }

}