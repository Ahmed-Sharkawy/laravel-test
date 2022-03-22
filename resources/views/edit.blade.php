<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
  </head>
  <body>
    @error("title")<h1>{{$message}}</h1>@enderror
    @error("age")<h1>{{$message}}</h1>@enderror
    <form action="{{route("home.update",$data->id)}}" method="post">
      @csrf
      @method("PUT")
      <input type="text" value="{{$data->title}}" name="title">
      <input type="number" value="{{$data->age}}" name="age">
      <button>edit</button>
    </form>
  </body>
</html>