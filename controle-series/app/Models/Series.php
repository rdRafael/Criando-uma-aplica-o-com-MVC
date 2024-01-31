<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];
    protected $with = ['season'];

    public function season() 
    {
        return $this->hasMany( related:Season::class, foreignKey:'series_id');
    }

    protected static function booted()
    {
        self::addGlobalScope( 'ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy(column: 'nome', direction: 'desc');
        });
    }
}