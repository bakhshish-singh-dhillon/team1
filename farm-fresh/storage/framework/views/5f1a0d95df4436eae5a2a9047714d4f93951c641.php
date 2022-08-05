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
                <h3> Regarding - <?php echo e($detail['category']); ?> </h3>
                <p> <strong>User Name - </strong> <?php echo e($detail['name']); ?> </p>
                <p> <strong>User Email - </strong><?php echo e($detail['email']); ?> </p>
                <p> <strong>Detail Message - </strong><?php echo e($detail['message']); ?> </p>
                <br />
                <br />
                <p> Customer Feedback Form </p>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/feedback-email.blade.php ENDPATH**/ ?>