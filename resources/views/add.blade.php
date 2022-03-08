<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>add</title>
</head>
<body>

  @error("title")<h1>{{$message}}</h1>@enderror
  @error("age")<h1>{{$message}}</h1>@enderror
  <form action="{{url("home/stor")}}" method="post">
    @csrf
    <input type="text" name="title">
    <input type="number" name="age">
    <input type="submit" value="add">
  </form>
</body>
</html>