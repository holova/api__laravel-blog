<?php

namespace App\Models;

use App\Observers\PhotoObserver;
use App\Models\Photo\PhotoRelations;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use PhotoRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id',
        'local_path',
        'full_path',
    ];

    protected static function boot()
    {
        parent::boot();

        self::observe(PhotoObserver::class);
    }
}
