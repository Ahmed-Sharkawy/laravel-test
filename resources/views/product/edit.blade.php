<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{url("product/update")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$res2->id}}">
    <input type="text" name="name" value="{{$res2->name}}">
    <select name="category_id">
      @foreach ($res1 as $val)
      <option value="{{$val->id}}">{{$val->title}}</option>
      @endforeach
    </select>
    <input type="submit" value="add">
  </form>
</body>
</html>