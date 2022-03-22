<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="{{route("product.update",$res_product->id)}}" method="post">
    @csrf
    @method("PUT")
    {{-- <input type="hidden" name="id" value="{{$res_product->id}}"> --}}
    <input type="text" name="name" value="{{$res_product->name}}">
    <select name="category_id">
      @foreach ($res_category as $val)
      <option value="{{$val->id}}">{{$val->title}}</option>
      @endforeach
    </select>
    <input type="submit" value="add">
  </form>
</body>
</html>