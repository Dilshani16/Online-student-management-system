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
            background-size: cover;
            min-height: 100vh;
        }

        .tittle{
            color: #626161;
            padding: 20px  100px;
        }

        .main{
            padding: 10px 110px;
        }

        .mini1{
            background-color: #efeaea6d;
            padding: 15px 25px;
            border-radius: 2px;
            color: rgba(82, 80, 80, 0.871);
            box-shadow: 5px 5px 15px rgba(208, 195, 195, 0.2);
            cursor: pointer;
            position: relative;
        }

        .notice{
            background-color: #f0d90ae8;
            padding: 2px 20px;
            color: #fcfcfc;
        }

        .doc{
            padding: 15px 30px;
        }

        .noticeContent{
            padding: 15px 15px;
            background-color: #d8d8d631;
        }

        .action-buttons {
            margin-top: 10px;
            margin-left: 1000px;
        }


    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="main-1 mt-5">
            <div class="tittle">
                <h3 >Academic Documents.</h3>
                <hr>
            </div>

            <div  class="main">

            @foreach($photoes as $photo)

            <div class="mini1" onclick="showButtons(this)">
                <div class="notice">
                  <h5>{{$photo->academic_tittle}}</h5>
                </div>
                <div class="noticeContent">
                  <p>{{$photo->academic_content}}</p>
                </div>


                <div class="doc">
                    <!-- File 1 -->
                    @if($photo->file)
                        @if(pathinfo($photo->file, PATHINFO_EXTENSION) === 'pdf')
                        <!-- Display PDF as an icon -->
                        <li style="list-style-type: none">
                            <a href="{{ route('acadamic.viewD', ['file' => $photo->file]) }}" target="_blank" style="color: rgb(90, 88, 88)">
                                <img src="{{ asset('icons/icons.png') }}" alt="PDF Document" style="width: 30px; height: auto; padding: 5px;"> &#9; Document one
                            </a>

                        </li>
                        @else
                        <!-- Display as an image -->
                        <li style="list-style-type: none">
                            <img src="{{ asset($photo->file) }}" alt="File 1" style="width: 100px; height: auto; padding: 5px;">
                        </li>
                        @endif
                    @endif

                    <!-- File 2 -->
                    @if($photo->file1)
                        @if(pathinfo($photo->file1, PATHINFO_EXTENSION) === 'pdf')
                        <li style="list-style-type: none">
                            <a href="{{ route('acadamic.viewD', ['file' => $photo->file1]) }}" target="_blank" style="color: rgb(90, 88, 88)">
                                <img src="{{ asset('icons/icons.png') }}" alt="PDF Document" style="width: 30px; height: auto; padding: 5px;"> Document one
                            </a>
                        </li>
                        @else
                        <li style="list-style-type: none">
                            <img src="{{ asset($photo->file1) }}" alt="File 2" style="width: 100px; height: auto; padding: 5px;">
                        </li>
                        @endif
                    @endif

                    <!-- File 3 -->
                    @if($photo->file2)
                        @if(pathinfo($photo->file2, PATHINFO_EXTENSION) === 'pdf')

                            <li  style="list-style-type: none">
                                <a href="{{ route('acadamic.viewD', ['file' => $photo->file2]) }}" target="_blank"  style="color: rgb(90, 88, 88)">
                                    <img src="{{ asset('icons/icons.png') }}" alt="PDF Document" style="width: 30px; height: auto; padding: 5px;"> Document one
                                </a>
                            </li>


                        @else
                        <li style="list-style-type: none">
                            <img src="{{ asset($photo->file2) }}" alt="File 3" style="width: 100px; height: auto; padding: 5px;">
                        </li>
                        @endif
                    @endif
                </div>



            </div>
            <br>
            @endforeach

           


        </div>



    </div>

</body>
</html>

@include('footer')
