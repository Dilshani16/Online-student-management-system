@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Announcements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body{
            background-color: #f0f8ff;
        }

        .main{
            box-sizing: border-box;
            background-color: #f0f8ff;
        }

        .announs-container{
            padding: 60px 70px;
        }

        .part1{
            padding: 20px 100px;
        }

        .main1{
            background-color: #fff;
            border-radius: 7px;
            padding: 15px 15px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .part2{
            padding: 20px 100px;
        }

        .main2{
            background-color: #fff;
            border-radius: 7px;
            padding: 15px 15px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .tittle{
            color: rgba(82, 80, 80, 0.871);
        }

        textarea {
            width: 100%;
            height: 120px;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
        }

    </style>
</head>
<body>
    <div class="main">
    <div class=" announs-container">


        <div class="main1">
        <h2 class="tittle">Messages and Notices</h2><hr>
        <div class="part1">
            <form  action="{{route('dash.store1')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Notices Tittle</label>
                  <input type="text-area" class="form-control" name="notice_tittle" id="formGroupExampleInput" placeholder="Tittle" required>
                </div><br>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Content</label>
                  <textarea id="feedback" class="form-control" name="notice_content" placeholder="Write your Notices here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-5" style="margin-left: 1050px">Submit</button>
              </form>
        </div>
        </div>

        <br><br>

        <div class="mt-5 main2">
        <h2 class=" tittle">Special Announcements</h2><hr>
        <div class="part2">
            <form action="{{route('dash.store2')}}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="formGroupExampleInput">Announcement Tittle</label>
                  <input type="text" class="form-control" name="annou_tittle" id="formGroupExampleInput" placeholder="Tittle" required>
                </div><br>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Content</label>
                  <textarea id="feedback" class="form-control" name="annou_content" placeholder="Write your Announcement here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-5" style="margin-left: 1050px">Submit</button>
              </form>
        </div>
        </div>
    </div>
</div>

</body>
</html>


@include('footer')
