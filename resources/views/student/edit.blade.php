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
        .edit-container{
            background-image: url('/img/home3.jpg');
            background-size: cover;
            padding: 30px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .edit-form{
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-top:40px;
            width: 100%;
            max-width: 800px;
        }
    </style>
</head>
<body >
    <div class="edit-container">
    <form class="edit-form" action="{{route('student.update',$student->id)}}" method="POST">
        @method('PUT')
        @csrf

        @if($errors->any())
           <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
                @endforeach
              </ul>
           </div>
        @endif



        <div class="form-group">
            <h2  style="text-align: center">Edit here</h2>
            <br>
          <label for="exampleInputEmail1">Student First Name : </label>
          <input type="text" class="form-control" name="first_name" value="{{$student->first_name}}" placeholder="Enter your First name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student last Name : </label>
            <input type="text" class="form-control" name="last_name" value="{{$student->last_name}}" placeholder="Enter your last name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Contact Number : </label>
            <input type="number" class="form-control" name="contact_no" value="{{$student->contact_no}}" placeholder="0#########">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Address : </label>
            <input type="text" class="form-control" name="address" value="{{$student->address}}"  placeholder="Enter your Address">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Student Date of birth : </label>
            <input type="date" class="form-control" name="dob" value="{{$student->dob}}" placeholder="Enter your birthday">
        </div>

        <button type="submit" class="btn btn-primary mt-5">Update</button>
        <a class="btn btn-danger mt-5" style="margin-left: 20px" href="{{route('student.index')}}">Cancal</a>
      </form>
</div>
</body>
</html>
@include('footer')
