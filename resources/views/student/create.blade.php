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
        .create-container{
            background-image: url('/img/home3.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .create-form{
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top:50px;
            width: 100%;
            max-width: 800px;
        }
    </style>
</head>
<body >

    <div class="create-container">

    <form class="create-form" action="{{route('student.store')}}" method="POST">
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



        <div class="form-group">
            <h2  style="text-align: center">Add New Student</h2>
          <label for="exampleInputEmail1">Student First Name : </label>
          <input type="text" class="form-control" name="first_name" placeholder="Enter your First name" value="{{old('first_name')}}">
          <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student last Name : </label>
            <input type="text" class="form-control" name="last_name"  placeholder="Enter your last name" value="{{old('last_name')}}">
            <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Contact Number : </label>
            <input type="number" class="form-control" name="contact_no"  placeholder="Enter your contact number" value="{{old('contact_no')}}">
            <span class="text-danger">@error('contact_no') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Address : </label>
            <input type="text" class="form-control" name="address" placeholder="Enter your Address" value="{{old('address')}}">
            <span class="text-danger">@error('address') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Date of birth : </label>
            <input type="date" class="form-control" name="dob" placeholder="Enter your birthday" value="{{old('dob')}}">
            <span class="text-danger">@error('dob') {{$message}} @enderror</span>
        </div>

        <button type="submit" class="btn btn-primary mt-5" style="margin-left: 20px">Submit</button>
        <a class="btn btn-danger mt-5" style="margin-left: 20px" href="{{route('student.index')}}">Cancal</a>

      </form>

</div>
</body>
</html>

@include('footer')
