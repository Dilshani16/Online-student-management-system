<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>

        .name{
            padding: 0 25px;
        }

        .header{
            background: rgba(0, 0, 0, 0.3)
        }
        .navbar1{
            text-align: center;
            padding: 22px 150px;
            color: #fff;
        }

        .navbar1 a{
            margin-right: 25px;
            font-size: 22px;
            font-weight: 150px
        }

        .navbar1 a:hover {
            color: rgb(246, 246, 246); /* Change the color to red */
            font-size: 1.5em; /* Increase the font size */
            transition: all 0.3s ease; /* Add a smooth transition effect */
        }

        #dpd{
            border: 0cm;
            margin-right: 20px;
            font-size: 22px;
            font-weight: 170px;
            color:rgb(156, 159, 159);
        }

        #dpd:hover {
            color: rgb(246, 246, 246); /* Change the color to red */
            font-size: 1.5em; /* Increase the font size */
            transition: all 0.3s ease; /* Add a smooth transition effect */
        }

        .dropdown-menu li{
            color: rgb(4, 4, 4); /* Change the color to red */
            font-size: 0.9em; /* Increase the font size */
            transition: all 0.3s ease; /* Add a smooth transition effect */
        }

        .logout-btn{
            position: absolute;
            top: 30px; /* Adjust the top margin as needed */
            right: 12px;
        }



    </style>
</head>
<body >
    <div class=" header" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
        <h1 class="name" style="color: #fff " >Scholar</h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar1" style="text-align: center ">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/student/home">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user/academic">Academic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/user/staff">Staff</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/support">Support</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/profile">Profile</a>
            </li>

            <a href="{{route('student.home')}}" class="btn btn-secondary logout-btn" > Log Out</a>



    </nav>
</div>


</body>
</html>

