<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <a class="btn btn-secondary" href="{{route('posts.store')}}">View All Posts</a>
    <h1 class="text-center text-danger">Create Post</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-10 mx-auto shadow">
                <form action="{{route('posts.store')}}" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control">

                    </div>
                    <div class="mb-3">
                        <label for="content" class="form-label">
                            <textarea name="content" id="content" row="2" column="2" class="form-control"></textarea>
                        </label>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Save Data" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>