<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ListBook</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <H1 style="text-align: center;padding: 20px">LISTBOOK</H1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">BookName</th>
                <th scope="col">Author</th>
                <th scope="col">ISBN</th>
                <th scope="col">Available</th>
                <th scope="col">Title</th>
                <th scope="col">Pub_year</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td>{{$author->__get("author_id")}}</td>
                    <td>{{$author->__get("book_name")}}</td>
                    <td>{{$author->__get("author")}}</td>
                    <td>{{$author->__get("ISBN")}}</td>
                    <td>{{$author->__get("Available")}}</td>
                    <td>{{$author->__get("Title")}}</td>
                    <td>{{$author->__get("pub_year")}}</td>
                </tr>
            </tbody>
        </table>

</div>

</body>
</html>
