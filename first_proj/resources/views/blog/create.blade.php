<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Blog</h2>

        <form  method="post"  action="<?=  url('/Blog/Store')?>" enctype="multipart/form-data">

                    {{csrf_field()}}

            <div class="form-group">
                <label for="exampleInputName">Title</label>
                <input type="text" class="form-control"   name="title"  id="exampleInputName" aria-describedby="" placeholder="Enter Title">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <input type="text" class="form-control" name="content"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Content">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Image</label>
                <input type="file" class="form-control" name="image"  id="exampleInputEmail1" >
            </div>




            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    {{-- <p> {{$msg}} </p> --}}


        @if ($errors->any())
             <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
         </div>

          @endif

    {{-- <p> <?php //echo $msg;?></p> --}}
    </div>

</body>

</html>
