<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .login{
            background-image: url('/img/viwe.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-form{
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top:50px;
            width: 100%;
            max-width: 500px;
        }
    </style>
</head>
<body>
    <div class="login">
        <form class="login-form" action="{{route("login_user")}}" method="POST">
            @csrf
            <h2 style="text-align: center">Login</h2>

            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif

            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
                
           
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Username: </label>
                <input type="text" class="form-control" name="username" placeholder="Enter your Username" required>
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Password : </label>
                <input type="text" class="form-control" name="password" placeholder="Enter your Password" required>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>

            <button type="submit" class="btn btn-primary mt-3" style="margin-left: 20px">Login</button><br>
            <a href="/staff/create" class="mt-5">You are new to here?Sing up</a>
        </form>
    </div>

</body>
</html>
