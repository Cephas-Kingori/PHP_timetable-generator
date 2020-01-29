<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>TIMETABLE</title>
</head>
<body>
<div class="container">
<br>
<form action="form.php" class="form-inline" method="post">
    <div class="form-group mx-sm-3 mb-2">
        <p><label for="no_teachers">No. Teachers:</label></p>
        <input type="number" class="form-control" name="no_teachers" id="no_teachers" placeholder="No. Teachers" min="1">
        
    </div>
    <button type="submit" value="submit" class="btn btn-primary mb-2" name="submit">Submit</button>
</form>
</div>
</body>
</html>