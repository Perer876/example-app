<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tarea</title>
</head>
<body>
    @isset($task)
        <h1>Modificar Tarea</h1>
        <form action="/tasks/{{ $task->id }}" method="post">
        @method('PATCH')
    @else
        <h1>Agregar Tarea</h1>
        <form action="/tasks" method="post">    
    @endisset
        @csrf
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user" value="{{ strlen(old('user')) > 0 ? old('user') : (isset($task) ? $task->user : '')}}">
        @error('user')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="priority">Prioridad</label>
        <select name="priority" id="priority">
            @php
                function isSelected($value, $priority) {
                    if(strlen(old('user')) > 0) {
                        return ($value == old('priority') ? 'selected' : '');
                    }
                    return ($priority ? 'selected' : '');
                }
            @endphp
            <option value="1" {{ isSelected(1, (isset($task) && 1 == $task->priority)) }}>Alta</option>
            <option value="2" {{ isSelected(2, (isset($task) && 2 == $task->priority)) }}>Media</option>
            <option value="3" {{ isSelected(3, (isset($task) && 3 == $task->priority)) }}>Baja</option>
        </select>
        @error('priority')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" value="{{ strlen(old('description')) > 0 ? old('description') : (isset($task) ? $task->description : '')}}">
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="deadline">Fecha</label>
        <input type="text" name="deadline" id="deadline" value="{{ strlen(old('deadline')) > 0 ? old('deadline') : (isset($task) ? $task->deadline : '')}}">
        @error('deadline')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>