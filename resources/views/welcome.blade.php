@include('homeheader')

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
        .wrap{
            background: rgba(0, 0, 0, 0.4) url('/img/home2.png') no-repeat;
            background-position: center;
            background-size: cover;
            min-height: 100vh;
            overflow: hidden;
            background-blend-mode: overlay;
            transition: background-image 1s ease-in-out;
        }

        .wave{
            position: absolute;
            width: 100%;
            bottom: -130px;
            color: #918585df;
            opacity: 1;

        }

        .content{
            max-width: 55%;
            padding: 100px 80px 0;
            color: #fff;
        }

        .content h1{
            font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 48px;
        }

        .content p{
            font-size: 20px;
            padding: 25px 0;
            font-weight: 300;
        }

        .btn-group{
            padding: 0px 80px;
            margin-top: 45px;
        }

        .btn-group a{
            margin-right: 20px;
            display: inline-block;
            padding: 15px 45px;
            text-decoration: none;
            color: #fff;
            border-radius: 50px;
        }

        a.color1{
            background-color: burlywood;
        }





    </style>
</head>
<body>

    <div class="wrap">

        <script>
            const backgrounds =[
                "{{asset('img/home2.jpg')}}",
                "{{asset('img/home6.jpg')}}",
                "{{asset('img/home3.jpg')}}",
                "{{asset('img/home5.jpg')}}",
            ];

            let currentIndex = 0;

            function changeBackgraound(){
                const wrapElement = document.querySelector('.wrap');
                wrapElement.style.backgroundImage = `url('${backgrounds[currentIndex]}')`;
                currentIndex = (currentIndex + 1) % backgrounds.length;
            }

            changeBackgraound();

            setInterval(changeBackgraound, 15000);
        </script>

    <div class="content">
        <h1>Effortless Student Management for Smarter Academics</h1>
        <p>A Student Management System automates tasks like admissions, attendance,
             grades, and reports for efficient academic management.</p>

    </div>

    <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,
        288,234.7C384,256,480,288,576,266.7C672,245,768,171,864,154.7C960,139,1056,
        181,1152,213.3C1248,245,1344,267,1392,277.3L1440,288L1440,320L1392,320C1344,
        320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,
        384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>

      <div class="btn-group">
        <a href="/staff/create" class="color1">Sing Up for all</a>
        <a href="/login" class="color1">Login</a>
        {{-- <a href="/staff/create" class="color1">Sing Up for Staff</a> --}}
    </div>


</div>
</body>
</html>
@include('footer')
