<?php


namespace App\Models;
use Illuminate\Support\Arr;


class job {
    public static function all(): array
    {
        return  [
            [   'id' => '1',
                'title' => 'it architect',
                'salaris'=> '80.000'
            ],[ 'id' => '2',
                'title' => 'software engineer',
                'salaris'=> '60.000'
            ],[ 'id' => '3',
                'title' => 'software developer',
                'salaris'=> '40.000'
            ],
        ];

    }

    public static function find(int $id): ?array
    { 
      $job = Arr::first(static::all(), function ($job) use ($id) {
            return $job['id'] == $id;
            
        
    });
    return $job;
    }
}