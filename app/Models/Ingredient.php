<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class, 'id_category_ingredient');
    // }

    public function platess(): BelongsToMany //Tiene doble s porque la tabla se llama plates.
    {
        return $this->belongsToMany(Ingredient::class, 'name');
    }
}
