<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellar_content extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'vintage',
        'purchase_date',
        'notes',
        'cellars_id',
        'personal_wines_id',
        'saq_wines_id',
        'wine_sources_id',
    ];
}
