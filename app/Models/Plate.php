<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Alimentation;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Plate extends Model
{
    use HasFactory;
    protected $fillable = ['id','title_name', 'elaboration', 'time_elaboration'];

    // public function alimentation(): BelongsTo
    // {
    //     return $this->belongsTo(Alimentation::class);
    // }

    public function ingredients(): BelongsToMany{
        return $this->belongsToMany('App\Models\Ingredient');
    }
}
