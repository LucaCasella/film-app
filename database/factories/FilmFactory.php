<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FilmFactory extends Factory
{
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            Film::TITLE => '',
            Film::DESCRIPTION => '',
            Film::RELEASE_YEAR => '',
            Film::LANGUAGE_ID => 1,
            Film::ORIGINAL_LANGUAGE_ID => null,
            Film::RENTAL_DURATION => '',
            Film::RENTAL_RATE  => '',
            Film::LENGTH => '',
            Film::REPLACEMENT_COST => '',
            Film::RATING => '',
            Film::SPECIAL_FEATURES => ''
        ];
    }
}
