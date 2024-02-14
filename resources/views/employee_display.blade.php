<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Employee</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container d-flex justify-content-center">
        <a class="btn btn-success" href="{{url('show_employee')}}">Show Employees</a>
        <br>
        <h1>List of Employees</h1>

        @foreach($data as $data)

        <h1>{{ $data->empid }}</h1>

        @endforeach


        <!-- <form action="{{ url('/add_employee') }}" method="Post" ectype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label for="empid">Employee ID :</label>
                    <input class="form-control input-sm" type="text" name="empid" id="empid" placeholder="Input Employee ID" autofocus>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="empid">Name :</label>
                    <input class="form-control input-sm" type="text" name="name" id="name" placeholder="Input Employee Name">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="empid">Birthday :</label>
                    <input class="form-control input-sm" type="date" name="birthday" id="birthday">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="status">Status :</label>
                    <select class="form-control input-sm" name="status" id="status">
                        <option value="regular">Regular</option>
                        <option value="probationary">Probationary</option>
                        <option value="resigned">Resigned</option>
                        <option value="retired">Retired</option>
                        <option value="awol">AWOL</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <input class="btn btn-primary" type="submit" value="Add Employee">
                </div>
            </div>
        </form> -->
    </div>
</body>

</html>