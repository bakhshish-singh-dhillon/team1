<!doctype html>
<html lang="en">

<head>
    <title>Send Email in Laravel 8 Using Gmail SMTP | Programming Fields</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 m-auto">
                <h3> Regarding - {{$detail['category']}} </h3>
                <p> <strong>User Name - </strong> {{$detail['name']}} </p>
                <p> <strong>User Email - </strong>{{$detail['email']}} </p>
                <p> <strong>Detail Message - </strong>{{$detail['message']}} </p>
                <br />
                <br />
                <p> Customer Feedback Form </p>
            </div>
        </div>
    </div>
</body>

</html>