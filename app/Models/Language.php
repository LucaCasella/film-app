<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;


    protected $table = 'language';

    protected $primaryKey = 'language_id';

    public $timestamps = false;

    protected $hidden = [
        'language_id',
        'last_update'
    ];

    protected $fillable = [
        'language_id',
        'name',
        'last_update'
    ];
}
