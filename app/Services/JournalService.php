<?php

namespace App\Services;
use App\BaseService;
use App\Services\interface\JournalServiceInterface;
class JournalService extends BaseService implements JournalServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function setTableName(): string
    {
        return "journals";
    }
}
