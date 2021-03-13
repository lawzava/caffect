<?php

namespace App\Models;

use App\Enums\Countries;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
        'name',
        'producer',
        'origin',
        'taste',
        'aroma',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function origin()
    {
        return Countries::getValue($this->origin);
    }
}
