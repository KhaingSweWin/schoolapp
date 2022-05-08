<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;

class Passport extends Model
{
    use HasFactory;
    protected $fillable=['passport_no','issue_date','expire_date','location'];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
