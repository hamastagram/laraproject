<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    


<ul>

    <!-- $task->id $task i run through db WE
         HAVE TO SPECIFY WHICH OBJECT TO PICK
         HERE WE NEED ID ROW SO TASK POINT TO ID ROWS AND LOOP THROUGH IT
    -->

    @foreach($tasks as $task)
<a href="/tasks/{{ $task->id }}">

       <li>{{$task->body}}</li>
</a>
    @endforeach

</ul>

</body>
</html>