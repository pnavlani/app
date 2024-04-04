<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('save') }}" method="post">
        @csrf
       <!-- <input type="text" name="description" id="description" placeholder="Escriu l'article"> -->
        <textarea name="description" id="description"></textarea>
        <input type="submit" value="Crear">
</form>
</body>
</html>