<?php

namespace App\Models;

use App\Enums\Countries;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $casts = [
        'origins' => 'array',
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
