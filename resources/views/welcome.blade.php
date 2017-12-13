@extends('layouts.main')

@section('content')

          <h1 class="mt-5">Brandon's IS-421 Project Page</h1>

          @if(Auth::guest())
              <a href="{{route('login')}}" class="btn btn-success">Click Here to Login and View Tasks!</a>
            @else
              <a href="/todoapp_is421_brandonmajor/public/tasks" class="btn btn-info">View Tasks</a>
            @endif
          
          <!-- <ul class="list-unstyled">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul> -->


@endsection

@section('title')
Todo Application
@endsection


