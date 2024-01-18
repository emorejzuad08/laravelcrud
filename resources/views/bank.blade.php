<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Bank</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container d-flex justify-content-center">
        <h1>Add Bank</h1>

        <form action="{{ url('/add_bank') }}" method="Post" ectype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="bankName">Bank Name :</label>
                    <input class="form-control input-sm" type="text" name="bankName" id="bankName" placeholder="Input Bank Name" autofocus>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="active">Active?</label>
                    <select class="form-control input-sm" name="active" id="active">
                        <option value="YES">YES</option>
                        <option value="NO">NO</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <input class="btn btn-primary" type="submit" value="Add Bank">
                </div>
            </div>
        </form>
    </div>
</body>

</html>