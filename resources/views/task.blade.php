<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daliy Task </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
   

    <div class="container" style="text-align:center"> 

        <h1>Daliy Task</h1>
        @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
            {{$error}}
</div>
@endforeach
        <form method="POST" action="/submitTask">
            {{csrf_field()}}
            <!--{{csrf_field()}} is a security measure in web forms to prevent bad guys from tricking your website into doing things on behalf of a user without their permission. It helps keep things safe and secure.
-->
        <input type="text" name="task" placeholder="Enter Your Task................"style="width:50%"><br><br>
        <input type="reset" class="btn btn-danger">
        <input type="submit" class="btn btn-success"></form>
 
<br><br>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task</th>
      <th scope="col">status</th>
      <th scope="col" colspan="3">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($task as $task)

    <tr>
     
      <td>{{$task->id}}</td>
      <td>{{$task->task}}</td>
      <td>
      @if($task->iscompleted)
      <button type="button" class="btn btn-success">Completed</button>
     @else
     <button type="button" class="btn btn-warning">Not Completed</button>
     @endif

</td>
<td >   
@if($task->iscompleted)  
<a href="/NotCompletedTask/{{$task->id}}" class="btn btn-danger">Mark as Not Completed</button>


@else
<a href="/completedTask/{{$task->id}}" class="btn btn-primary">Mark as Completed</button>

@endif
</td><td>
<a href="/updateTask/{{$task->id}}" class="btn btn-primary">Update Task</button>

</td><td>
<a href="/DeleteTask/{{$task->id}}" class="btn btn-outline-danger">X</button>

</td>
    </tr>

    @endforeach


    
    </div>

</body>
</html>