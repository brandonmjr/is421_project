@extends('layouts.main')

@section('content')
 @include('layouts.errors')

 <h1 class="mt-5">New Task</h1>
          <p class="lead">
     Create a new task</p>
 <form action="create" method="post" class="col-sm-8">

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
           <input type="text" class="form-control" id="taskTitle" name="title">
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

          </textarea>
         </div>
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
