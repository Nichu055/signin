<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid py-5">
        <div class="alert alert-success mx-auto mt-5" style="width: 20rem;">
            <form action="index.php" method="post">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control">

                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control">

                <label>Age</label>
                <input type="number" name="age" class="form-control">

                <label>Number</label>
                <input type="text" name="number" class="form-control">

                <label>DOB</label>
                <input type="date" name="number" class="form-control">

                <label>DOB</label>
                <input type="date" name="number" class="form-control">

                <button type="submit" class="btn btn-outline-primary mt-3" name="submit">Sign up</button>
            </form>

        </div>
    </div>
</body>
</html>