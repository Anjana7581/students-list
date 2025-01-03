<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Guardian extends Model
{
    use HasFactory;

    // Define the fillable fields for mass assignment
    protected $fillable = [
        'name',
        'contact_info',
        'student_id',
    ];

    /**
     * A guardian belongs to a student.
     */
public function student()
{
    return $this->belongsTo(Student::class);
}

}
