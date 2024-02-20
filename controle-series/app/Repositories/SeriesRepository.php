<?php 

namespace App\Repositories;

use App\Http\Requests\SeriresFormRequest;
use App\Models\Series;

interface SeriesRepository
{
    public function add(SeriresFormRequest $request): Series;
}