<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use App\Models\Student;
use Illuminate\Http\Request;

class EloquentORMControllr extends Controller
{
    public function index()
    {
        # code...
    }
    
    // Relationships
    public function eagerLoading()
    {
        // Get Student with Lab name
        echo 'Eager loading Students with lab. <br/><br/>';
        $studentData = Student::with(['lab'])->get();
        foreach ($studentData as $row) {
            echo 'Student Name:'.$row->name.'--Lab:'.$row->lab->name.'<br/>';
        }
        echo "<br/><br/>";
        echo 'Eager loading Lab with student and teacher. <br/><br/>';
        $labData = Lab::with(['student', 'teacher'])->get();
        foreach ($labData as $row) {
            echo 'Lab Name:'.$row->name.' ';
            foreach($row->teacher as $thr){
                echo 'Teacher Name: '.$thr->name.' ';
            }
            foreach($row->student as $std){
                echo 'Student Name:'.$std->name.' ';
            }

        }
    }
}
