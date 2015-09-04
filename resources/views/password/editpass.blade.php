@extends('app')



@section('page-content')





<!-- Page -->
  <div class="page animsition">
    
    <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">Form Elements</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-12 col-md-12 col-xs-12">

            {!! Form::open(array('url'=> 'passwordstore/store', 'method' => 'post')) !!}

              <!-- Example Rounded Input -->
              <div class="form-group">
                <h4 class="example-title">Website/Title</h4>
                <input type="text" placeholder="Website name or title" id="title" name="title" class="form-control" value="{{ $data->title }}">
              </div>
              <!-- End Example Rounded Input -->

              <!-- Example Rounded Input -->
              <div class="form-group">
                <h4 class="example-title">Username</h4>
                <input type="text" placeholder="username" id="username" name="username" class="form-control" value="{{ $data->username }}">
              </div>
              <!-- End Example Rounded Input -->

              <!-- Example Rounded Input -->
              <div class="form-group">
                <h4 class="example-title">Password</h4>
                <input type="password" placeholder="password" id="password" name="password" class="form-control" value="{{ $data->password }}">
              </div>
              <!-- End Example Rounded Input -->

              <div class="form-group">
                <h4 class="example-title">Make more secure</h4>
                <input type="password" placeholder="More secure string" id="moresecure" name="moresecure"  class="form-control" value="{{ $data->pass_part_2 }}">
                <span class="help-block">put here some part of your password to encrypt and store as password so that no one can breach it</span>
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" value="Store">
              </div>


            {!! Form::close() !!}

            </div>            
          </div>
        </div>
      </div>
      <!-- End Panel Form Elements -->

    </div>
  </div>
  <!-- End Page -->






























@endsection




@section('page-css-top')
<link href="{{ asset('/assets/vendor/formvalidation/formValidation.min.css') }}" rel="stylesheet">
@endsection




@section('page-scripts-bottom')
 <!-- Plugins -->
  <script src="{{ asset('/assets/vendor/switchery/switchery.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/intro-js/intro.min.js') }}"></script>
  <script src="{{ asset('/assets/vendor/screenfull/screenfull.js') }}"></script>
  <script src="{{ asset('/assets/vendor/slidepanel/jquery-slidePanel.min.js') }}"></script>

  <!-- Plugins For This Page -->
  <script src="{{ asset('/assets/vendor/jquery-placeholder/jquery.placeholder.min.js') }}"></script>
  <script src="{{ asset('/assets/js/components/jquery-placeholder.min.js') }}"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
@endsection