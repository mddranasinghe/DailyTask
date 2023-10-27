<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Update Task</title>
</head>
<body>
    <div class="container" style="align:center">
        <h2>Update Task</h2>
<form method="POST" action="/upadteSave">
            {{csrf_field()}}
        <input type="text" name="task"style="width:50%" value="{{$task->task}}"/><br><br>
        <input type="hidden" name="id" value="{{$task->id}}">
        <input type="reset" class="btn btn-danger" value="cancle">
        <input type="submit" class="btn btn-success" value="Update"></form>


</div>
</body>
</html>