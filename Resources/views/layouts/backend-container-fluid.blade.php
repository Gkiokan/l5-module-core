@extends('core::partials.template.html')

@section('head.style')
    @include('core::partials.quickfixes.MenuLeftItemsPanel')
@stop

@section('content.main')
      <div class='container-fluid'>
      <div class='row'>
          <div class='col-xs-12 col-md-2'>
              @yield('leftmenu')
          </div>
          <div class='col-xs-12 col-md-10'>
              @yield('content')
          </div>
      </div>
      </div>
@stop
