<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Field;
use App\Models\Doctor;
class TestController extends Controller
{
    //
    public function display(){
        $field=Field::find(1);
        $doctors=$field->doctor;
        foreach($doctors as $doctor)
        {
            echo $doctor->name;
            echo $doctor->field_id;
            echo $doctor->field->name;
           
        }
        $doctor=Doctor::find(1);
        $field=$doctor->field;
        echo $field->name;
        
    }
}
