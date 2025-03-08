<?php

namespace App\Customer;

interface CustomerServiceInterface
{
    public function getFullDetail();
    public function withSearch(string $search):self;
}
