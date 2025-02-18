@include('user.headerU')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashdoard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .dashboard-container{
            display: flex;
            flex-direction: row;
            /* height: 100vh; */
            background-size: cover;
            min-height: 100vh;
        }

        .left-section{
            flex: 3;
            background-color: #f0f8ff;
            padding: 45px;
            box-sizing: border-box;

        }

        .right-section{
            flex:1;
            background-color: #e6e6fa;
            padding: 45px;
            box-sizing: border-box;
        }

        .mini-1{
            padding: 50px 20px;
        }

        .mini-2{
            background-color: #fff;
            padding: 5px;
            border-radius: 5px;
            color: rgb(59, 58, 58);
        }

        .upcoming{
            color: rgb(70, 70, 70);
        }

        .main-1{
            background-color: #fff;
            padding: 15px 15px;
            border-radius: 7px 7px 0px 0px;
            color: rgba(82, 80, 80, 0.871);
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        .main-2{
            background-color: #fff;
            padding: 15px 15px;
            border-radius: 7px 7px 0px 0px;
            color: rgba(82, 80, 80, 0.871);
            box-shadow: 5px 5px 15px rgba(84, 39, 39, 0.2);
        }

        .mini1{
            background-color: #efeaea6d;
            padding: 15px 15px;
            border-radius: 2px;
            color: rgba(82, 80, 80, 0.871);
            box-shadow: 5px 5px 15px rgba(208, 195, 195, 0.2);
            cursor: pointer;
            position: relative;
        }

        .notice{
            background-color: #041a70e0;
            padding: 2px 15px;
            color: #fcfcfc;
        }

        .noticeContent{
            padding: 15px 15px;
        }

        .mini2{
            background-color: #aeaaaa34;
            padding: 15px 15px;
            border-radius: 2px;
            color: rgba(82, 80, 80, 0.871);
            box-shadow: 5px 5px 15px rgba(208, 195, 195, 0.2);
            cursor: pointer;
        }

        .announce{
            background-color: #840608d9;
            padding: 2px 15px;
            color: #fcfcfc;
        }

        .announceContent{
            padding: 15px 15px;
        }

        .action-buttons {
            margin-top: 10px;
            margin-left: 790px;
        }


    </style>
</head>
<body>



    <div class="dashboard-container">
        <div class="left-section">
            <h1>Well come to Scholar...</h1>
            <p>A Student Management System automates tasks like admissions, attendance,
             grades, and reports for efficient academic management.</p>



            <div class="main-1 mt-5">
                <h3>Messages and Notices</h4>
                <hr>

                @foreach($dash_notice as $notice)

                <div class="mini1" onclick="showButtons(this)">
                    <div class="notice">
                      <h5>{{ $notice->notice_tittle }}</h1>
                    </div>
                    <div class="noticeContent">
                      <p>{{ $notice->notice_content}}</p>
                    </div>

                </div>
                <br>
                @endforeach
            </div>



            <div class="main-2 mt-5">
                <h3>SPECIAL ANNOUNCEMENTS</h4>
                <hr>

                @foreach($dash_announce as $dash_announces)
                <div class="mini2" onclick="showButtons(this)">
                    <div class="announce">
                       <h4>{{ $dash_announces->annou_tittle }}</h1>
                    </div>
                    <div class="announceContent">
                      <p>{{ $dash_announces->annou_content }}</p>
                    </div>

                </div><br>
                @endforeach

            </div>



        </div>


        <div class="right-section">
            <div class="mini-1">
                <h1>Effortless Student Management for Smarter Academics ...</h1>
            </div>
            <br>

            <div class="mini-2 mt-5">
                <h5>Upcoming events</h5>
                <hr>
                <h6 style="text-align: center; color:#3b3b3bb8">No upcoming events </h6>
                <a href="#" class="upcoming"> Go to calander..</a>
            </div>

            <div class="map">

            </div>

        </div>
    </div>

</body>
</html>

@include('user.footerU')

