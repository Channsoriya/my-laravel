<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Import the HasFactory trait
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory; // Make sure the HasFactory trait is used

    // Define fillable attributes or guarded attributes if necessary
    protected $fillable = ['name', 'description', 'price'];
}
