@extends('student_layout')
@section('content')
  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Student</h2>

                          <p style="font-size:20px;color:green;">
                    <?php
                      $exception=Session::get('exception');
                      if($exception){
                      echo $exception;
                      Session::put('exception',null);
                      }

                    ?>

                      </p>
          
                          <form class="forms-sample" method="post" action="" >
                           {{csrf_field()}}
                              
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Phone</label>
                                  <input type="text" class="form-control p-input" name="student_phone"> 
                              </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Address</label>
                                  <input type="text" class="form-control p-input" name="student_address"> 
                                  </div>                           
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Student Password</label>
                                  <input type="password" class="form-control p-input" name="student_password">
                                  </div>
                
                  
                             
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                      </div>
                  </div>
              </div>


@endsection
