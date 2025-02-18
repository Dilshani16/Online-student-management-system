@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .reg-container {
            background-image: url('/img/viwe.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .regstaff-form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
            width: 100%;
            max-width: 800px;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .tittle{
            text-align: center;
            font-weight: bold;
        }

        .form-group label {
            width: 30%; /* Adjust label width as needed */
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            flex: 1; /* Make the input or select take up remaining space */
        }

        .text-danger {
            margin-left: 30%;
            font-size: 0.875rem;
        }
    </style>
</head>
<body>
    <div class="reg-container">
        <form class="regstaff-form" action="{{route('staff.updateDeatail', $user->id)}}" method="POST">
            @method('PUT')
            @csrf

            <h5 class="tittle">Edit your Details</h5>

            <div class="form-group mt-5">
                <label for="first_name">Enter your First Name:</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First name" value="{{$user->first_name}}" required>
            </div>
            <span class="text-danger">@error('first_name') {{$message}} @enderror</span>

            <div class="form-group">
                <label for="last_name">Enter your Last Name:</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your Last name" value="{{$user->last_name}}" required>
            </div>
            <span class="text-danger">@error('last_name') {{$message}} @enderror</span>

            <div class="form-group">
                <label for="email">Enter your Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{$user->email}}" required>
            </div>
            <span class="text-danger">@error('email') {{$message}} @enderror</span>

            <div class="form-group">
                <label for="contact_no">Enter your Contact Number:</label>
                <input type="number" class="form-control" id="contact_no" name="contact_no" placeholder="Enter your contact number" value="{{$user->contact_no}}" required>
            </div>
            <span class="text-danger">@error('contact_no') {{$message}} @enderror</span>

            <div class="form-group">
                <label for="position">Select your Position:</label>
                <select name="position" id="position" class="form-select" required>
                    <option value="1" disabled>Select one option</option>
                    <option value="Student" {{ $user->position == 'Student' ? 'selected' : '' }}>Student</option>
                    <option value="Professor" {{ $user->position == 'Professor' ? 'selected' : '' }}>Professor</option>
                    <option value="Lecturer" {{ $user->position == 'Lecturer' ? 'selected' : '' }}>Lecturer</option>
                    <option value="Senior Lecturer" {{ $user->position == 'Senior Lecturer' ? 'selected' : '' }}>Senior Lecturer</option>
                    <option value="Instructor" {{ $user->position == 'Instructor' ? 'selected' : '' }}>Instructor</option>
                    <option value="HR Manager" {{ $user->position == 'HR Manager' ? 'selected' : '' }}>HR Manager</option>
                    <option value="Assistant" {{ $user->position == 'Assistant' ? 'selected' : '' }}>Assistant</option>
                    <option value="Other" {{ $user->position == 'Other' ? 'selected' : '' }}>Other</option>
                </select>
                <span class="text-danger">@error('position') {{$message}} @enderror</span>
            </div>



            <div class="form-group">
                <label for="address">Enter your Address:</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Address" value="{{$user->address}}" required>
            </div>
            <span class="text-danger">@error('address') {{$message}} @enderror</span>

            <div class="form-group">
                <label for="dob">Enter your Date of Birth:</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{$user->dob}}" required>
            </div>
            <span class="text-danger">@error('dob') {{$message}} @enderror</span>

            <div class="form-group">
                <label for="username">Enter Username:</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username" value="{{$user->username}}" required>
            </div>
            <span class="text-danger">@error('username') {{$message}} @enderror</span>

            <button type="submit" class="btn btn-primary mt-5" style="float: left" >Save changes</button>
            <a class="btn btn-danger mt-5" style="margin-left: 20px; float: right" href="{{route('profile')}}">Cancal</a>
        </form>
    </div>
</body>
</html>

@include('footer')
