<?php

namespace App\Repositories;

use App\Models\How;
use App\Repositories\BaseRepository;

class HowRepository extends BaseRepository
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
        return How::class;
    }
}
