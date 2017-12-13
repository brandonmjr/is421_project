@extends('layouts.main')

@section('content')
@include('layouts.errors')
 <h1 class="mt-5">Edit Task</h1>
          <p class="lead">
     Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}}</br>
     Updated at: {{$task->updated_at}}</br></p>
 <form action="/todoapp_is421_brandonmajor/public/tasks/edit/{{$task->id}}" method="post" class="col-sm-8">

       <div class="form-group">
           {{ csrf_field() }}
           
       </div>

 <div class="col-md-12">
 <table class="table table-dark offset-md-3"> 
  <tr>
    <th>
      Title
    </th>
      <td>
        <div class="form-group">
           <input type="text" class="form-control" id="taskTitle" name="title" value="{{$task->title}}">
       </div>
      </td>
     </tr>
     <tr>
    <th>
      Description
    </th>
      <td>  
        <div class="form-group">
          <textarea rows="4" cols="50" class="form-control" id="taskTitle" name="body">
            {{$task->body}}
          </textarea>
         </div>
        </td> 
     </tr>
     <tr>
    <th>
      Completed?
    </th>
      <td>
          <select class="form-control" id="taskStatus" name="completed" >
             <option value="1" {{ $task->completed == 1 ? 'selected' : ""}}>Complete</option>
             <option value="0" {{ $task->completed == 0 ? 'selected' : ""}}>Incomplete</option>
         </select>
      </td> 
     </tr>
 </table>


       <button type="submit" class="btn btn-info btn-block offset-md-3">Save</button>
       </form>
</div>

@endsection

@section('title')
Edit Task | Todo Application
@endsection
