<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings</title>
</head>
<body>
    @foreach ($listings as $jobs)
        <h3>$jobs['title']</h3>
        <small>$jobs['description']</small>
        <br>
    @endforeach
</body>
</html>