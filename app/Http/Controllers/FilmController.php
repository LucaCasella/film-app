<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Language;
use Database\Factories\FilmFactory;
use Illuminate\Http\Request;
use Psy\Util\Str;

class FilmController extends Controller
{
    public function index()
    {
        return Film::all();
    }

    public function create(Request $request)
    {
        $filmData = $request->all([
            'title',
            'description',
            'release_year',
            'rental_duration',
            'length',
            'rating',
            'language_id'
        ]);

        $title = $filmData['title'];
        $description = $filmData['description'];
        $release_year = $filmData['release_year'];
        $length = $filmData['length'];
        $rating = $filmData['rating'];

        $user_definition_language = $request->get('language_id');
        $filmData['language_id'] = $this->resolveLanguage($user_definition_language);

        return Film::factory()->create([
            'title' => $title,
            'description'=> $description,
            'release_year' => $release_year,
            'length'=> $length,
            'rating' => $rating,
            'slug' => \Illuminate\Support\Str::slug($title, '-'),
            'language_id' => $filmData['language_id']
        ]);
    }

    public function show(int $id)
    {
        return Film::with('language')->find($id);
    }

    public function resolveLanguage(mixed $user_defined_language){
        return Language::where('name', $user_defined_language)->first(['language_id']);
    }
}
