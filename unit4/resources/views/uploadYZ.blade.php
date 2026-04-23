<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form method="POST" action="/upload" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>