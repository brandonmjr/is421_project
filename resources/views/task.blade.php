@extends('layouts.main')

@section('content')
 <h1 class="mt-5">Task</h1>
          <p class="lead">Single task</p>
 <div class="col-md-6 offset-md-3">
 <table class="table table-dark"> 
 	<tr>
 		<th>
 			Title
 		</th>
 		<td>
            {{$task->title}}
        </td>
     </tr>
     <tr>
 		<th>
 			Description
 		</th>
 		<td>
            {{$task->body}}
        </td> 
     </tr>
     <tr>
 		<th>
 			Task Status
 		</th>
 		<td>
            {{ $task->completed > 0 ? 'Completed' : 'Incomplete'}}
        </td> 
     </tr>
     <tr>
 		<th>
 			Created Time
 		</th>
 		<td>
            {{date("F d, Y h:i:s", strtotime($task->created_at))}}
        </td> 
     </tr>
     <tr>
 		<th>
 			Updated Time
 		</th>
 		<td>
            {{date("F d, Y h:i:s", strtotime($task->updated_at))}}
        </td> 
 	</tr>
 </table>
</div>
<div class="col-md-6 offset-md-3">
 <table class="table">
 	<tr>
 		<td><a href="edit/{{$task->id}}" class="btn btn-info col-md-12">Edit Task</a></td>
 		<td><form action="delete/{{$task->id}}" method="post" class="col-md-12">
	       {{ csrf_field() }}
	       {{ method_field('DELETE') }}
	       <button type="submit" class="btn btn-danger btn-block">Delete</button>
	   </form></td>
 	</tr> 
 </table>

 <div class="comments">
        <form action="{{$task->id}}/comments" method="post" class="col-sm-12">
            {{ csrf_field() }}
            <div class="form-group">
                <textarea name="body" placeholder="Your comment" class="form-control"></textarea>
            </div>
            <div class="form-group">
                 <button type="submit" class="btn btn-primary">Add Comment</button>
            </div>
        </form>
        <ul class="list-group">
        @foreach($task->comments as $comment)
            <li class="list-group-item">
                {{$comment->body}}<br>
                <strong>
                    Created: {{$comment->created_at->diffForHumans()}}
                </strong>
            </li>
        @endforeach
        </ul>
    </div>


</div>
@endsection

@section('title')
View Task | Todo Application
@endsection
