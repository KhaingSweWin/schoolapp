<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name','email','address','major'];
    public function passport(){
        return $this->hasOne(Passport::class,'sid','st_id'); // sid=foreign key of passport, st_id=student primary key
    }
}
