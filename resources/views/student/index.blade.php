@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>

        .view{
            background-image: url('/img/viwe1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 120px;
            min-height: 90vh;
            display: flex;

        }
        .viwe-container{
            background-color: rgba(255, 255, 255, 0.8);
            padding: 15px 20px;
            max-width: 1300px;
            margin: 0 auto;
            margin-top: 30;
            box-shadow:  0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            text-align: center;
        }

        .create-table{
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .create-table th,
        .create-table td{
            padding: 1rem;
            border-bottom: 1px solid #ddd;
        }

        .create-table th{
            background-color: #687786;
            color: #fff;
            font-weight: bold;
        }
        
    </style>
</head>
<body >
    <div class="view">
    <div class="viwe-container">
        <h2 class="title">Student List</h2>

    <table class="create-table table-striped mt-5 create-table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Contact No</th>
                <th scope="col">Address</th>
                <th scope="col">DOB</th>
                <th scope="col">Action</th>
                <th scope="col"></th>

            </tr>
        </thead>

        <tbody>

            @foreach ($students as $student)

                <tr>
                   <td scope="row">{{$student->id}}</td>
                   <td>{{$student->first_name}}</td>
                   <td>{{$student->last_name}}</td>
                   <td>{{$student->contact_no}}</td>
                   <td>{{$student->address}}</td>
                   <td>{{$student->dob}}</td>
                   <td><a class="btn btn-success"  href="{{route('student.edit',$student->id)}}">Edit</a></td>
                   <td><a class="btn btn-danger" href="{{route('student.delete',$student->id)}}">Delete</a></td>
                </tr>
           @endforeach
        </tbody>
    </table>
    <a href="{{route('student.create')}}" class="btn btn-primary mt-3">Add New Student</a>

</div>

</div>
</body>
</html>
@include('footer')
