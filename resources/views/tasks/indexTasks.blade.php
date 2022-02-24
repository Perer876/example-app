<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indice tareas</title>
</head>
<body>
    <h1>Tareas</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>Prioridad</th>
                <th>Descripción</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tareas as $tarea)
            <tr>
                <th>{{$tarea->id}}</th>
                <th>{{$tarea->user}}</th>
                <th>{{$tarea->priority}}</th>
                <th>{{$tarea->description}}</th>
                <th>{{$tarea->deadline}}</th>
            </tr>
            @endforeach
        </tbody>    
    </table>
</body>
</html>