<?php

namespace MatanYadaev\EloquentSpatial\Tests\TestModels;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MatanYadaev\EloquentSpatial\Point;
use MatanYadaev\EloquentSpatial\Tests\TestFactories\TestPlaceFactory;

class TestPlace extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'location',
    ];

    protected $casts = [
        'location' => Point::class,
    ];

    protected static function newFactory(): TestPlaceFactory
    {
        return new TestPlaceFactory;
    }
}
