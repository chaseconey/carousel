<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carousels Are For Winners</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <h1>Users Page</h1>

    <ul>
      @foreach($users as $user)

      <li>{{ $user->name }}</li>

      @endforeach
    </ul>

</body>
</html>