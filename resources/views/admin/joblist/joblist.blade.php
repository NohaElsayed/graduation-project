@extends('index.index')
@section('title')
    Joblist
@endsection

@section('connect')

<section class="home-section section-hero overlay bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">

  <div class="container">
      <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
              <div class="mb-5 text-center">
                  <h1 class="text-white font-weight-bold">The Easiest Way To Get Your Dream Job</h1>
                 
              </div>
              <form method="post" class="search-jobs-form" action="{{route('joblist.store')}}">
                @csrf
                  <div class="row mb-5" style="justify-content: center">
                      <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 ml-5 l-5">
                          <input type="text" name="search" class="form-control form-control-lg" placeholder="Job title, Company...">
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0 ">
                          <select class="selectpicker" data-style="btn-white btn-lg" data-width="100%" data-live-search="flase" title="Select Job Type">
                              <option>Part Time</option>
                              <option>Full Time</option>
                          </select>
                      </div>
                      <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
                          <button type="submit" class="btn btn-primary btn-lg btn-block text-white btn-search"><span class="icon-search icon mr-2"></span>Search Job</button>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 popular-keywords">
                          <h3>Trending Keywords:</h3>
                          <ul class="keywords list-unstyled m-0 p-0">
                              <li><a href="#" class="">UI Designer</a></li>
                              <li><a href="#" class="">Python</a></li>
                              <li><a href="#" class="">Developer</a></li>
                          </ul>
                      </div>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>
<section class="py-5 bg-image overlay-primary fixed overlay" id="next" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="section-title mb-2 text-white">JobBoard Site Stats</h2>
          <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita unde officiis recusandae sequi excepturi corrupti.</p>
        </div>
      </div>
      <div class="row pb-0 block__19738 section-counter">

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="1930">0</strong>
          </div>
          <span class="caption">Candidates</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="54">0</strong>
          </div>
          <span class="caption">Jobs Posted</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="120">0</strong>
          </div>
          <span class="caption">Jobs Filled</span>
        </div>

        <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
          <div class="d-flex align-items-center justify-content-center mb-2">
            <strong class="number" data-number="550">0</strong>
          </div>
          <span class="caption">Companies</span>
        </div> 
      </div>
    </div>
  </section>

{{-- <h1>Ahmed hamada</h1> --}}
{{-- Add Date  --}}

 @endsection       
