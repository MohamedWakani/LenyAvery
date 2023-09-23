<?php

namespace App\Repositories;

use App\Models\HowTo;
use App\Repositories\BaseRepository;

class HowToRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'body'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return HowTo::class;
    }
}
