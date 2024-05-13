<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
    <form method="post" action="register">
        @csrf
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <a href="/login" class="">go to login</a> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    
</body>

</html>