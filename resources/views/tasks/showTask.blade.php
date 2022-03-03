<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea</title>
</head>
<body>
    <h1>Vista tarea</h1>
    <a href="/tasks">Todas las tareas</a>
    <table>
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Id</th>
                <th>{{$task->id}}</th>
            </tr>
            <tr>
                <th>Usuario</th>
                <th>{{$task->user}}</th>
            </tr>
            <tr>
                <th>Prioridad</th>
                <th>{{$task->priority}}</th>
            </tr>
            <tr>
                <th>Descripción</th>
                <th>{{$task->description}}</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>{{$task->deadline}}</th>
            </tr>
        </tbody>    
    </table>
</body>
</html>