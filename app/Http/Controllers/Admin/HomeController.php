<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Interface\StatisticServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(StatisticServiceInterface $statistic)
    {
        return view("admin.dashboard", [
            'statistic' => $statistic->getStatistic(),
        ]);
    }
}
