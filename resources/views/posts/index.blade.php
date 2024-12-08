<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <h1 class="text-center text-danger">All Posts Lists</h1>
    <a class="btn btn-primary" href="{{route('posts.create')}}">+ Create New Post</a><br/>
    @foreach ($posts as $post)
    <a class="text-decoration-none" href="{{route('posts.show',$post)}}">{{$post -> title}}</a>
    <a class="btn btn-success" href="{{route('posts.edit',$post)}}">Edit</a>
    <form action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf 
        @method('DELETE')

    <button class="btn btn-danger" type="submit">Delete</button><br/>
    </form>

    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>