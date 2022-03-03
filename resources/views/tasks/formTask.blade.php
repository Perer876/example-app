<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar tarea</title>
</head>
<body>
    <h1>Agregar Tarea</h1>
    <form action="/tasks" method="post">
        @csrf
        <label for="user">Usuario</label>
        <input type="text" name="user" id="user" value="{{ old('user') }}">
        <br>
        <label for="priority">Prioridad</label>
        <select name="priority" id="priority">
            <option value="1" {{ 1 == old('priority') ? 'selected' : ''}}>Alta</option>
            <option value="2" {{ 2 == old('priority') ? 'selected' : ''}}>Media</option>
            <option value="3" {{ 3 == old('priority') ? 'selected' : ''}}>Baja</option>
        </select>
        <br>
        <label for="description">Descripción</label>
        <input type="text" name="description" id="description" value="{{ old('description') }}">
        <br>
        <label for="deadline">Fecha</label>
        <input type="text" name="deadline" id="deadline" value="{{ old('deadline') }}">
        <br>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>