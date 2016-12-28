@extends('core::partials.template.html')

@section('head.style')
    @include('core::partials.quickfixes.MenuLeftItemsPanel')
@stop

@section('content.main')
      <div class='container'>
      <div class='row'>
          <div class='col-xs-12 col-md-3'>
              @include('core::partials.navigation.leftmenu')
              {{-- @yield('leftmenu') --}}
              @stack('leftmenu')
          </div>
          <div class='col-xs-12 col-md-9'>
              @yield('content')
          </div>
      </div>
      </div>
@stop
