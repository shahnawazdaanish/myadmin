@extends('app')



@section('page-content')









<!-- Page -->
  <div class="page animsition">
    
    <div class="page-content">
      <!-- Panel Form Elements -->
      <div class="panel">
        <div class="panel-heading">
          <h3 class="panel-title">View all passwords</h3>
        </div>
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-sm-12 col-md-12 col-xs-12">


              








<div class="sweet-alert showSweetAlert visible">
  <div class="icon error" style="display: none;">
    <span class="x-mark"><span class="line left"></span><span class="line right"></span></span>
  </div>
  <div class="icon warning" style="display: none;"> 
    <span class="body"></span> <span class="dot"></span> 
  </div> 
  <div class="icon info" style="display: none;">
    
  </div> 
  <div class="icon success animate" style="display: block;">
    <span class="line tip animateSuccessTip"></span> 
    <span class="line long animateSuccessLong"></span> 
    <div class="placeholder"></div> 
    <div class="fix"></div> 
  </div> 
  <div class="icon custom" style="display: none;">
    
  </div> 
  <h2>{{ $status }}</h2>
  <p class="lead text-muted" style="display: block;">{{ $msg }}</p>
  <p>
    <button tabindex="2" class="cancel btn btn-lg btn-default" style="display: none;">Cancel</button> 
    <button tabindex="1" class="confirm btn btn-lg btn-{{ $class }}" style="display: inline-block;">OK</button>
  </p>
</div>























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