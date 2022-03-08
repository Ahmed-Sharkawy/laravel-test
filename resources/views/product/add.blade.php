<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>add</title>
</head>
<body>

  <form action="{{url("product/stor")}}" method="post">
    @csrf
    <input type="text" name="name">
    <select name="id">
      @foreach ($res as $val)
      <option value="{{$val->id}}">{{$val->title}}</option>
      @endforeach
    </select>
    <input type="submit" value="add">
  </form>

</body>
</html>