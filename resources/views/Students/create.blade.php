<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary">Create Student</h1>
        <form action="{{url('Students/submit')}}" method="post">
            @csrf
            <input type="text" placeholder="Enter Student Name" class="form-control" name="name"> <br>
            <input type="text" placeholder="Enter Student Phone" class="form-control" name="phone"> <br>
            <input type="email" placeholder="Enter Student Email" class="form-control" name="email"> <br>
            <input type="password" placeholder="Enter Student Password" class="form-control" name="password"> <br>
            <input type="submit"  name="submit" class="btn btn-primary" value="Add Record"> <br>
        </form>
    </div>
</body>
</html>
