<?php

namespace App\Repositories;

use App\Models\About;
use App\Repositories\BaseRepository;

class AboutRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'about',
        'youtube',
        'insta',
        'facebook',
        'twiter'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return About::class;
    }
}
