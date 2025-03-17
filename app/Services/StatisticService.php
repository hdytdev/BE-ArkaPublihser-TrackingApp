<?php

namespace App\Services;

use App\BaseService;
use App\Interface\StatisticServiceInterface;

class StatisticService implements StatisticServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getStatistic() :array{
        return [
            'customer' => 90,
            'newOrder' => 30,
            'journal' => 10,
            'marketing' => 30
        ];
    }
}
