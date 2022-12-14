<?php

namespace App\Models;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ingredient extends Model
{
    use HasFactory;

    public function Recipes(): BelongsToMany{
        
        return $this->belongsToMany(Recipe::class)
        ->withPivot(['amount','unit']);
    }
}
