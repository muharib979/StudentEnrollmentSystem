<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;

class AllstudentsController extends Controller
{
     public function allstudent(){

      $allstudent_info=DB::table('student_tbl')
    	   ->get();

    	$manage_student=view('admin.allstudent')
    	->with('all_student_info',$allstudent_info);
       return view('layout')
       ->with('allstudent',$manage_student);
}
//student delete part are here..
public function studentdelete($student_id){


      DB::table('student_tbl')
            ->where('student_id',$student_id)
            ->delete();
       Session::put('exception','Student Delete Successfully');
       return Redirect::to('/allstudent');
}
//student view part are here...

 public function studentview($student_id){
 	$student_description_view=DB::table('student_tbl')
 	                          ->select('*')
 	                          ->where('student_id',$student_id)
 	                          ->first();

 	    $manage_description_student=view('admin.studentview')
    	->with('student_description_profile',$student_description_view);
       return view('layout')
       ->with('studentview',$manage_description_student);
 }
 //student edit part are here..
  public function studentedit($student_id){
 	$student_description_view=DB::table('student_tbl')
 	                          ->select('*')
 	                          ->where('student_id',$student_id)
 	                          ->first();

 	    $manage_description_student=view('admin.student_edit')
    	->with('student_description_profile',$student_description_view);
       return view('layout')
       ->with('student_edit',$manage_description_student);
 }
 //update student part are here

 public function studentupdate(Request $request,$student_id){
		
		$data=array();
		$data['student_name']=$request->student_name;
		$data['student_roll']=$request->student_roll;
		$data['student_fathersname']=$request->student_fathersname;
		$data['student_mothersname']=$request->student_mothersname;
		$data['student_email']=$request->student_email;
		$data['student_phone']=$request->student_phone;
		$data['student_address']=$request->student_address;
		$data['student_password']=$request->student_password;
		$data['student_admissionyear']=$request->student_admissionyear;
		$data['student_department']=$request->student_department;


		              DB::table('student_tbl')
 	                          ->where('student_id',$student_id)
 	                          ->update($data);

 	                   Session::put('exception','Student Updated Successfully');
                        return Redirect::to('/allstudent');
 }
}
