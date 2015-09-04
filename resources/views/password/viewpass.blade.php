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


              <div class="example-wrap">
                <h4 class="example-title"></h4>

                <div class="example table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Web/Title</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Created at</th>
                        <th>Update at</th>
                        <th class="text-nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($data as $d)

                      <tr>
                        <td>{{ $d->title }}</td>
                        <td>{{ $d->username }}</td>
                        <td>{{ $d->password }}</td>
                        <td>{{ date('F d, Y', strtotime($d->created_at)) }}</td>
                        <td>{{ date('F d, Y', strtotime($d->updated_at)) }}</td>
                        <td class="text-nowrap">
                          <a href="edit/{{$d->id}}" data-original-title="Edit" data-toggle="tooltip" class="btn btn-sm btn-icon btn-flat btn-default" type="button">
                            <i aria-hidden="true" class="icon wb-wrench"></i>
                          </button>
                          <a href="delete/{{$d->id}}" data-original-title="Delete" data-toggle="tooltip" class="btn btn-sm btn-icon btn-flat btn-default" type="button">
                            <i aria-hidden="true" class="icon wb-close"></i>
                          </a>
                        </td>
                      </tr>

                    @endforeach
                      
                    </tbody>
                  </table>
                </div>
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