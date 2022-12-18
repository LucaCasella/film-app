<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    const FILM_ID = 'film_id';
    const TITLE = 'title';
    const DESCRIPTION = 'description';
    const RELEASE_YEAR = 'release_year';
    const LANGUAGE_ID = 'language_id';
    const ORIGINAL_LANGUAGE_ID = 'original_language_id';
    const RENTAL_DURATION = 'rental_duration';
    const RENTAL_RATE = 'rental_rate';
    const LENGTH = 'length';
    const REPLACEMENT_COST = 'replacement_cost';
    const RATING = 'rating';
    const SPECIAL_FEATURES = 'special_features';
    const LAST_UPDATE = 'last_update';

    protected $table = 'film';

    protected $primaryKey = 'film_id';

    public $timestamps = false;

    protected $hidden = [
        Film::FILM_ID,
        Film::LANGUAGE_ID,
        Film::ORIGINAL_LANGUAGE_ID,
        Film::RENTAL_DURATION,
        Film::RENTAL_RATE,
        Film::REPLACEMENT_COST,
        Film::SPECIAL_FEATURES,
        Film::LAST_UPDATE
    ];

    protected $fillable = [
        Film::FILM_ID,
        Film::TITLE,
        Film::DESCRIPTION,
        Film::RELEASE_YEAR,
        Film::LANGUAGE_ID,
        Film::ORIGINAL_LANGUAGE_ID,
        Film::RENTAL_DURATION,
        Film::RENTAL_RATE,
        Film::LENGTH,
        Film::REPLACEMENT_COST,
        Film::RATING,
        Film::SPECIAL_FEATURES,
        Film::LAST_UPDATE
    ];

    public function language(){
        return $this->hasOne(Language::class, self::LANGUAGE_ID, self::LANGUAGE_ID);
    }
}
