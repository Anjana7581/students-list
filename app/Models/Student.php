<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guardian; // Ensure this is imported

class Student extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'class',
        'age',
        'photo', // Include this if you handle file uploads
    ];

    /**
     * A student can have many guardians.
     */
    public function guardians()
    {
        return $this->hasMany(Guardian::class);
    }
}
