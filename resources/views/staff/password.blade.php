@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .reg-container{
            background-image: url('/img/viwe.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .regstaff-form{
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top:50px;
            width: 100%;
            max-width: 800px;
        }

        .title{
            font-size: 3ch;
            font-weight: bold;
            text-align: center;
        }

        .input{
            border: none;
            outline: none;
        }


    </style>


</head>
<body>

    <div class="reg-container">
        <form class="regstaff-form" action="{{route('staff.updatePassword', $user->id)}}" method="POST">
            @method('PUT')
            @csrf

            {{-- @if($errors->any())
               <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                    @endforeach
                  </ul>
               </div>
            @endif --}}

            <h5 style="text-align: center">Enter your new Password</h5>

            <div class="form-group mt-5">
                <label for="exampleInputEmail1">Enter Password : </label>
                <input type="password" class="form-control" name="password" placeholder="Enter your Password" value="{{$user->password}}" required>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>

            <button type="submit" class="btn btn-primary mt-5" style="margin-left: 20px">Submit</button>
            <a class="btn btn-danger mt-5" style="margin-left: 20px" href="{{route('profile')}}">Cancal</a>


          </form>

    </div>

</body>
</html>


@include('footer')
