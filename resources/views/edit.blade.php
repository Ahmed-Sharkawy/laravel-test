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
    <form action="{{url("home/update")}}" method="post">
      @csrf
      <input type="hidden" name="id" value="{{$data->id}}">
      <input type="text" value="{{$data->title}}" name="title">
      <input type="number" value="{{$data->age}}" name="age">
      <input type="submit" value="update">
    </form>
  </body>
</html>