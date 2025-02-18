@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sing up for Staff</title>
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
    </style>

</head>
<body>

    <div class="reg-container">
        <form class="regstaff-form" action="{{route('staff.store')}}" method="POST">
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
                <h2  style="text-align: center">Register</h2>
              <label for="exampleInputEmail1">Enter your First Name : </label>
              <input type="text" class="form-control" name="first_name" placeholder="Enter your First name" value="{{old('first_name')}}" required>
              <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter your last Name : </label>
                <input type="text" class="form-control" name="last_name"  placeholder="Enter your last name" value="{{old('last_name')}}" required>
                <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter your email : </label>
                <input type="text" class="form-control" name="email"  placeholder="Enter your last name" value="{{old('email')}}" required>
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter your Contact Number : </label>
                <input type="number" class="form-control" name="contact_no"  placeholder="Enter your contact number" value="{{old('contact_no')}}" required>
                <span class="text-danger">@error('contact_no') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="dropdown">select your position :</label>
                <select name="position" id="dropdown" class="form-select" value="{{old('position')}}" required>
                    <option value="1" disabled>Select one option</option>
                    <option value="Student">Student</option>
                    <option value="Professor">Professor</option>
                    <option value="Lecturer">Lecturer </option>
                    <option value="Senior Lecturer">Senior Lecturer</option>
                    <option value="Instructor">Instructor</option>
                    <option value="HR Manager">HR Manager</option>
                    <option value="Assistant">Assistant</option>
                    <option value="Other">Other</option>
            </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter your Address : </label>
                <input type="text" class="form-control" name="address" placeholder="Enter your Address" value="{{old('address')}}" required>
                <span class="text-danger">@error('address') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter your Date of birth : </label>
                <input type="date" class="form-control" name="dob" placeholder="Enter your birthday" value="{{old('dob')}}" required>
                <span class="text-danger">@error('dob') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Username: </label>
                <input type="text" class="form-control" name="username" placeholder="Enter your Username" value="{{old('username')}}" required>
                <span class="text-danger">@error('username') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Password : </label>
                <input type="text" class="form-control" name="password" placeholder="Enter your Password" value="{{old('password')}}" required>
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>

            <button type="submit" class="btn btn-primary mt-5" style="margin-left: 20px">Submit</button><br>
            <a href="/login" class="mt-5">You are already register!!...Login here.</a>


          </form>

    </div>

</body>
</html>

@include('footer')
