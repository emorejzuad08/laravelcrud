<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        .div_deg {
            padding: 10px;
        }
    </style>
</head>

<body>
    <center>
        <br>

        <a class="btn btn-success" href="{{ url('show_product') }}">Show Products</a>

        <br>
        <h1>Add Product</h1>
        @if($errors)

        @foreach($errors->all() as $errors)
        <li style="color:red">
            {{$errors}}
        </li>
        @endforeach


        @endif
        <form action="{{ url('/add_product') }}" method="Post" enctype="multipart/form-data">

            @csrf

            <div class="div_deg">
                <label for="title">Product Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div class="div_deg">
                <label for="description">Product Description</label>
                <textarea name="description" id="description" cols="30" rows="5"></textarea>
            </div>

            <div class="div_deg">
                <label for="image">Product Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div>
                <input class="btn btn-primary" type="submit" value="Add Product">
            </div>
        </form>
    </center>

</body>

</html>