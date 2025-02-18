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

        body{
            background-image: url('/img/home3.jpg');
        }
        .main1{
            
            border-radius: 7px;
            padding: 55px 65px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.4);
            
        }

        .part1{
            background-color: #fff;
            border-radius: 7px;
            padding: 55px 65px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);
        }

        .tittle{
            color: #fff;
        }

        hr{
            color: #fff;
        }
    </style>

</head>
<body>
    <div  class="main">
        <div class="main1">
            <h2 class="tittle">Academic Documents</h2>
            <hr style="border: none; height: 2px; background-color: white;">
            <br>
            <div class="part1">
                <form  action="{{route('acadamic.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Module Name :</label>
                      <input type="text-area" class="form-control" name="academic_tittle" id="formGroupExampleInput" placeholder="Tittle" required>
                    </div><br>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Content :</label>
                      <textarea id="feedback" class="form-control" name="academic_content" placeholder="Write your Notices here..." required></textarea>
                    </div><br>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Upload file : </label>
                        <input type="file" class="form-control" name="file" id="formGroupExampleInput" placeholder="upload" accept=".pdf,.doc,.docx,.txt,.jpg,.png,.jpeg"><br>
                        <input type="file" class="form-control" name="file1" id="formGroupExampleInput" placeholder="upload" accept=".pdf,.doc,.docx,.txt,.jpg,.png,.jpeg"><br>
                        <input type="file" class="form-control" name="file2" id="formGroupExampleInput" placeholder="upload" accept=".pdf,.doc,.docx,.txt,.jpg,.png,.jpeg">
                      </div>

                    <button type="submit" class="btn btn-primary mt-3 mb-2" style=" margin-left: 1150px;">Submit</button>
                  </form>
            </div>
            </div>
    </div>

</body>
</html>


@include('footer')
