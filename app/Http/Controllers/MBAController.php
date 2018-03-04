<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class MBAController extends Controller
 {
     public function mba(){


      $mbastudent_info=DB::table('student_tbl')
      	   ->where(['student_department'=>4])
    	   ->get();

    	$manage_student=view('admin.mba')
    	->with('mba_student_info',$mbastudent_info);
       return view('layout')
       ->with('mba',$manage_student);

  
}
}


