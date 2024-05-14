@extends('layouts.app')

@section('content')

<section class="section-hero overlay inner-page bg-image" style="background-image: url('{{asset('/assets/images/hero_1.jpg')}}'); margin-top:-24px;" id="home-section">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-white font-weight-bold">Edit Details</h1>
          <div class="custom-breadcrumbs">
            <a href="#">Home</a> <span class="mx-2 slash">/</span>
            <a href="#">Job</a> <span class="mx-2 slash">/</span>
            <span class="text-white"><strong>Edit Details</strong></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
    @if (\Session::has('update'))
      <div class="alert alert-success">
        <p>{!! \Session::get('update') !!}</p>
      </div>
    </div>
    @endif
    </div>



  <!-- Section 2 -->


  <section class="site-section">
    <div class="container">

      <div class="row align-items-center mb-5">
        <div class="col-lg-8 mb-4 mb-lg-0">
          <div class="d-flex align-items-center">
            <div>
              <h2>Edit Details</h2>
            </div>
          </div>
        </div>
       
      </div>
      <div class="row mb-5">
        <div class="col-lg-12">
          <form class="p-4 p-md-5 border rounded" action="{{route('update.details')}}" method="post">
            @csrf
  
            <div class="form-group">
              <label for="name">Name</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="{{$userDetails->name}}" >
            </div>

            <div class="form-group">
              <label for="job_title">Job Title</label>
              <input name="job_title" type="text" class="form-control" id="job_title" placeholder="Job Title" value="{{$userDetails->job_title}}">
            </div>


            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="bio">Bio</label> 
                <textarea name="bio" id="bio" cols="30" rows="7" class="form-control" placeholder="bio">{{$userDetails->bio}}</textarea>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="twitter">Twitter</label> 
                <input name="twitter" type="text" class="form-control" id="twitter" placeholder="Twitter" value="{{$userDetails->twitter}}">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="linkedIn">LinkedIn</label> 
                <input name="linkedin" type="text" class="form-control" id="linkedIn" placeholder="LinkedIn" value="{{$userDetails->linkedin}}">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label class="text-black" for="linkedIn">Facebook</label> 
                <input name="facebook" type="text" class="form-control" id="facebook" placeholder="Facebook" value="{{$userDetails->facebook}}">
              </div>
            </div>
            
            
            <div class="col-lg-4 ml-auto">
                <div class="row">  
                  <div class="col-6">
                    <input type="submit" name="submit" class="btn btn-block btn-primary btn-md" style="margin-left: 200px;" value="Update">
                  </div>
                </div>
            </div>


          </form>
        </div>

       
      </div>
     
    </div>
  </section>

  @endsection