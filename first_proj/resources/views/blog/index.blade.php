<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>

    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }

        .m-b-1em {
            margin-bottom: 1em;
        }

        .m-l-1em {
            margin-left: 1em;
        }

        .mt0 {
            margin-top: 0;
        }
    </style>

</head>

<body>

    <!-- container -->
    <div class="container">


        <div class="page-header">
            <h1>Display Blog </h1>
            <br>



        </div>
        @if (session()->has('Message-success'))
        <div class="alert alert-success">
            {{ session()->get('Message-success') }}
        </div>
    @elseif(session()->has('Message-error'))
        <div class="alert alert-danger">
            {{ session()->get('Message-error') }}
        </div>
    @endif


        <table class='table table-hover table-responsive table-bordered'>
            <!-- creating our table heading -->
            <tr>
                <th>ID</th>
                <th>tilte</th>
                <th>content</th>
                <th>Date</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>


            @foreach ($data as $key => $blog)


                <tr>

                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->created_at }}</td>

                    <td>
                        <a href='' class='btn btn-danger m-r-1em'>Delete</a>
                    </td>
                    <td>

                        <a href='' class='btn btn-primary m-r-1em'>Edit</a>
                    </td>
                </tr>
            @endforeach
            <!-- end table -->
        </table>

    </div>
    <!-- end .container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- confirm delete record will be here -->

</body>

</html>
