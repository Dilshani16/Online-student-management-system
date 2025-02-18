@include('header')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Announcement</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
         .main1{
            background-color: #efe9e99e;
            border-radius: 7px;
            padding: 100px 100px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .part1{
            padding: 20px 100px;
        }
    </style>
</head>
<body>

    <div>

    <div class="main1">
        <h2 class="tittle">Special Announcements</h2><hr>
        <div class="part1">
            <form  action="{{route('dash.updateA', $dash_announce->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Announcement Tittle</label>
                  <input type="text" class="form-control" name="annou_tittle" id="formGroupExampleInput" placeholder="Tittle" value="{{$dash_announce->annou_tittle}}" required>
                </div><br>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Content</label>
                  <textarea id="feedback" class="form-control" name="annou_content" placeholder="Write your Notices here..."  required>{{ $dash_announce->annou_content }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-5" style="margin-left: 1050px">Submit</button>
              </form>
        </div>
    </div>
    </div>

</body>
</html>

@include('footer')
