<?php

namespace App\Services\interface;

interface JournalServiceInterface
{
    public function fetchByCategory(string $category = "internal");
    public function delete(string $id);
    public function findById(string $id);
    public function update(string $id, mixed $data = []);
}
