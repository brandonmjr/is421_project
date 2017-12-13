@extends('layouts.main')

@section('content')

          <h1 class="mt-5">Task List</h1>
          @if(!$tasks->isEmpty())
          <p class="lead">Complete with pre-defined file paths and responsive navigation!</p>
          <!-- <ul class="list-unstyled">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul> -->


          <div class="panel panel-default"> 
            <div class="col-md-12">
                <a href="/todoapp_is421_brandonmajor/public/tasks">Sort by Date (asc)</a>
                |||
                <a href="/todoapp_is421_brandonmajor/public/tasks/sorted/desc">Sort by Date (desc)</a>
            </div>
                <table class="table table-dark"> 
                    <thead> 
                        <tr> 
                            <th>Task</th> 
                            <th>Status</th> 
                            <th>Created At</th> 
                            <th>View</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        @foreach ($tasks as $task)
                        <tr> 
                            <td>{{$task->title}}</td> 
                            <td> 
                                @if ($task->completed == true)
                                    <button type="button" class="btn btn-success">Completed<i class="fa fa-check" aria-hidden="true"></i></button>
                                @else 
                                    <button type="button" class="btn btn-danger">Incomplete<i class="fa fa-frown-o" aria-hidden="true"></i></button>
                                @endif
                            </td> 
                            <td>
                                {{date("F d, Y h:i:s", strtotime($task->updated_at))}}
                            </td> 
                            <td>
                                <a href="tasks/{{$task->id}}" class="btn btn-info">View Task</a>
                            </td> 
                        </tr> 
                        @endforeach
                        
                    </tbody> 
                </table> 
                <a href="tasks/create" class="btn btn-outline-success">Create a new task</a>
            </div>
            @else
                <div class="alert alert-warning">
                  <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
                  <strong>Warning!</strong> Best check yo self, you don't have any tasks.<br/><br>

                    <a href="tasks/create" class="btn btn-primary">Create a new task</a>
                </div>
            @endif


         

@endsection

@section('title')
Todo Application
@endsection


