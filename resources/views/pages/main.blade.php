@extends('layouts.panel')

@section('content')
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{ $data['courses'] }}</h3>
                  <h4>Available Courses</h4>
               </div>
               <div class="icon">
                  <i class="fa-brands fa-discourse"></i>
               </div>
               <a href="{{ route('courses.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
               <div class="inner">
                  <h3>{{ $data['subjects'] }}</h3>
                  <h4>Total Subjects</h4>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-person-chalkboard"></i>
               </div>
               <a href="{{ route('subjects.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-success ">
               <div class="inner">
                  <h3>{{ $data['session'] }}</h3>
                  <h4>Active Sessions</h4>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-calendar-days"></i>
               </div>
               <a href="{{ route('session.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{ $data['register'] }}</h3>
                  <h4>Registered Students</h4>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-graduation-cap"></i>
               </div>
               <a href="{{ route('register.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
         <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
               <div class="inner">
                  <h3>{{ $data['students'] }}</h3>
                  <h4>Number of Students</h4>
               </div>
               <div class="icon">
                  <i class="fa-solid fa-address-card"></i>
               </div>
               <a href="{{ route('student.view') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection