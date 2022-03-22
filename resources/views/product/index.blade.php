<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>index</title>
  </head>
  <body>

    @if (Session::has("success"))
      <div class="alert alert-success" width="100">
        {{Session::get("success")}}
      </div>
    @endif

    <div class="container">
      <table class="table">
          <a href="{{route("product.create")}}">add</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">category_id</th>
            <th scope="col">update</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($res as $val)
          <tr>
            <th scope="row">{{$val->id}}</th>
            <td>{{$val->name}}</td>
            <td>{{$val->category_id}}</td>
            <th><a href="{{route("product.edit",$val->id)}}">update</a></th>
            <th>
              <form action="{{route("product.destroy",$val->id)}}" method="post">
                @csrf
                @method("DELETE")
                <button>DELETE</button>
              </form>
            </th>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>