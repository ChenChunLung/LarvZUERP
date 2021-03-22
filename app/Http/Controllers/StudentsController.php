<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function getStudentData($student_no) {

        return 'Student No:' . $student_no; 
    }

    public function getStudentScore($student_no, $subject = null) {


        return 'Student No:' . $student_no . 'is' . ( (is_null($subject)) ? 'all class' : $subject ) . 'point' ;

        
    }

}
