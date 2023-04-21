<?php

namespace Database\Factories;

use app\Models\Notes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NotesFactory extends Factory
{

     protected $model = Notes::class;

    public function definition(): array
    {
        return [
            'title' => Str::random(10),
            'desc' =>  Str::random(10)
        ];
    }
}
