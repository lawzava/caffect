<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function averageRating()
    {
        $count = ($this->notes > 0 ? 1 : 0) + ($this->body > 0 ? 1 : 0) + ($this->aroma > 0 ? 1 : 0) + ($this->acidity > 0 ? 1 : 0) + ($this->bitterness > 0 ? 1 : 0) + ($this->sweetness > 0 ? 1 : 0);

        if ($count === 0) {
            return 0;
        }

        $sum = $this->notes + $this->body + $this->aroma + $this->acidity + $this->bitterness + $this->sweetness;

        return round($sum/$count, 2);
    }
}
